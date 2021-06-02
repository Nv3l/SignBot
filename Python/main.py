import datetime
import email
import imaplib
import html2text
from PIL import Image
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver import ActionChains
from selenium.webdriver.support import expected_conditions as EC
import time

# File that make all the query to the database
import connectionDB as db

# File that parse the signature of the user
import imgParser

# define html2text
h2t = html2text.HTML2Text()

# define the default driver for Firefox
firefoxPath = "C:/Program Files (x86)/Mozilla Firefox/geckodriver.exe"

# define the imap address to use
mail = imaplib.IMAP4_SSL('imap-mail.outlook.com')

for users in db.getCreditentialsJSEC():

    # Login and list all the mail in the folder define
    mail.login(users[1], users[2])
    mail.list()
    mail.select('Inbox/Signature')
    result, data = mail.uid('search', None, "UNSEEN") # (ALL/UNSEEN)
    i = len(data[0].split())

    print("We find " + str(i) + " new email to sign ! Let me start my job !")

    for x in range(i):
        print("="*100)
        latest_email_uid = data[0].split()[x]
        result, email_data = mail.uid('fetch', latest_email_uid, '(RFC822)')
        # result, email_data = conn.store(num,'-FLAGS','\\Seen') 
        # this might work to set flag to seen, if it doesn't already
        raw_email = email_data[0][1]
        raw_email_string = raw_email.decode('utf-8')
        email_message = email.message_from_string(raw_email_string)

        # Header Details
        date_tuple = email.utils.parsedate_tz(email_message['Date'])
        if date_tuple:
            local_date = datetime.datetime.fromtimestamp(email.utils.mktime_tz(date_tuple))
            local_message_date = "%s" %(str(local_date.strftime("%a, %d %b %Y %H:%M:%S")))
        email_from = str(email.header.make_header(email.header.decode_header(email_message['From'])))
        email_to = str(email.header.make_header(email.header.decode_header(email_message['To'])))
        subject = str(email.header.make_header(email.header.decode_header(email_message['Subject'])))

        # Body details

        for part in email_message.walk():
            if part.get_content_type() == "text/plain":
                body = part.get_payload(decode=True)
                
                # create a file for the email with the index for name 
                file_name = "email_" + str(x) + ".txt"
                output_file = open(file_name, 'w')

                # write the email body inside the file
                output_file.write(body.decode('utf-8'))
                output_file.close()

                # read the file and search for a specific link
                output_file = open(file_name, 'r')
                for line in output_file:
                    if "https://recovery.jesuisencours.com/recovery/" in line:
                        h2t.ignore_links = True
                        print(h2t.handle(line))
                        
                        # open a new driver and paste the link founded in the URL
                        driver = webdriver.Firefox(executable_path=firefoxPath)
                        driver.minimize_window()
                        driver.set_page_load_timeout(30)
                        driver.get(h2t.handle(line))
                        time.sleep(5)

                        # try to click on the first button "Signer"
                        try:
                            findFirstButton = WebDriverWait(driver, 10).until(
                                EC.presence_of_element_located((By.CLASS_NAME, "button"))
                            )
                            findFirstButton.click()
                        except:
                            print("Email N°" + str(x) + " is already sign")
                            driver.quit()
                            continue
                        time.sleep(20)

                        # draw a specific patern (wich is the signature) into the canvas
                        actions = ActionChains(driver)
                        canvas = driver.find_element_by_xpath("/html/body/app-root/app-signature/app-default/div/div[2]/div/div/div[2]/div/signature-pad/canvas")
                        
                        # get the path of the patern signature of the user
                        querySignatureImage = db.getSignatureImagePath(users[0])[0][0]

                        # open the file with
                        signatureImage = Image.open(querySignatureImage, "r")

                        imgParser.getBlackPixel(signatureImage, actions, canvas)

                        time.sleep(10)

                        # try to click on the "Valider" button to send the signature
                        try:
                            findValidButton = WebDriverWait(driver, 10).until(
                                EC.presence_of_element_located((By.CLASS_NAME, "button-valid"))
                            )
                            findValidButton.click()
                        except:
                            print("We can't find the valid button... Email N°" + str(x) + " failed")
                            driver.quit()
                            continue
                        time.sleep(5)
                        print("Email N°" + str(x) + " is signed !")

                        # close the file and the driver
                        driver.quit()
                # passing to the next email if they have some
                output_file.close()
                print("="*100)
    # closing the mail connection and exit app
    print("Task done !")
    mail.close()
    mail.logout()

exit()
from PIL import Image
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver import ActionChains




def getBlackPixel(picture, actions, canvas):

    # listPixels = []
    # driver = webdriver.Firefox(executable_path=firefoxPath)
    # driver.maximize_window()
    # driver.set_page_load_timeout(30)
    # driver.get("http://localhost/SignBot/registerSignBot.php?registerSign")
    # time.sleep(3)
    # canvas = driver.find_element_by_xpath('//*[@id="canvas"]')
    # actions = ActionChains(driver)

    for pixX in range(picture.width):
        for pixY in range(picture.height):
           
            pixel = picture.getpixel((pixX, pixY))

            # file_name = "test.txt"

            # output_file = open(file_name, 'w')


            if pixel[3] != 0:
                # print(pixel)
                # print(pixX, pixY)
                
                # coordsPixel = [pixX, pixY]
                # print(coordsPixel)
                # listPixels.append(coordsPixel)
                actions.move_to_element_with_offset(canvas, pixX, pixY)
                # actions.click_and_hold()
                # actions.move_to_element_with_offset(canvas, pixX+1, pixY)
                actions.click()

                # https://predictivehacks.com/iterate-over-image-pixels/

                # https://www.hackerearth.com/practice/notes/extracting-pixel-values-of-an-image-in-python/


                # picture.putpixel((pixX, pixY), (0, 100, 0, 1))

                # output_file.write(str(pixel))
            else:
                continue

    # # print(listPixels)

    # initIndexedPixel = listPixels[0]

    # indexedPixel = initIndexedPixel[0]

    # lineToDraw = []
    # # print(indexedPixel)
    
    # for pixelCoords in listPixels:
    #     if pixelCoords[0] == indexedPixel:
            
    #         lineToDraw.append(pixelCoords[1])

    #         actions.move_to_element_with_offset(canvas, pixelCoords[0], lineToDraw[0])

    #         indexedPixelX = pixelCoords[0]  

    #     else:
    #         indexedCoordsLine = lineToDraw[0]

    #         listCoordsLine = []

    #         listCoordsLine.append(indexedCoordsLine)
    #         # print(listCoordsLine)

    #         for coordsLine in lineToDraw:
    #             if coordsLine == indexedCoordsLine:
    #                 # print(coordsLine)
    #                 continue
    #             if indexedCoordsLine == coordsLine-1:
    #                 listCoordsLine.append(coordsLine)

    #             else:
    #                 actions.move_to_element_with_offset(canvas, indexedPixelX, listCoordsLine[0])
    #                 actions.click_and_hold()
    #                 actions.move_to_element_with_offset(canvas, indexedPixelX, listCoordsLine[-1])
    #                 actions.release()

    #                 listCoordsLine = []


    #             indexedCoordsLine = coordsLine
                




    #         # actions.click_and_hold()
    #         # actions.move_to_element_with_offset(canvas, indexedPixelX, lineToDraw[-1])
    #         # actions.release()
    #         # print(lineToDraw)
    #         lineToDraw = []

    #     indexedPixel = pixelCoords[0]
    

    actions.perform()



            # if pixY[3] != 0:
            #     print(pixY)
            # else:
            #     continue

        # picture.save("test.png")

    # output_file.close()
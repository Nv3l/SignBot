import mysql.connector

# connexion à la bdd
mydb = mysql.connector.connect(host="localhost", user="root", passwd="", database="signbot")

myCursor = mydb.cursor()

# recuperer information jsec dans bdd
def getCreditentialsJSEC():

    query = "SELECT id,email_jsec,password_jsec FROM users WHERE register_done='DONE';"

    myCursor.execute(query)

    return myCursor.fetchall()

# recuperer signature dans bdd
def getSignatureImagePath(id):

    query = "SELECT signature_jsec FROM users WHERE id='" + str(id) + "';"

    myCursor.execute(query)

    return myCursor.fetchall()


print(getSignatureImagePath(2)[0][0])

# query = "SELECT id,email_jsec,password_jsec,signature_jsec FROM users WHERE register_done='DONE';"

# myCursor.execute(query)

# results = myCursor.fetchall()

# for users in getCreditentialsJSEC():
#     print(users[1])
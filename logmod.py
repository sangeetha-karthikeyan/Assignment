
USERNAME = "admin"
PASSWORD = "1234"

def login(user, pwd):
    if user == USERNAME and pwd == PASSWORD:
        return True
    else:
        return False

print("---- Login System ----")
u = input("Enter Username: ")
p = input("Enter Password: ")

if login(u, p):
    print("Login Successful! Welcome", u)
else:
    print("Invalid Username or Password")
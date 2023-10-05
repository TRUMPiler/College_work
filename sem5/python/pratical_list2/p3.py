def changeChar(a):
    char=a[0]
    a=a.replace(char,"@")
    a=char+a[1:]
    print(a)
a=input("enter a string ")
a=a.lower()
changeChar(a)
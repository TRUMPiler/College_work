#Write a Python program to input three numbers and display the maximum
#number.
a=int(input("enter a int"))
b=int(input("enter a int"))
c=int(input("enter a int"))

if a>b and a>c:
    print("a is maximum")
elif b>a and b>c:
    print("b is maximum")
else:
    print("c is maximum")
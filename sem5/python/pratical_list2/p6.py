a=input("enter a string ")
if len(a)<1:
    print("non empty string needed")
else:
    i=int(input("enter the index(starting from 0)"))
    print(a[0:i]+a[i+1:])
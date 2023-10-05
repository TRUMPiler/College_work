a=input("enter a string ")
if len(a)<=1:
    print(a)
    exit()
b=a[len(a)-1]+a[1:len(a)-1]+a[0:1]
print(b)
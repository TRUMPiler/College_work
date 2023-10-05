a=input("enter a string ")

for i in range(len(a)):
    
    if i%2==0:
        print(a[i],end='')
    else:
        print("",end='')
print("")
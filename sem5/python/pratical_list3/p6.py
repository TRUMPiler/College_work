a=[1,2,3,4]
b=[]
for i in range(len(a)):
    if a[i]%2==0:
        print("",end="")
    else:
        b.append(a[i])
print(b)
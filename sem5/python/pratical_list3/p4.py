a=[1,2,2,1,3,5,3]
b=[]
for i in range(len(a)):
    if a[i] not in b:
            b.append(a[i])
print(b)
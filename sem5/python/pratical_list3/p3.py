b=[]
for i in range(4):
    a=input("enter a string ")
    b+=[a]
count=0
for j in range(len(b)):
    if len(b[j])>2:
        string=b[j]
        if string[0]==string[-1]:
            print(string)
            count+=1
print(count)

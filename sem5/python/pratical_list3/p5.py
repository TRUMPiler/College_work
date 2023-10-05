a=int(input("enter a length "))
wordlist="The quick brown fox jumps over the lazy dog"
wordlist= list(wordlist.split(" "))
b=[]
for i in range(len(wordlist)):
    if len(wordlist[i])>a:
        b.append([wordlist[i]])
print(b)
from itertools import count
from operator import countOf


number =input("enter a number to check if the number is armstrong\n")
b=len(number)
number=int(number)
result = 0
originalNumber = number
while originalNumber != 0:
    remainder = originalNumber % 10
    result +=remainder**b
    originalNumber= originalNumber//10
if number==result:
    print("number is palindrom")
else:
    print("number is not palindrom")
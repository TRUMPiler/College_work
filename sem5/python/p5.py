import math
x=int(input("enter the first no :"))
y=int(input("enter the second no :"))
t1=3*math.pow(y,3)*x
t2=9*math.pow(x,2)*math.pow(y,3)
t3=5*math.pow(y,3)*x
total=t1+t2+t3
print("total :",total)
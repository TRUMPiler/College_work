import math
p=float(input("enter the amount :"))
r=float(input("enter the rate :"))
t=float(input("enter the time :"))
si=(p*r*t)/100
print("simple interest :",si)
ci= p*math.pow(1+r/100,t)-p
print("compound interest :",ci)

#Write a Python program to find volume of sphere. Formula V=(4πr^3)/3
#where π=3.14 and r is radius of sphere.


r=int(input("enter radius"))
#vol=(4*3.14*(r*r*r))/3
vol=(4/3)*3.14*(r**3)
print(str(vol))
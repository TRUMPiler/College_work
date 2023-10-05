#Write a Python program to find whether the given year is a leap year or not.
#(A year is leap if it is divisible by 4 and divisible by 100 or 400.)

year=int(input("enter a year "))
if year%4==0:
    if year%100==0 and year%400==0:
        print("year is leap")
    else:
        print("year is not")
else:
    print("year is not")

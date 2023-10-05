"""Write a Python program to print a single string from two given strings,
separated by a space and swap the first two characters of each string.
Sample String : 'abc', 'xyz'
Expected Result : 'xyc abz'."""
a=input("enter first string ")
b=input("enter second string ")
temp=a
a=b[0:1]+a[1:]
b=temp[0:1]+b[1:]
print(a+" "+b)
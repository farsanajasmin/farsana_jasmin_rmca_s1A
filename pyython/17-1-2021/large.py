Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> first=float(input("enter first number:"))
enter first number:5
>>> second=float(input("enter second number"))
enter second number8
>>> third=float(input("enter third number:"))
enter third number:10
>>> if(first>second) and (first>third):
	largest=first
elif(second>first) and (second>third):
	largest=second
else:
	largest=third

	
>>> print("the largest number is ",largest)
the largest number is  10.0
>>> 
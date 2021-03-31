Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def fact(num):
	factorial=1
	if num<0:
		print("factorial does not exist for negative numbers")
	elif num==0:
		 print("The factorial of 0 is 1")
	else:
		 for i in range(1,num + 1):
			 factorial = factorial*i
		 print("The factorial of",num,"is",factorial)

		 

>>> fact(1)
The factorial of 1 is 1
>>> fact(7)
The factorial of 7 is 5040
>>> fact(0)
The factorial of 0 is 1
>>> 

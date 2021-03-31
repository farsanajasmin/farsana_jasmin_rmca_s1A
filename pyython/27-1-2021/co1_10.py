Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def area(r):
	import math
	a=r**2*math.pi
	return a

>>> r=float(input("enter the radius of the circle: "))
enter the radius of the circle: 3
>>> print("%.2f" %area(r))
28.27
>>> 
Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def dec(c):
	li=list(c.items())
	li.sort()
	print('ascending order is',li)
	li=list(c.items())
	li.sort(reverse=True)
	print('descending order is',li)

	
>>> c={'apple':4,'orange':3,'mango':2,'banana':1}
>>> dec(c)
ascending order is [('apple', 4), ('banana', 1), ('mango', 2), ('orange', 3)]
descending order is [('orange', 3), ('mango', 2), ('banana', 1), ('apple', 4)]
>>> 

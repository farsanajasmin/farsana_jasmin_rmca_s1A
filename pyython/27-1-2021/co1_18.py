Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def mer(d1,d2):
	res={**d1,**d2}
	return res

>>> d1={'a':1,'b':2,'c':3}
>>> d2={'e':4,'f':5,'g':6}
>>> print(mer(d1,d2))
{'a': 1, 'b': 2, 'c': 3, 'e': 4, 'f': 5, 'g': 6}
>>> 

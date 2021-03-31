Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def list(l1,l2):
	a=len(l1)
	b=len(l2)
	if a == b:
		print("same length")
	else:
		print("not same length")

		
>>> l1=[1,2,3,4,5]
>>> l2=[3,4,9,0,2]
>>> list(l1,l2)
same length
>>> 

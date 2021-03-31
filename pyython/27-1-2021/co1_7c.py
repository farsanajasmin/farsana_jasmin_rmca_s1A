Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def pn(r):
	if r==1:
		print("there are common elements")
	else:
		print("no common elements")

>>> def cm(l1,l2):
	r=0
	for a in l1:
		for b in l2:
			if a==b:
				r=1
				return r


			
>>> l1=[1,2,3,4,5]
>>> l2=[3,4,9,0,2]
>>> pn(cm(l1,l2))
there are common elements
>>> l1=[1,2,3,4,5]
>>> l2=[7,8,9,0,6]
>>> pn(cm(l1,l2))
no common elements
>>> 
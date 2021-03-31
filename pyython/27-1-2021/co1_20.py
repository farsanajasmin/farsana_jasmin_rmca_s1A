Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def remove(li):
	for i in li:
		if(i%2==0):
			li.remove(i)
	print("list after removing even numbers:",li)

	
>>> li=[21,22,23,24,25,26]
>>> remove(li)
list after removing even numbers: [21, 23, 25]
>>> 

Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def check(string):
	vowels="AaEeIiOoUu"
	character=[each for each in string if each in vowels]
	print(character)

	
>>> string="farsana jasmin"
>>> check(string)
['a', 'a', 'a', 'a', 'i']
>>> 
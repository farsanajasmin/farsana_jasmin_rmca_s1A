Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def replace(str):
	char=str[0]
	str=str.replace(char,'$')
	str=char+str[1:]
	return str

>>> print(replace('wow'))
wo$
>>> 
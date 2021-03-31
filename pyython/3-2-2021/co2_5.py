Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def a(lines):
	i=1
	j=1
	while i<=lines:
		 j=1
		 while j<=i:
			 temp=i*j
			 print(temp, end='', flush=True)
			 print(" ", end='', flush=True)
			 j=j+1;
		 print("");
		 i=i+1;

		 

>>> line=6
>>> a(line)
1 
2 4 
3 6 9 
4 8 12 16 
5 10 15 20 25 
6 12 18 24 30 36 
>>> 

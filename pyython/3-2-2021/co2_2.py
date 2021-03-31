Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def fibo(term):
	n1, n2 = 0, 1
	count=0
	if term <= 0:
		 print("Please enter a positive integer")
	elif term == 1:
		 print("Fibonacci sequence upto",term,":")
		 print(n1)
	else:
		print("Fibonacci sequence:")
		while count < term:
			print(n1)
			nth = n1 + n2
			n1 = n2
			n2 = nth
			count += 1

			
>>> fibo(7)
Fibonacci sequence:
0
1
1
2
3
5
8
>>> 

Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def find(word):
	wl=[]
	for n in word:
		wl.append((len(n),n))
	wl.sort()
	result=wl[-1][0],wl[-1][1]
	print("longest word: ",result[1])
	print("length of the longest word: ",result[0])


>>> find(["hello","whatsapp","hi"])
longest word:  whatsapp
length of the longest word:  8
>>> 

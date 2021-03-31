Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> s = int (input("enter the  length of a side of square: "))
enter the  length of a side of square: 4
>>> l = int(input("enter the length of rectangle: "))
enter the length of rectangle: 5
>>> b = int(input("enter the breadth of rectangle : "))
enter the breadth of rectangle : 6
>>> h = int(input("enter the base of triangle :"))
enter the base of triangle :4
>>> d =int(input("enter the height of triangle :"))
enter the height of triangle :5
>>> x = lambda s: s* s
>>> y = lambda l,b : l* b
>>> t=0.5
>>> z = lambda h,d,t, : h*d*t
>>> print("area of square is:",x(s))
area of square is: 16
>>> print("area of rectangle:",y(l,b))
area of rectangle: 30
>>> print("area of triangle",z(h,d,t))
area of triangle 10.0
>>> 
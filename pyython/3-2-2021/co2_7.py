Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def add_string(str1):
  length = len(str1)

  if length > 1:
    if str1[-3:] == 'ing':
      str1 += 'ly'
    else:
      str1 += 'ing'
    return str1

>>> print(add_string('abc'))
abcing
>>> print(add_string('abcing'))
abcingly
>>> 

number = input("Enter a number: ")
try:
    number = int(number)
    print("The number is:", number)
except ValueError:
    print("That's not a valid number!")
finally:
    print("This block always executes, regardless of exceptions.")
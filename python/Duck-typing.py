class animal:
    alive = True

class Dog(animal):
    def speak(self):
        return "Woof!"
    
class Cat(animal):
    def speak(self):
        return "Meow!"
    
class car:
    alive = False #Duck typing in python
    def speak(self): #Duck typing in python
        return "Honk!"
    
animals = [Dog(), Cat() , car()]

for animal in animals:
    print(animal.speak())
    print(animal.alive)
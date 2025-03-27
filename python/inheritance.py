class animal:
    def __init__(self, name):
        self.name = name
        self.alive = True

    def eat(self):
        print(f"{self.name} is eating")
    
    def sleep(self):
        print(f"{self.name} is asleep")

class dog(animal):
    def speak(self):
        print("woof")

class cat(animal):
    def speak(self):
        print("meow")

class mouse(animal):
    def speak(self):
        print("squeak")

dog = dog("doggy")
cat = cat("kitty")
mouse = mouse("mickey")
print(" ")

print(dog.name)
dog.eat()
dog.speak()
dog.sleep()
print(" ")

print(cat.name)
cat.eat()
cat.speak()
cat.sleep()
print(" ")

print(mouse.name)
mouse.eat()
mouse.speak()
mouse.sleep()
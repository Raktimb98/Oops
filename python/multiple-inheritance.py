class animal: # Base class
    def __init__(self, name):
        self.name = name
    def eat(self):
        print(f"The {self.name} is eating!")

class prey(animal): # Inheritance from animal class
    def flee(self):
        print(f"The {self.name} is fleeing!")

class predator(animal): # Inheritance from animal class
    def hunt(self):
        print(f"The {self.name} is hunting!")

class rabbit(prey):
    pass
class hawk(predator):
    pass
class fish(predator, prey): #Multiple inheritance
    pass

rabbit = rabbit("rabbit")
hawk = hawk("hawk")
fish = fish("fish")

rabbit.flee()
hawk.hunt()

fish.hunt() # fish is a predator
fish.flee() # fish is also a prey

rabbit.eat() 
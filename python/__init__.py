# Python object oriented programming
from classes.car import car
car1 = car("BMW",2021,"Black",True)
car2 = car("Audi",2022,"White",False)
# print(car1)
print(car1.model)
print(car1.year)
print(car1.colour)
print(car1.for_sale)
car1.drive()
car2.stop()
car1.describe()
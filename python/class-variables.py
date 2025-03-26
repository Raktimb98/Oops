class Student:
    classYear = 2020
    num_students = 0
    def __init__(self, name, age):
        self.name = name
        self.age = age
        Student.num_students += 1
Student1 = Student("NebulaNomad",989)
Student2 = Student("JohnSnow",99)
print(Student1.name)
print(Student1.age)
print(Student2.name)
print(Student2.age)
print(Student.classYear)
print(Student.num_students)

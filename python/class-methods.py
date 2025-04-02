class student:

    count = 0
    def __init__(self,name,age):
        self.name = name
        self.age = age
        student.count += 1
    
# Instance method

    def get_info(self):
        return f"Name: {self.name}, Age: {self.age}"

    @classmethod
    def get_count(cls):
        return f"Total number of students: {cls.count}"
    
student1 = student("John", 20)
student2 = student("Jane", 22)
print(student.get_count())
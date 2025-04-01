class employee:
    def __init__(self, name ,position):
        self.name = name
        self.position = position

    def get_info(self):
        return f"Name: {self.name} =  Position: {self.position}"
    
    @staticmethod
    def is_valid_method(position):
        valid_positions = ["Manager", "Developer", "Designer"]
        return position in valid_positions
    
employee1 = employee("John Doe", "Manager")
employee2 = employee("Jane Smith", "Developer")

print(employee.is_valid_method("Manager"))
print(employee1.get_info())
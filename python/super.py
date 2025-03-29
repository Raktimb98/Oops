class Shape:
    def __init__(self, colour, is_filled):
        self.colour = colour
        self.is_filled = is_filled
    
    def describe(self):
        print(f"This {self.__class__.__name__} is {self.colour} and {'filled' if self.is_filled else 'not filled'}.")

class Circle(Shape):
    def __init__(self, colour, is_filled, radius):
        super().__init__(colour, is_filled)
        self.radius = radius
    
    def describe(self):
        super().describe()
        print(f"It is a circle with area {3.14 * self.radius * self.radius} cm².")

class Square(Shape):
    def __init__(self, colour, is_filled, width):
        super().__init__(colour, is_filled)
        self.width = width  # Fixed from radius to width

    def describe(self):
        super().describe()
        print(f"It is a square with area {self.width * self.width} cm².")  # Fixed formula

class Triangle(Shape):
    def __init__(self, colour, is_filled, base, height):  # Changed radius to base
        super().__init__(colour, is_filled)
        self.base = base
        self.height = height

    def describe(self):
        super().describe()
        print(f"It is a triangle with area {0.5 * self.base * self.height} cm².")  # Fixed formula

# Creating instances with proper naming
circle = Circle(colour="red", is_filled=True, radius=5)
square = Square(colour="blue", is_filled=False, width=10)
triangle = Triangle(colour="green", is_filled=True, base=5, height=10)  # Changed radius to base

# Printing object attributes
# print(f"Circle = {circle.colour}, {circle.is_filled}, {circle.radius}")
# print(f"Square = {square.colour}, {square.is_filled}, {square.width}")
# print(f"Triangle = {triangle.colour}, {triangle.is_filled}, {triangle.base}, {triangle.height}")

# Calling describe method
circle.describe()
# square.describe()
# triangle.describe()

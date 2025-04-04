class Rectangle:
    def __init__(self, width, height):
        self._width = width  # Private attribute
        self._height = height  # Private attribute

    @property
    def width(self):
        return f"{self._width:.1f} cm"

    @property
    def height(self):
        return f"{self._height:.1f} cm"

    @width.setter
    def width(self, new_width):
        if new_width >= 0:  # Allowing 0
            self._width = new_width
        else:
            raise ValueError("Width cannot be negative")

    @height.setter
    def height(self, new_height):
        if new_height >= 0:  # Allowing 0
            self._height = new_height
        else:
            raise ValueError("Height cannot be negative")

    @width.deleter
    def width(self):
        del self._width
        print("Width deleted")

    @height.deleter
    def height(self):
        del self._height
        print("Height deleted")

rectangle = Rectangle(10, 20)

rectangle.width = 10.5
rectangle.height = 20.5

del rectangle.width
del rectangle.height

# print(rectangle.width)
# print(rectangle.height)

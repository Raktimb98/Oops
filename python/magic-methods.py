class Book:
    def __init__(self,title,author,pages):
        self.title = title
        self.author = author
        self.pages = pages
    def __str__(self):
        return f"{self.title} by {self.author}"
    def __eq__(self, other):
        return self.title == other.title and self.author == other.author # and self.pages == other.pages
    def __lt__(self, other):
        return self.pages < other.pages
    def __gt__(self, other):
        return self.pages > other.pages
book1 = Book("Harry Potter", "JK Rowling", 500)
book2 = Book("Harry Potter", "JK Rowling", 5540)
print(book1)
print(book1 < book2)
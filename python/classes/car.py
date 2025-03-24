class car:
    def __init__(self,model,year,colour,for_sale):
        self.model = model
        self.year = year
        self.colour = colour
        self.for_sale = for_sale

    def drive(self):
        print(f"The {self.model} is moving")
    
    def stop(self):
        print(f"The {self.model} has stopped")

    def describe(self):
        print(f"The {self.model} is a {self.year} model and is {self.colour} in colour")
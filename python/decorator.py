def add_sprinkles(func):
    def wrapper():
        print("Adding sprinkles...")
        func()
    return wrapper


@add_sprinkles
def get_ice_cream():
    print("Ice cream is ready!")


get_ice_cream()

#ini bagian kelas yang berisi data-data yang akan diinputkan
class Petshop:
    def __init__(self, id, name, category, price):
        self.__id = id
        self.__name = name
        self.__category = category
        self.__price = price

    # Getter
    @property  #ini ada;ah cara di python untuk bisa langsung membuat setter getter tanpa set dan get buat lebih singkat aja

    def id(self):
        return self.__id

    @property
    def name(self):
        return self.__name

    @property
    def category(self):
        return self.__category

    @property
    def price(self):
        return self.__price

    # Setter
    @price.setter
    def price(self, value):
        if value > 0:
            self.__price = value
        else:
            print("Harga tidak valid!")

    # Cek ID
    def cek(self, id):
        return 1 if self.__id == id else 0

    # Edit data
    def edit(self):
        print("FOUND THE PRODUCT :)")
        self.__id = int(input("ENTER NEW ID: "))
        self.__name = input("ENTER NEW NAME: ")
        self.__category = input("ENTER NEW CATEGORY: ")
        self.price = float(input("ENTER NEW PRICE: ")) 
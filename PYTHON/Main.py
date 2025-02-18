from Petshop import Petshop #import kelas Petshop dari file Petshop.py

def main(): #main utamanya
    petshop = []

    while True:
        print("\n=== PETSHOP MANAGEMENT ===")
        print("1. Add Product")
        print("2. Edit Product")
        print("3. Delete Product")
        print("4. Show Product")
        print("5. Search Product")
        print("6. Exit")
        pilihan = int(input("Choose: "))

        if pilihan == 1:
            id = int(input("Enter ID: "))
            name = input("Enter Name: ")
            category = input("Enter Category: ")
            price = float(input("Enter Price: "))
            petshop.append(Petshop(id, name, category, price))
            print("Product added successfully!")

        elif pilihan == 2:
            id = int(input("Enter ID: "))
            found = 0
            i = 0
            while i < len(petshop):
                if petshop[i].cek(id) == 1:
                    petshop[i].edit()
                    found = 1
                i += 1
            if found == 0:
                print("PRODUCT NOT FOUND :(")

        elif pilihan == 3:
            id = int(input("Enter ID: "))
            found = 0
            i = 0
            while i < len(petshop):
                if petshop[i].cek(id) == 1:
                    del petshop[i]
                    found = 1
                    i -= 1  # Karena list mengecil setelah penghapusan
                i += 1
            if found == 0:
                print("PRODUCT NOT FOUND :(")
            else:
                print("Product removed!")

        elif pilihan == 4:
            if not petshop:
                print("No products available.")
            else:
                print(f"{'ID':<5} {'Name':<20} {'Category':<20} {'Price':<15}")
                print("-" * 60)
                for p in petshop:
                    formatted_price = f"Rp{p.price:,.2f}"
                    print(f"{p.id:<5} {p.name:<20} {p.category:<20} {formatted_price:<15}")

        elif pilihan == 5:
            id = int(input("ENTER ID: "))
            found = 0
            i = 0
            while i < len(petshop):
                if petshop[i].cek(id) == 1:
                    print("PRODUCT FOUND :)")
                    print(f"{'ID':<5} {'Name':<20} {'Category':<20} {'Price':<15}")
                    print("-" * 60)
                    formatted_price = f"Rp{petshop[i].price:,.2f}"
                    print(f"{petshop[i].id:<5} {petshop[i].name:<20} {petshop[i].category:<20} {formatted_price:<15}")
                    found = 1
                i += 1
            if found == 0:
                print("PRODUCT NOT FOUND :(")

        elif pilihan == 6:
            print("Thank you for using this program!")
            break

        else:
            print("Invalid choice!")

if __name__ == "__main__":
    main()

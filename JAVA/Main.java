import java.util.*;

public class Main {
    public static void main(String[] args) {
        List<Petshop> petshop = new ArrayList<>();
        Scanner sc = new Scanner(System.in);
        
        while (true) {
            System.out.println("\n=== PETSHOP MANAGEMENT ===");
            System.out.println("1. Add Product");
            System.out.println("2. Edit Product");
            System.out.println("3. Delete Product");
            System.out.println("4. Show Product");
            System.out.println("5. SEARCH PRODUCT");
            System.out.println("6. Exit");
            System.out.print("Choose: ");
            int pilihan = sc.nextInt();
            sc.nextLine();

            if (pilihan == 1) {
                System.out.print("Enter ID: ");
                int id = sc.nextInt();
                sc.nextLine();
                System.out.print("Enter Name: ");
                String name = sc.nextLine();
                System.out.print("Enter Category: ");
                String category = sc.nextLine();
                System.out.print("Enter Price: ");
                double price = sc.nextDouble();
                sc.nextLine();
                petshop.add(new Petshop(id, name, category, price));
                System.out.println("Product added successfully!");
            } else if (pilihan == 2) {
                System.out.print("Enter ID: ");
                int id = sc.nextInt();
                sc.nextLine();
                int found = 0;
                int i = 0;
                while (i < petshop.size()) {
                    if (petshop.get(i).cek(id) == 1) {
                        petshop.get(i).edit(sc);
                        found = 1;
                    }
                    i++;
                }
                if (found == 0) {
                    System.out.println("PRODUCT NOT FOUND :(");
                }
            } else if (pilihan == 3) {
                System.out.print("Enter ID: ");
                int id = sc.nextInt();
                sc.nextLine();
                int found = 0;
                int i = 0;
                while (i < petshop.size()) {
                    if (petshop.get(i).cek(id) == 1) {
                        petshop.remove(i);
                        found = 1;
                        i--; 
                    }
                    i++;
                }
                if (found == 0) {
                    System.out.println("PRODUCT NOT FOUND :(");
                } else {
                    System.out.println("Product removed!");
                }
            } else if (pilihan == 4) {
                if (petshop.isEmpty()) {
                    System.out.println("No products available.");
                } else {
                    System.out.printf("%-5s %-20s %-20s %-15s%n", "ID", "Name", "Category", "Price");
                    System.out.println("-------------------------------------------------------------");
                    for (Petshop p : petshop) {
                        String formattedPrice = String.format("Rp%,.2f", p.getPrice());
                        System.out.printf("%-5d %-20s %-20s %-15s%n", p.getId(), p.getName(), p.getCategory(), formattedPrice);
                    }
                }
            } else if (pilihan == 5) {
                System.out.println("SEARCH THE PRODUCT YOU WANT TO FIND:");
                System.out.print("ENTER ID: ");
                int id = sc.nextInt();
                sc.nextLine();
                int found = 0;
                int i = 0;
                while (i < petshop.size()) {
                    if (petshop.get(i).cek(id) == 1) {
                        System.out.println("PRODUCT FOUND :) ");
                        System.out.printf("%-5s %-20s %-20s %-15s%n", "ID", "Name", "Category", "Price");
                        System.out.println("-------------------------------------------------------------");
                        String formattedPrice = String.format("Rp%,.2f", petshop.get(i).getPrice());
                        System.out.printf("%-5d %-20s %-20s %-15s%n", petshop.get(i).getId(), petshop.get(i).getName(), petshop.get(i).getCategory(), formattedPrice);
                        found = 1;
                    }
                    i++;
                }
                if (found == 0) {
                    System.out.println("PRODUCT NOT FOUND :(");
                }
            } else if (pilihan == 6) {
                System.out.println("Thank you for using this program!");
                break;
            } else {
                System.out.println("Invalid choice!");
            }
        }

        sc.close(); 
    }
}

import java.util.Scanner;

public class Petshop {
    private int id;
    private String name;
    private String category;
    private double price;

    public Petshop(int id, String name, String category, double price) {
        this.id = id;
        this.name = name;
        this.category = category;
        this.price = price;
    }

    public int getId() { return id; }
    public String getName() { return name; }
    public String getCategory() { return category; }
    public double getPrice() { return price; }

    public int cek(int id) {
        return this.id == id ? 1 : 0;
    }

    public void edit(Scanner sc) {
        System.out.println("FOUND THE PRODUCT :) ");
        System.out.print("ENTER NEW ID : ");
        this.id = sc.nextInt();
        sc.nextLine();
        System.out.print("ENTER NEW NAME : ");
        this.name = sc.nextLine();
        System.out.print("ENTER NEW CATEGORY : ");
        this.category = sc.nextLine();
        System.out.print("ENTER NEW PRICE : ");
        this.price = sc.nextDouble();
        sc.nextLine();
    }      
}

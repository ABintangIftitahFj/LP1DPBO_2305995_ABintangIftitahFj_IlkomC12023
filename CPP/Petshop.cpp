#include <iostream>
#include <list>
#include <string>
#include <iomanip>

using namespace std;

class Petshop
{
private:
    int id;
    string nama;
    string kategori;
    double harga;

public:
    Petshop() {}

    Petshop(int id, string nama, string kategori, double harga)
    {
        Petshop::id = id;
        Petshop::nama = nama;
        Petshop::kategori = kategori;
        Petshop::harga = harga;
    }

    void set_id(int id)
    {
        this->id = id;
    }

    int get_id() const
    {
        return this->id;
    }

    void set_nama(string nama)
    {
        this->nama = nama;
    }

    string get_nama() const
    {
        return this->nama;
    }

    void set_kategori(string kategori)
    {
        this->kategori = kategori;
    }

    string get_kategori() const
    {
        return this->kategori;
    }

    void set_harga(double harga)
    {
        this->harga = harga;
    }

    double get_harga() const
    {
        return this->harga;
    }

    Petshop cek(string nama, int *ketemu) const
    {
        if (this->nama == nama)
        {
            *ketemu = 1;
            return *this; 
        }
        *ketemu = 0;      
        return Petshop(); 
    }

    void edit(string nama, int *found)
    {
        if (this->nama == nama)
        {
            *found = 1;
            cout << "FOUND THE PRODUCT :) ." << endl;
            cout << "ENTER THE NEW NAME: ";
            getline(cin, this->nama);
            cout << "ENTER NEW CATEGORY: ";
            getline(cin, this->kategori);
            cout << "ENTER THE NEW PRICE: ";
            cin >> this->harga;
            cin.ignore();
        }
        else
        {
            *found = 0;
        }
    }
    ~Petshop() {}
};
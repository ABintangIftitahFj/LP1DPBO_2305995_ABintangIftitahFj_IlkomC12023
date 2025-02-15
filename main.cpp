// #pragma once
#include <bits/stdc++.h>
#include "Petshop.cpp"


int main()
{
    list<Petshop> produkList;
    int pilihan = 0;
    cout << "\n"
         << endl;
    while (pilihan != 6)
    {
        cout << "MENU" << endl;
        cout << "1. ADD PRODUCT" << endl;
        cout << "2. DELETE PRODUCT" << endl;
        cout << "3. EDIT PRODUCT" << endl;
        cout << "4. SEARCH PRODUCT" << endl;
        cout << "5. SHOW PRODUCT" << endl;
        cout << "6. EXIT" << endl;
        cout << "CHOICE : ";
        cin >> pilihan;
        cin.ignore();
        if (pilihan == 1)
        {
            int id;
            string nama, kategori;
            double harga;
            cout << "PLEASE ENTER THE ID: ";
            cin >> id;
            cin.ignore();
            cout << "PLEASE ENTER THE NAME: ";
            getline(cin, nama);
            cout << "PLEASE ENTER THE CATEGORY: ";
            getline(cin, kategori);
            cout << "PLEASE ENTER THE PRICE: ";
            cin >> harga;
            cin.ignore();
            Petshop produk(id, nama, kategori, harga);
            produkList.push_back(produk);
            cout << "\n"
                 << endl;
            cout << "Prouduct successfully added"
                 << endl;
        }
        else if (pilihan == 2)
        {
            string nama;
            cout << "PLEASE ENTER THE NAME OF PRODUCT DO YOU WANT TO DELETE: ";
            getline(cin, nama);
            for (auto it = produkList.begin(); it != produkList.end(); ++it)
            {
                if (it->get_nama() == nama)
                {
                    produkList.erase(it);
                    cout << "\n"
                         << endl;
                    cout << "PRODUCT SUCCESSFULLY DELETED\n"
                         << endl;
                    break;
                }
                else
                {
                    cout << "PRODUCT WITH NAME " << nama << " NOT FOUND\n"
                         << endl;
                }
            }
            if (produkList.empty())
            {
                cout << "LIST IS EMPTY product -> " << nama << " not found  ;(\n"
                     << endl;
            }
        }
        else if (pilihan == 3)
        {
            string nama;
            int found = 0;
            cout << "PLEASE ENTER THE NAME OF PRODUCT DO YOU WANT TO EDIT : ";
            getline(cin, nama);
            for (auto &produk : produkList)
            {
                produk.edit(nama, &found);
            }
            if (found == 0)
            {
                cout << "CANNOT FOUND -> " << nama << " PLEASE CHECK THE NAME AGAIN\n"
                     << endl;
            }
        }
        else if (pilihan == 4)
        {
            string nama;
            cout << "SEARCH PRODUCT ENTER THE NAME OF THE PRODUCT DO YOU LOOKING FOR : ";
            getline(cin, nama);
            int ketemu = 0;
            for (const auto &produk : produkList)
            {
                Petshop hasil = produk.cek(nama, &ketemu);
                if (ketemu == 1)
                {
                    cout << "\n"
                         << endl;
                    cout << "PRODUCT FOUND AT :\n";
                    cout << "ID\tName\tcategory\tprice" << endl;
                    cout << hasil.get_id() << "\t" << hasil.get_nama() << "\t" << hasil.get_kategori() << "\t" << hasil.get_harga() << endl;
                    break;
                }
            }
            if (ketemu == 0)
            {
                cout << "PRODUCT WITH NAME " << nama << " NOT FOUND\n"
                     << endl;
            }
        }
        else if (pilihan == 5)
        {
            if (produkList.empty())
            {
                cout << "PRODUCT LIST IS EMPTY\n"
                     << endl;
            }
            else
            {
                cout << left << setw(10) << "ID" << setw(20) << "NAME" << setw(20) << "CATEGORY" << setw(10) << "PRICE" << endl;
                for (const auto &produk : produkList)
                {
                    cout << left << setw(10) << produk.get_id() << setw(20) << produk.get_nama() << setw(20) << produk.get_kategori() << setw(10) << produk.get_harga() << endl;
                }
            }
        }
        else if (pilihan == 6)
        {
            cout << "谢谢 xie xie" << endl;
        }
        else
        {
            cout << "INPUT INVALID :(" << endl;
        }
    }
    return 0;
}

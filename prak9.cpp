#include <iostream>
#include <conio.h>
#include <algorithm>
using namespace std;

int faktorial(int x) {
    int hasil = 1;
    for (int i = 1; i <= x; i++) {
        hasil *= i;
    }
    return hasil;
}

int main() {
    int n, tr, i, j, k, r, s, temp, p, nq, max;
    char a[100], tempChar;
    int no = 1;

    // Input jumlah huruf
    cout << "Masukkan jumlah huruf (n): ";
    cin >> n;

    // Input huruf-huruf
    for (i = 1; i <= n; i++) {
        cout << "Masukkan huruf ke-" << i << " : ";
        cin >> a[i];
    }

    // Input nilai r
    cout << "Masukkan nilai r (jumlah huruf dalam satu permutasi): ";
    cin >> tr;

    // Hitung jumlah permutasi: P(n, r) = n! / (n - r)!
    p = faktorial(n);
    nq = faktorial(n - tr);
    max = p / nq;

    // Urutkan huruf agar mulai dari permutasi leksikografis pertama
    sort(a + 1, a + n + 1);

    cout << "\nJumlah permutasi: " << max << endl;
    cout << "Tekan enter untuk melihat hasil generate permutasi...";
    cin.ignore(); // untuk enter sisa input sebelumnya
    cin.get(); // tunggu enter

    // Generate permutasi leksikografis manual
    for (int x = 1; x <= max; x++) {
        cout << no << ". ";
        for (i = 1; i <= tr; i++) {
            cout << a[i] << " ";
        }
        cout << endl;
        no++;

        // Cari j: titik dari kanan yang menurun
        j = n - 1;
        while (j > 0 && a[j] >= a[j + 1]) j--;

        if (j == 0) break; // Sudah terakhir

        // Cari k: elemen setelah j yang lebih besar dari a[j]
        k = n;
        while (a[j] >= a[k]) k--;

        // Tukar a[j] dan a[k]
        tempChar = a[j];
        a[j] = a[k];
        a[k] = tempChar;

        // Balik urutan dari j+1 ke n
        r = j + 1;
        s = n;
        while (r < s) {
            tempChar = a[r];
            a[r] = a[s];
            a[s] = tempChar;
            r++;
            s--;
        }
    }

    getch();
    return 0;
}


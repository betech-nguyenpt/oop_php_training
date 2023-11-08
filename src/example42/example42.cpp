/*
CT 6 - 02
Han che phuong thuc tinh
Lop TS
*/

#include <stdio.h>
#include <conio.h>
#include <ctype.h>
#include <iostream>

using namespace std;

class TS
{
    private:
        char ht[25];
        int sobd;
        float td;
    public:
        void nhap()
        {
            cout << "\nNhap ho ten: ";
            fflush(stdin);
            gets(ht);
            cout << "Nhap so bd: ";
            cin >> sobd;
            cout << "Nhap tong dien tich: ";
            cin >> td;
        }
        void in()
        {
            
            fprintf(stderr, "\n\nHo Ten: %s", ht); // error message fprintf(stdprn)
            fprintf(stderr, "\nSo bao danh: %d", sobd);
            fprintf(stderr, "\nTong diem: %0.1f", td);
        }
        void xem_in()
        {
            int ch;
            cout << "\nHo ten: " << ht;
            cout << "\n co in khong?? - C/K";
            ch = toupper(_getch());
            if (ch == 'C')
            {
                this ->in();
            }
        }
};

int main()
{
    TS t[100];
    int i, n;
    cout << "\nSo thi sinh: ";
    cin >> n;
    for(i = 1; i <= n; ++i)
    {
        t[i].nhap();
    }
    for (i = 1; i <= n; ++i)
    {
        t[i].xem_in();
    }
    _getch();
}
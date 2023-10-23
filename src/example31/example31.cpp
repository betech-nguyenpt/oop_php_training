// CT minh hoa, CT dua vao lop PS(phan so). Phuong thuc toan tu ++ van co the lam thay doi doi tuong hang(mac du khi bien dich co 3 canh bao)
// Doi tuong const
// phuong thuc const

#include <conio.h>
#include <iostream>
#include <string.h>
#include <math.h>

using namespace std;

class PS
{
private:
    int t, m;

public:
    PS()
    {
        t = m = 0;
    }
    PS(int t1, int m1)
    {
        t = t1;
        m = m1;
    }
    PS operator++()
    {
        t += m;
        return *this;
    }
    void in() const;

    void nhap()
    {
        cout << "\nNhap tu va mau: ";
        cin >> t >> m;
    }
};

void PS::in() const
{
    cout << "\nPS = " << t << "/" << m;
}

void main()
{
    int t1 = -3, m1 = 5;
    const PS p = PS(abs(t1) + 2, m1 + 2); // Khai bao doi tuong hang
    PS q;
    // clrscr();
    system("cls");
    q.nhap();
    p.in();
    q.in();
    getch();
}
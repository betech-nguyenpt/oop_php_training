
#include <conio.h>
#include <iostream>

using namespace std;

class DIEM
{
private:
    int x, y;

public:
    DIEM()
    {
        x = y = 0;
    }
    DIEM(int x1, int y1)
    {
        x = x1;
        y = y1;
    }
    void in()
    {
        cout << "(" << x << "," << y << ")";
    }
};

class DT
{
private:
    DIEM d1, d2;
    int m;

public:
    DT() : d1(), d2()
    {
        m = 0;
    }
    DT(int m1, int y1, int x1, int y2, int x2) : d1(x1, y1), d2(x2, y2)
    {
        m = m1;
    }
    DT(int m1, DIEM t1, DIEM t2)
    {
        m = m1;
        d1 = t1;
        d2 = t2;
    }
    void in()
    {
        cout << "\n Diem dau : ", d1.in();
        cout << "\n Diem cuoi : ", d2.in();
        cout << "\n Mau : " << m;
    }
};
void main()
{
    DT u, v(1, 100, 100, 200, 200), s(2, DIEM(300, 300), DIEM(400, 400));
    // clrscr();
    system("cls");
    u.in();
    v.in();
    s.in();
    getch();
}
// CT 5 - 01
// Lop co so

#include <conio.h>
#include <iostream>

using namespace std;

class DIEM
{
private:
    double x, y;

public:
    DIEM()
    {
        x = y = 0.0;
    }
    DIEM(double x1, double y1)
    {
        x = x1;
        y = y1;
    }
    void in()
    {
        cout << "\nx = " << x << " y = " << y;
    }
};

class HINH_TRON : public DIEM // DIEM la lop co so public cua HINH_TRON
{
private:
    double r;

public:
    HINH_TRON()
    {
        r = 0.0;
    }
    HINH_TRON(double x1, double y1, double r1) : DIEM(x1, y1)
    {
        r = r1;
    }
    double getR()
    {
        return r;
    }
};

void main()
{
    HINH_TRON h(2.5, 3.5, 8);
    // clrscr();
    system("cls");
    cout << "\nHinh tron co tam: ";
    h.in();
    cout << "\nCo ban kinh = " << h.getR();
    getch();
}
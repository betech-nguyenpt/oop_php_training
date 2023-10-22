#include <iostream>
#include <conio.h>

using namespace std;
// thanh phan tinh
// Lop HDBH (hoa don ban hang)

class HDBH
{
private:
    int shd;
    char *tenhang;
    double tienban;
    static int tshd;         // tong so hoa don
    static double tstienban; // tong so tien ban
public:
    static void in()
    {
        cout << "\n"
             << tshd;
        cout << "\n"
             << tstienban;
    }
};

int HDBH::tshd = 5;
double HDBH::tstienban = 20000.0;

void main()
{
    HDBH::in();
    getch();
}
// dùng mảng đối tượng ngoài.
// khai báo mảng đối tượng phải đặt sau định nghĩa kiểu đối tượng (định nghĩa lớp)

#include <iostream>
#include <conio.h>
#include <math.h>

using namespace std;

double dt_tg(int i, int j, int k); // khai bao ham dt_tg

class DIEM
{
    private:
        double x, y; // Toa do diem
    public:
        void nhapsl();
        void in();
    double do_dai(DIEM d2);
};

// Chú ý: Khai báo mảng kiểu DIEM phải đặt sau định nghĩa
// lớp DIEM

DIEM d[50];
void DIEM::nhapsl()
{
    cout << "Toa do x, y: ";
    cin >> x >> y;
}

void DIEM::in()
{
    cout << "x = " << x << " y = " << y;
}

double DIEM::do_dai(DIEM d2)
{
    return sqrt(pow(x - d2.x, 2) + pow(y - d2.y, 2));
}

double dt_tg(int i, int j, int k)
{
    double a, b, c, p, s;
    a = d[i].do_dai(d[j]);
    b = d[j].do_dai(d[k]);
    c = d[k].do_dai(d[j]);
    p = (a + b + c) / 2;
    return sqrt(p * (p - a) * (p -b) * (p - c));
}

void main()
{
    int n, i, j, k, imax,jmax, kmax;
    // clrscr();
    system("cls");
    cout << "\n So diem = ";
    cin >> n;
    for (i = 1; i<= n; ++i)
    {
        cout << "\nNhap diem " << i << " - ";
        d[i].nhapsl();
    }
    imax = 1;
    jmax = 2;
    kmax = 3;
    for (i = 1; i<= n - 2; ++i)
    {
        for (j = i + j; j <= n - 1; ++j)
        {
            for (k = j + 1; k <= n; ++k)
            {
                if (dt_tg(i, j, k) > dt_tg(imax, jmax, kmax))
                {
                    imax = i;
                    jmax = j;
                    kmax = k;
                }
            }
        }
    }
    cout << "\n\nTam giac co dien tich lon nhat: ";
    cout << "\nDinh 1 - :";
    d[imax].in();
    cout << "\nDinh 2 - :";
    d[jmax].in();
    cout << "\nDinh 3 - :";
    d[kmax].in();
    cout << "\nDien tich = " << dt_tg(imax, jmax, kmax);
    getch();
}
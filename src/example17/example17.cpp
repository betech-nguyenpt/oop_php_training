#include <math.h>
#include <iostream>
#include <conio.h>

using namespace std;

class DIEM
{
    private:
        double x, y; // Toa do cua diem
    public:
        void nhapsl()
        {
            cout << "Toa do x,y: ";
            cin >> x >> y;
        }
        void in()
        {
            cout << "x = " << x << " y = " << y;
        }
        double do_dai(DIEM d2)
        {
            return sqrt(pow(x - d2.x, 2) + pow(y - d2.y, 2));
        }
};

class TAM_GIAC
{
    private:
        DIEM d1, d2, d3; //dinh tam giac
    public:
        void nhapsl();
        void in();
        static TAM_GIAC tao_tg(DIEM e1, DIEM e2, DIEM e3)
        {
            TAM_GIAC t;
            t.d1 = e1; t.d2 = e2; t.d3 = e3;
            return t;
        }
        double dien_tich();
        TAM_GIAC maxtd(TAM_GIAC t2);
};

void TAM_GIAC::nhapsl()
{
    cout << "\nDinh 1 - ";
    d1.nhapsl();
    cout << "\nDinh 2 - ";
    d2.nhapsl();
    cout << "\nDinh 3 - ";
    d3.nhapsl();
}

void TAM_GIAC::in()
{
    cout << "\nDinh 1: "; d1.in();
    cout << "\nDinh 2: "; d2.in();
    cout << "\nDinh 3: "; d3.in();
}

double TAM_GIAC::dien_tich()
{
    double a, b, c, p, s;
    a = d1.do_dai(d2);
    b = d2.do_dai(d3);
    c = d3.do_dai(d1);
    p = (a + b + c) / 2;
    return sqrt(p * (p - a) * (p - b) * (p - c));
}

TAM_GIAC TAM_GIAC::maxtd(TAM_GIAC t2)
{
    if (this -> dien_tich() > t2.dien_tich())
    {
        return *this;
    }
    else{
        return t2;
    }
}

void main()
{
    DIEM d[50];
    int n, i;
    // clrscr();
    system("cls");
    cout << "\n So diem = ";
    cin >> n;
    for (i = 1; i <= n; ++i)
    {
        cout << "\nNhap diem " << i << " - ";
        d[i].nhapsl();
    }
    int j, k;
    TAM_GIAC tmax, t;
    tmax = TAM_GIAC::tao_tg(d[1], d[2], d[3]);
    for (i = 1; i <= n - 2; ++i)
    {
        for (j = i + 1; j <= n - 1; ++j)
        {
            for (k = j + 1; k <= n; ++k)
            {
                t = TAM_GIAC::tao_tg(d[i], d[j], d[k]);
                tmax = tmax.maxtd(t);
            }
        }
    }
    cout << "\n\nTam giac co diem tich lon nhat: ";
    tmax.in();
    cout << "\nDien tich = " << tmax.dien_tich();
    getch();
}
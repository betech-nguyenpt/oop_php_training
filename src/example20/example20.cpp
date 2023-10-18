// Chuong trinh su dung ham new de cap phat bo nho chua he so da thuc.

#include <iostream>
#include <conio.h>
#include <math.h>

using namespace std;

class DT
{
    private:
        int n; // Bac da thuc
        double *a; //Tro toi vung nho chua he so da thuc a0, aa1, ....

    public:
        friend ostream& operator << (ostream& os, const DT &d);
        friend istream& operator >> (istream& is, DT &d);
        DT operator-();
        DT operator+(const DT &d2);
        DT operator-(DT d2);
        DT operator*(const DT &d2);
        double operator^(const double &x); // Tinh gia tri da thuc
        double operator[](int i)
        {
            if (i < n)
            {
                return double(n);
            }
            else
            {
                return a[i];
            }
        }
};
// Ham tinh gia tri da thuc
double F (DT d,double x)
{
    double s = 0.0 , t = 1.0;
    int n;
    n = int(d[-1]);
    for (int i = 0; i <= n; ++i)
    {
        s += d[i] * t;
        t *= x;
    }
    return s;
}

ostream& operator << (ostream& os, const DT &d)
{
    os << "- Cac he so (tu ao): ";
    for (int i = 0; i <= d.n; ++i)
    {
        os << d.a[i] << " ";
    }
    return os;
}

istream& operator >> (istream& is, DT &d)
{
    cout << "- Bac da thuc: ";
    cin >> d.n;
    d.a = new double[d.n + 1];
    cout << "Nhap cac he so da thuc: \n";
    for (int i = 0; i <= d.n; ++i)
    {
        cout << "He so bac " << i << " = ";
        is >> d.a[i];
    }
    return is;
}

DT DT::operator-()
{
    DT p;
    p.n = n;
    p.a = new double[n + 1];
    for (int i = 0; i <= n; ++i)
    {
        p.a[i] = -a[i];
    }
    return p;
}

DT DT::operator+(const DT &d2)
{
    DT d;
    int k, i;
    k = n > d2.n ? n : d2.n;
    d.a = new double[k + 1];
    for (int i = 0; i <= k; ++i)
    {
        if (i <= n && i <= d2.n)
        {
            d.a[i] = a[i] + d2.a[i];
        }
        else if (i <= n)
        {
            d.a[i] = a[i];
        }
        else
        {
            d.a[i] = d2.a[i];
        }
    }
    i = k;
    while (i > 0 && d.a[i] == 0.0) --i;
    d.n = i;
    return d;
}

DT DT::operator-(DT d2)
{
    return (*this + (-d2));
}

DT DT::operator*(const DT &d2)
{
    DT d;
    int k, i, j;
    k = d.n = n + d2.n;
    d.a = new double[k + 1];
    for (i = 0; i <= k; ++i)
    {
        d.a[i] = 0;
    }
    for (i = 0; i <= n; ++i)
    {
        for (j = 0; j <= d2.n; ++j)
        {
            d.a[i + j] += a[i] * d2.a[j];
        }
    }
    return d;
}

double DT::operator^(const double &x)
{
    double s = 0.0, t = 1.0;
    for (int i = 0; i <= n; ++i)
    {
        s += a[i] * t;
        t *= x;
    }
    return s;
}

void main()
{
    DT p, q, r, s, f;
    double x1, x2, g1,g2;
    // clrscr();
    system("cls");
    cout << "\nNhap da thuc P ";
    cin >> p;
    cout << "\nDa thuc p " << p;
    cout << "\nNhap da thuc Q ";
    cin >> q;
    cout << "\nDa thuc q " << q;
    cout << "\nNhap da thuc R ";
    cin >> r;
    cout << "\nDa thuc r " << r;
    cout << "\nNhap da thuc S ";
    cin >> s;
    cout << "\nDa thuc s " << s;
    f = -(p + q) * (r - s);
    cout << "\nNhap so thuc x1: ";
    cin >> x1;
    cout << "\nNhap so thuc x2: ";
    cin >> x2;
    g1 = f ^ x1;
    g2 = F(f,x2);
    cout << "\nDa thuc f " << f;
    cout << "\nf("<< x1 <<") = " << g1;
    cout << "\nf("<< x2 <<") = " << g2;
    getch();
}

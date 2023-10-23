/*
CT có 2 lớp:
MT (ma trận vuông)
VT (vecto)
Lớp MT là bạn của VT và lớp VT là bạn của MT. Trong chương trình sử dụng các phương thức trùng tên:
2 phương thức nhập():
    + nhập ma trận
    + Nhập vecto
2 phương thức in():
    + in ma trận
    + in vecto
4 phương thức tich():
    + tích ma trận với ma trận, kết quả là ma trận
    + tích ma trận với vecto, kết quả là vecto
    + tích vecto với ma trận, kết quả là vecto
    + tích vecto với vecto, kết quả là số thực
Nội dung chính là:
    + Nhập các ma trận A, B, C
    + Nhập các vecto
    + tính tích D = AB
    + tính tích u = Dy
    + tính tích v = xC
    + tính tích s = vu
*/

#include <conio.h>
#include <iostream>

using namespace std;

class MT;
class VT;
class MT
{
private:
    double a[10][10];
    int n;

public:
    friend class VT;

    MT()
    {
        n = 0;
    }

    void nhap();
    void in();
    VT tich(const VT &y);
    MT tich(const MT &b);
};

class VT
{
private:
    double x[10];
    int n;

public:
    friend class MT;

    VT()
    {
        n = 0;
    }

    void nhap();
    void in();
    VT tich(const MT &y);
    double tich(const VT &b);
};

void MT::nhap()
{
    cout << "\n Cap ma tran: ";
    cin >> n;
    for (int i = 1; i <= n; ++i)
    {
        for (int j = 1; j <= n; ++j)
        {
            cout << "\nPhan tu hang " << i << " cot " << j << " = ";
            cin >> a[i][j];
        }
    }
}

void MT::in()
{
    for (int i = 1; i <= n; ++i)
    {
        cout << "\n";
        for (int j = 1; j <= n; ++j)
        {
            cout << a[i][j] << "";
        }
    }
}

void VT::nhap()
{
    cout << "\n Cap vecto: ";
    cin >> n;
    for (int i = 1; i <= n; ++i)
    {
        cout << "\nPhan tu thu " << i << " = ";
        cin >> x[i];
    }
}

void VT::in()
{
    for (int i = 1; i <= n; ++i)
    {
        cout << x[i] << " ";
    }
}

VT MT::tich(const VT &y)
{
    VT z;
    int i, j;
    for (i = 1; i <= n; ++i)
    {
        z.x[i] = 0.0;
        for (j = 1; j <= n; ++j)
        {
            z.x[i] += a[i][j] * y.x[j];
        }
    }
    z.n = n;
    return z;
}

MT MT::tich(const MT &b)
{
    MT c;
    int i, j, k;
    for (i = 1; i <= n; ++i)
    {
        for (j = 1; j <= n; ++j)
        {
            c.a[i][j] = 0.0;
            for (k = 1; k <= n; ++k)
            {
                c.a[i][j] += a[i][j] * b.a[k][j];
            }
        }
    }
    c.n = n;
    return c;
}

VT VT::tich(const MT &b)
{
    VT z;
    int i, j;
    for (j = 1; j <= n; ++j)
    {
        z.x[j] = 0.0;
        for (i = 1; i <= n; ++i)
            z.x[j] += b.a[i][j] * x[i];
    }
    z.n = n;
    return z;
}

double VT::tich(const VT &y)
{
    double tg = 0.0;
    for (int i = 1; i <= n; ++i)
    {
        tg += x[i] * y.x[i];
    }
    return tg;
}

void main()
{
    MT a, b, c;
    VT x, y;
    // clrscr();
    system("cls");
    cout << "\nMa tran A ";
    a.nhap();
    cout << "\nMa tran B ";
    b.nhap();
    cout << "\nMa tran C ";
    c.nhap();
    cout << "\nvec to X";
    x.nhap();
    cout << "\nvec to Y";
    y.nhap();
    MT d = a.tich(b);
    VT u = d.tich(y);
    VT v = x.tich(c);
    double s = v.tich(u);
    cout << "\n\nvec to v\n";
    v.in();
    cout << "\n\nMa tran D";
    d.in();
    cout << "\n\nVec to y\n";
    y.in();
    cout << "\n\nS = vDy = " << s;
    getch();
}
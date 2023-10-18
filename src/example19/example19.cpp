// Chương rình minh hoạ cách dùng hàm bạn ( Bạn của một lớp và bạn của nhiều lớp ).
// Nội dung nhập một ma trận vuông cấp n và một vector cấp n, sau đó thực hiện phép nhân ma trận với vector vừa nhập.

#include <conio.h>
#include <math.h>
#include <iostream>

using namespace std;

class VT;
class MT;

class VT
{
    private:
        int n;
        double x[20]; //Toa do cua diem
    public:
        void nhapsl();
        friend void in(const VT &x);
        friend VT tich(const MT &a, const VT &x);
};

class MT
{
    private:
        int n;
        double a[20][20];
    public:
        friend VT tich(const MT &a, const VT &x);
        friend void in(const MT &a);
        void nhapsl();
};

void VT::nhapsl()
{
    cout << "\n Cap vector = ";
    cin >> n;
    for (int i = 1; i <= n; ++i)
    {
        cout << "\nPhan tu thu " <<i << " = ";
        cin >> x[i];
    }
}

void MT::nhapsl()
{
    cout << "\n Cap ma tran = ";
    cin >> n;
    for (int i = 1; i <= n; ++i)
    {
        for (int j = 1; j <= n; ++j)
        {
            cout << "\nPhan tu thu hang " << i << " cot " << j << " = ";
            cin >> a[i][j];
        }
    }
}

VT tich(const MT &a, const VT &x)
{
    VT y;
    int n = a.n;
    if (n!=x.n)
    return x;
    y.n = n;
    for (int i = 1; i <= n; ++i)
    {
        y.x[i] = 0;
        for (int j = 1; j <= n; ++j)
        {
            y.x[i] += a.a[i][j] * x.x[j];
        }
    }
        return y;
}

void in(const VT &x)
{
    cout << "\n";
    for (int i = 1; i <= x.n; ++i)
    {
        cout << x.x[i] << " ";
    }
}

void in(const MT &a)
{
    for (int i = 1; i <= a.n; ++i)
    {
        cout << "\n";
        for (int j =1; j <= a.n; ++j)
        {
            cout << a.a[i][j] << "";
        }
    }
}

void main()
{
    MT a;
    VT x, y;
    // clrscr();
    system("cls");
    a.nhapsl();
    x.nhapsl();
    y = tich(a, x);
    // clrscr();
    system("cls");
    cout << "\nMa tran A: ";
    in(a);
    cout << "\n\nVector x: ";
    in(x);
    cout << "\n\nVector y = Ax: ";
    in(y);
    getch();
}
// Sự thay đổi của d không làm ảnh hưởng đến n và ngược lại sự thay đổi của u không làm ảnh hưởng đến d.

// Viết hàm tạo sao chép cho lớp d.

#include <iostream>
#include <conio.h>
#include <math.h>

using namespace std;

class DT
{
private:
    int n;     // bac da thuc
    double *a; // Tro toi vung nho chua cac he so da thuc a0, a1.
public:
    DT()
    {
        this->n = 0;
        this->a = NULL;
    }
    DT(int n1)
    {
        this->n = n1;
        this->a = new double[n1 + 1];
    }
    DT(const DT &d);

    friend ostream &operator<<(ostream &os, const DT &d);
    friend istream &operator>>(istream &is, DT &d);
};

DT::DT(const DT &d)
{
    this->n = d.n;
    this->a = new double[d.n + 1];
    for (int i = 0; i <= d.n; ++i)
    {
        this->a[i] = d.a[i];
    }
}

ostream &operator<<(ostream &os, const DT &d)
{
    os << " - Cac he so (tu ao): ";
    for (int i = 0; i <= d.n; ++i)
    {
        os << d.a[i] << " ";
    }
    return os;
}

istream &operator>>(istream &is, DT &d)
{
    if (d.a != NULL)
        delete d.a;
    cout << " - Bac da thuc: ";
    cin >> d.n;
    d.a = new double[d.n + 1];
    cout << "Nhap cac he so da thuc:\n";
    for (int i = 0; i <= d.n; ++i)
    {
        cout << "He so bac " << i << " = ";
        is >> d.a[i];
    }
    return is;
}

void main()
{
    DT d;
    // clrscr();
    system("cls");
    cout << "\nNhap da thuc d ";
    cin >> d;
    DT u(d);
    cout << "\nDa thuc d " << d;
    cout << "\nDa thuc u " << u;
    cout << "\nNhap da thuc d ";
    cin >> d;
    cout << "\nDa thuc u " << u;
    cout << "\nDa thuc d " << d;
    cout << "\nNhap da thuc u ";
    cin >> u;
    cout << "\nDa thuc u " << u;
    cout << "\nDa thuc d " << d;
    getch();
}
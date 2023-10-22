
/*
CT đứa vào lớp TS (thí sinh) và xét bài toán nhập vào 1 danh sách thí sinh, săp xếp danh sách theo thứ tự giảm của tổng điểm

 + Cách dùng mảng đối tượng.
 + Vai trò con trỏ this (trong phương thức hv (hoán vị)).
 + Vai trò của toán tử gán ( Nếu sử dụng phép gán mặt định thì ct sẽ cho kết quả sai)
*/

#include <string.h>
#include <conio.h>
#include <iostream>

using namespace std;

class TS
{
private:
    char *ht;
    double td;

public:
    TS() // thi sinh
    {
        ht = new char[20];
        td = 0;
    }
    ~TS()
    {
        delete ht;
    }

    const TS &operator=(const TS &ts2)
    {
        this->td = ts2.td;
        strcpy(this->ht, ts2.ht);
        return ts2;
    }

    void nhap(int i);
    void in();
    double gettd()
    {
        return td;
    }

    void hv(TS &ts2) // hv (Hoan vi)
    {
        TS tg;
        tg = *this;
        *this = ts2;
        ts2 = tg;
    }
};

void TS::in()
{
    cout << "\n Ho ten: " << ht << " Tong diem: " << td;
}

void TS::nhap(int i)
{
    cout << "\n\nNhap thi sinh: " << i;
    cout << "\n\nHo ten: ";
    cin >> ht;
    cout << "\nTong dien: ";
    cin >> td;
}

void main()
{
    TS ts[100];
    int n, i, j;
    // clrscr();
    system("cls");
    cout << "\n So thi sinh: ";
    cin >> n;
    for (i = 1; i <= n; ++i)
    {
        ts[i].nhap(i);
    }
    cout << "\nDanh sach nhap vao: ";
    for (i = 1; i <= n; ++i)
    {
        for (j = i + 1; j <= n; ++j)
        {
            if (ts[i].gettd() < ts[j].gettd())
            {
                ts[i].hv(ts[j]);
            }
        }
    }
    cout << "\n\n Danh sach sau khi da sap xep: ";
    for (i = 1; i <= n; ++i)
    {
        ts[i].in();
    }
    getch();
}
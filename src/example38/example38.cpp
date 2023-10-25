/*
CT 5 - 08
thua ke nhieu muc
gan
*/

#include <stdio.h>
#include <conio.h>
#include <string.h>
#include <iostream>
#include <cstdio>

using namespace std;

class A
{
private:
    int a;
    char *str;

public:
    A()
    {
        a = 0;
        str = NULL;
    }
    A &operator=(A &h)
    {
        this->a = h.a;
        if (this->str != NULL)
            delete this->str;
        this->str = strdup(h.str);
        return h;
    }
    void nhap()
    {
        cout << "\nNhap so nguyen lop A: ";
        cin >> a;
        if (str != NULL)
            delete str;
        cout << "\nNhap chuoi lop A: ";
        char tg[30];
        // fflush(stdin);
        // fgets(ht);
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // để xóa bộ đệm bàn phím sau khi đọc số.
        cin.getline(tg, sizeof(tg));                         // để đọc chuỗi dữ liệu từ bàn phím.
        // Hàm này cho phép bạn đọc chuỗi có độ dài tối đa sizeof(ht) và tự động chặt bỏ kí tự xuống dòng (\n) ở cuối chuỗi.
        str = strdup(tg);
    }
    void xuat()
    {
        cout << "\n"
             << "So nguyen lop A = " << a << " Chuoi lop A: " << str;
    }
};

class B
{
private:
    int b;
    char *str;

public:
    B()
    {
        b = 0;
        str = NULL;
    }
    B *getB()
    {
        return this;
    }
    B &operator=(B &h)
    {
        this->b = h.b;
        if (this->str != NULL)
            delete this->str;
        this->str = strdup(h.str);
        return h;
    }
    void nhap()
    {
        cout << "\nNhap so nguyen lop B: ";
        cin >> b;
        if (str != NULL)
            delete str;
        cout << "\nNhap chuoi lop B: ";
        char tg[30];
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // để xóa bộ đệm bàn phím sau khi đọc số.
        cin.getline(tg, sizeof(tg));                         // để đọc chuỗi dữ liệu từ bàn phím.
        str = strdup(tg);
    }
    void xuat()
    {
        cout << "\n"
             << "So nguyen lop B = " << b << " Chuoi lop B: " << str;
    }
};

class C : public B
{
private:
    int c;
    char *str;

public:
    C() : B()
    {
        c = 0;
        str = NULL;
    }
    C *getC()
    {
        return this;
    }
    C &operator=(C &h)
    {
        B *b1, *b2;
        b1 = this->getB();
        b2 = h.getB();
        *b1 = *b2;
        this->c = h.c;
        if (this->str != NULL)
            delete this->str;
        this->str = strdup(h.str);
        return h;
    }
    void nhap()
    {
        B::nhap();
        cout << "\nNhap so nguyen lop C: ";
        cin >> c;
        if (str != NULL)
            delete str;
        cout << "\nNhap chuoi lop C: ";
        char tg[30];
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // để xóa bộ đệm bàn phím sau khi đọc số.
        cin.getline(tg, sizeof(tg));                         // để đọc chuỗi dữ liệu từ bàn phím.
        str = strdup(tg);
    }

    void xuat()
    {
        B::xuat();
        cout << "\n"
             << "So nguyen lop C = " << c << " chuoi lop C: " << str;
    }
};

class D : public C
{
private:
    int d;
    char *str;
    A u;

public:
    D() : C(), u()
    {
        d = 0;
        str = NULL;
    }

    D &operator=(D &h)
    {
        this->u = h.u;
        C *c1, *c2;
        c1 = this->getC();
        c2 = h.getC();
        *c1 = *c2;
        this->d = h.d;
        if (this->str != NULL)
            delete this->str;
        this->str = strdup(h.str);
        return h;
    }
    void nhap()
    {
        u.nhap();
        C::nhap();
        cout << "\nNhap so nguyen lop D: ";
        cin >> d;
        if (str != NULL)
            delete str;
        cout << "\nNhap chuoi lop D: ";
        char tg[30];
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // để xóa bộ đệm bàn phím sau khi đọc số.
        cin.getline(tg, sizeof(tg));                         // để đọc chuỗi dữ liệu từ bàn phím.

        str = strdup(tg);
    }

    void xuat()
    {
        u.xuat();
        C::xuat();
        cout << "\n"
             << "So nguyen lop D = " << d << " chuoi lop D: " << str;
    }
};

void main()
{
    D h1, h2, h3;
    // clrscr();
    system("cls");
    h1.nhap();
    h3 = h2 = h1;
    cout << "\n\nH2: ";
    h2.xuat();
    cout << "\n\nH3: ";
    h3.xuat();
    h1.nhap();
    cout << "\n\nH2: ";
    h2.xuat();
    cout << "\n\nH3: ";
    h3.xuat();
    cout << "\n\nH1: ";
    h1.xuat();
    getch();
}
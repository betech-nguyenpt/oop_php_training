// CT 5 - 04
// Pham vi truy nhap

#include <conio.h>
#include <string.h>
#include <iostream>

using namespace std;

class A
{
protected:
    int a1;

public:
    int a2;
    A()
    {
        a1 = a2 = 0;
    }
    A(int t1, int t2)
    {
        a1 = t1;
        a2 = t2;
    }
    void in()
    {
        cout << a1 << " " << a2;
    }
};

class B : public A
{
protected:
    int b1;

public:
    int b2;
    B()
    {
        b1 = b2 = 0;
    }
    B(int t1, int t2, int u1, int u2)
    {
        a1 = t1;
        a2 = t2;
        b1 = u1;
        b2 = u2;
    }
    void in()
    {
        cout << a1 << " " << a2 << " " << b1 << " " << b2;
    }
};

class C : public B
{
public:
    C()
    {
        b1 = b2 = 0;
    }
    C(int t1, int t2, int u1, int u2)
    {
        a1 = t1;
        a2 = t2;
        b1 = u1;
        b2 = u2;
    }
    void in()
    {
        cout << a1;
        cout << " " << a2 << " " << b1 << " " << b2;
    }
};

void main()
{
    C c(1, 2, 3, 4);
    c.in();
    getch();
}
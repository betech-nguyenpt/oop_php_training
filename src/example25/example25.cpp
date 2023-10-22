
// tao ra cac chuyen dong xuong len cua cac hinh tron
// Lop do hoa
// Ham huy

#include <conio.h>
#include <iostream>
#include <math.h>
#include <stdlib.h>
#include <graphics.h>
#include <dos.h>

using namespace std;

void ktdh(); // khoi tao do hoa
void ve_bau_troi();
void ht_di_dong_xuong();
void ht_di_dong_len();
int xmax, ymax;

class HT
{
private:
    int r, m;
    int xhien, yhien; // Vi tri hien thi hinh tron tren man hinh
    char *pht;
    int hienmh;

public:
    HT();
    HT(int r1, int m1 = 15);
    ~HT();
    void hien(int x, int y);
    void an();
};

HT::HT()
{
    r = m = hienmh = 0;
    xhien = yhien = 0;
    pht = NULL;
}

HT::HT(int r1, int m1)
{
    r = r1;
    m = m1;
    hienmh = 0;
    xhien = yhien = 0;
    if (r < 0)
        r = 0;
    if (r == 0)
    {
        pht = NULL;
    }
    else
    {
        int size;
        char *pmh;
        size = imagesize(0, 0, r + r, r + r);
        pmh = new char[size];
        getimage(0, 0, r + r, r + r, pmh);
        setcolor(m);
        circle(r, r, r);
        setfillstyle(1, m);
        floodfill(r, r, m);
        pht = new char[size];
        getimage(0, 0, r + r, r + r, pht);
        putimage(0, 0, pmh, COPY_PUT);
        delete pmh;
        pmh = NULL;
    }
}

void HT::hien(int x, int y)
{
    if (pht != NULL && !hienmh) // chua hien
    {
        hienmh = 1;
        xhien = x;
        yhien = y;
        putimage(x, y, pht, XOR_PUT);
    }
}

void HT::an()
{
    if (hienmh) // dang hien
    {
        hienmh = 0;
        putimage(xhien, yhien, pht, XOR_PUT);
    }
}

HT::~HT()
{
    an();
    if (pht != NULL)
    {
        delete pht;
        pht = NULL;
    }
}

void ktdh()
{
    int mh = 0, mode = 0;
    //    initgraph(&mh, &mode, "");
    xmax = getmaxx();
    ymax = getmaxy();
}

int random(int max)
{
    int retval = 0;
    while (retval >= max)
    {
        retval = rand();
    }

    return retval;
}

void ve_bau_troi()
{
    for (int i = 0; i < 2000; ++i)
        putpixel(random(xmax), random(ymax), 1 + random(15));
}

void ht_di_dong_xuong()
{
    HT h(50, 4);
    HT u(60, 15);
    h.hien(0, 0);
    u.hien(40, 0);
    for (int x = 0; x <= 340; x += 10)
    {
        h.an();
        u.an();
        h.hien(x, x);
        delay(200);
        u.hien(x + 40, x);
        delay(200);
    }
}

void ht_di_dong_len()
{
    HT h(50, 4);
    HT u(60, 15);
    h.hien(340, 340);
    u.hien(380, 240);
    for (int x = 340; x >= 0; x -= 10)
    {
        h.an();
        u.an();
        h.hien(x, x);
        delay(200);
        u.hien(x + 40, x);
        delay(200);
    }
}

int main()
{
    ktdh();
    ve_bau_troi();
    ht_di_dong_len();
    ht_di_dong_xuong();
    getch();
    closegraph();
}

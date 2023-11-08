// CT 5 -10
// Phat trien CT

#include <stdio.h>
#include <conio.h>
#include <string.h>
#include <graphics.h>
#include <iostream>

using namespace std;

class DIEM
{
    private:
        int x, y;
    public:
        DIEM()
        {
            x = y = 0;
        }
        
        DIEM(int x1, int y1)
        {
            x = x1;
            y = y1;
        }
        DIEM(DIEM &d)
        {
            this->x = d.x;
            this->y = d.y;
        }
        int operator[](int i)
        {
            if(i == 1)
                return x;
            else
                return y;
        }
};

class DUONG_TRON : public DIEM
{
    private:
        int r, md;
    public:
        DUONG_TRON() : DIEM()
        {
            r = md = 0;
        }
        DUONG_TRON(DIEM d, int r1, int md1) : DIEM(d)
        {
            r = r1;
            md = md1;
        }
        int ve()
        {
            setcolor(md);
            circle((*this)[1], (*this)[2],r);
        }
        int getmd()
        {
            return md;
        }
};

class HINH_TRON : public DUONG_TRON
{
    private:
        int mt;
    public:
        HINH_TRON() : DUONG_TRON()
        {
            mt = 0;
        }
        HINH_TRON(DIEM d, int r1, int md1, int mt1) : DUONG_TRON(d, r1, md1)
        {
            mt = mt1;
        }
        int ve()
        {
            DUONG_TRON::ve();
            setfillstyle(1, mt);
            floodfill((*this)[1], (*this)[2], this->getmd());
        }
};

class DOAN_THANG
{
    private:
        DIEM d1, d2;
        int md;
    public:
        DOAN_THANG() : d1(), d2()
        {
            md = 0;
        }
        DOAN_THANG(DIEM t1, DIEM t2, int md1)
        {
            d1 = t1;
            d2 = t2;
            md = md1;
        }
        int ve()
        {
            setcolor(md);
            line(d1[1], d1[2], d2[1], d2[2]);
        }
};

class TAM_GIAC
{
    private:
        DIEM d1, d2, d3;
        int md, mt;
    public:
        TAM_GIAC() : d1(), d2(), d3()
        {
            md = mt = 0;
        }
        TAM_GIAC(DIEM t1, DIEM t2, DIEM t3, int md1, int mt1)
        {
            d1 = t1;
            d2 = t2;
            d3 = t3;
            md = md1;
            mt = mt1;
        }
        int ve()
        {
            DOAN_THANG(d1, d2, md).ve();
            DOAN_THANG(d1, d3, md).ve();
            DOAN_THANG(d2, d3, md).ve();
            setfillstyle(1, mt);
            floodfill((d1[1] + d2[1] + d3[1])/3, (d1[2] + d2[2] + d3[2])/3, md);
        }
};

int ktdh()
{
    int mh = 0, mode = 0;
    initgraph(&mh, &mode, "");
}
int main()
{
    ktdh();
    DUONG_TRON dt(DIEM(100, 100), 80, MAGENTA);
    HINH_TRON ht(DIEM(400, 100), 80, RED, YELLOW);
    DOAN_THANG t(DIEM(100, 100), DIEM(400, 100), BLUE);
    TAM_GIAC tg(DIEM(250, 150), DIEM(100, 400), DIEM(400, 400), CYAN, CYAN);
    dt.ve();
    ht.ve();
    t.ve();
    tg.ve();
    _getch();
    closegraph();
}
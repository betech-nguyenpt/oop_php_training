/**
 * @file example46.cpp
 * @author TyNT
 * @brief  CT6 - 05
 * @version 0.1
 * @date 2023-11-08
 * 
 * @copyright Copyright (c) 2023
 * 
 * Lop truu tuong 
 * Lop hinh hoc
 */

#include <conio.h>
#include <graphics.h>

class HINH
{
    private:
        int mau;
    public:
        HINH(int m)
        {
            mau = m;
        }
        int getmau()
        {
            return mau;
        }
        virtual void draw(int x, int y) = 0;
};

class DTHANG : public HINH
{
    private:
        int dodai;
    public:
        DTHANG(int m, int d) : HINH(m)
        {
            dodai = d;
        }
        virtual void draw(int x, int y)
        {
            setcolor(getmau());
            line(x, y, x + dodai, y);
        }
};

class CHUNHAT : public HINH
{
    private:
        int rong, cao;
    public:
        CHUNHAT(int r, int c, int m) : HINH(m)
        {
            rong = r;
            cao = c;
        }
        virtual void draw(int x, int y)
        {
            setcolor(getmau());
            rectangle(x, y, x + rong, y + cao);
            setfillstyle(1, getmau());
            floodfill(x + rong/2, y + cao/2, getmau());
        }
};

class VUONG : public CHUNHAT
{
    public:
        VUONG(int a, int m) : CHUNHAT(a, a, m)
        {

        }
};

class HTRON : public HINH
{
    private:
        int bk; // ban kinh
    public:
        HTRON(int bk1, int m) : HINH(m)
        {
            bk = bk1;
        }
        virtual void draw(int x, int y)
        {
            setcolor(getmau());
            circle(x + bk, y + bk, bk);
            setfillstyle(1, getmau());
            floodfill(x + bk/2, y + bk/2, getmau());
        }
};

class picture
{
    private:
        HINH *h[4];
    public:
        picture(HINH *h0, HINH *h1, HINH*h2, HINH *h3)
        {
            h[0] = h0;
            h[1] = h1;
            h[2] = h2;
            h[3] = h3;
        }
        void paint(int *k);
        void listpaint();
};
    void picture::paint(int *k)
    {
        int i;
        for (i = 0; i < 4; ++i)
        {
            h[k[i]]->draw(10 + i * 150, 200);
        }
    }
    void picture::listpaint()
    {
        int k[4], i1, i2, i3, i4;
        for (i1 = 0; i1 < 4; ++i1)
        {
            for (i2 = 0; i2 < 4; ++i2)
            {
                if (i2 != i1)
                {
                    for (i3 = 0; i3 < 4; ++i3)
                    {
                        if (i3!= i2 && i3 != i1)
                        {
                            for (i4 = 0; i4 < 4; ++i4)
                            {
                                if (i4!= i3 && i1 != i2 && i4 != i1)
                                {
                                    k[0] = i1;
                                    k[1] = i2;
                                    k[2] = i3;
                                    k[3] = i4;
                                    paint(k);
                                    getch();
                                    cleardevice();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    DTHANG dt(120, 14);
    HTRON ht(60, RED);
    CHUNHAT cn(120, 100, MAGENTA);
    VUONG v(120, CYAN);

int main()
{
    int mh = 0, mode = 0;
    initgraph(&mh, &mode, "");
    picture pic(&dt, &ht, &cn, &v);
    pic.listpaint();
    getch();
    closegraph();
}
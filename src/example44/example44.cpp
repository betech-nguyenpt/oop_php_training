/*
CT6 - 04
Lop co so truu tuong
lop CON_VAT
*/

#include <conio.h>
#include <stdio.h>
#include <string.h>
#include <ctype.h>
#include <iostream>

using namespace std;

class CON_VAT
{
    protected:
        char *ten;
    public:
        CON_VAT()
        {
            ten = NULL;
        }
        CON_VAT(char *ten1)
        {
            ten = strdup(ten1);   
        }
        virtual void xung_ten()
        {

        }
};

class CON_MEO : public CON_VAT
{
    public:
        CON_MEO() : CON_VAT()
        {

        }
        CON_MEO(char *ten1) : CON_VAT(ten1)
        {

        }
        virtual void xung_ten()
        {
            cout << "\nToi la chu meo: " <<ten;   
        }
};

class CON_CHO : public CON_VAT
{
    public:
    CON_CHO() : CON_VAT()
    {

    }
    CON_CHO(char *ten1) : CON_VAT(ten1)
    {

    }
    virtual void xung_ten()
    {
        cout << "\nToi la chu cho: " <<ten;
    }
};

class DS_CON_VAT // danh sach con vat
{
    private:
        int max_so_con_vat;
        int so_con_vat;
        CON_VAT **h;
    public:
        DS_CON_VAT(int max);
        ~DS_CON_VAT();
        int nhap(CON_VAT *c);
        CON_VAT*xuat(int n);
        void thong_ke();
};

DS_CON_VAT::DS_CON_VAT(int max)
{
    max_so_con_vat = max;
    so_con_vat = 0;
    h = new CON_VAT*[max];
    for (int i = 0; i < max; ++i)
    {
        h[i] = NULL;
    }
}
DS_CON_VAT::~DS_CON_VAT()
{
    max_so_con_vat = 0;
    so_con_vat = 0;
    delete h;
}
int DS_CON_VAT::nhap(CON_VAT *c)
{
    if (so_con_vat == max_so_con_vat)
        return 0;
    int i = 0;
    while (h[i] != NULL) ++i;
    h[i] = c;
    so_con_vat++;
    return (i + 1);
}
CON_VAT *DS_CON_VAT::xuat(int n)
{
    if (n < 1 || n > max_so_con_vat)
        return NULL;
    --n;
    if (h[n])
    {
        CON_VAT *c = h[n];
        h[n] = NULL;
        so_con_vat--;
        return c;
    }
    else
        return NULL;
}
void DS_CON_VAT::thong_ke()
{
    if (so_con_vat)
    {
        cout << "\n";
        for (int i = 0; i < max_so_con_vat; ++i)
        {
            if (h[i])
            {
                h[i]->xung_ten();
            }
        }
    }
}
CON_CHO c1("MUC");
CON_CHO c2("DEN");
CON_CHO c3("LAI");
CON_CHO c4("NHAT");
CON_CHO c5("BONG");
CON_MEO m1("Tam The");
CON_MEO m2("Trang");
CON_MEO m3("vang");
CON_MEO m4("Hong");
CON_MEO m5("Beerus ");

int main()
{
    DS_CON_VAT d(20);
     // clrscr();
    system("cls");
    d.nhap(&c1);
    int im2 = d.nhap(&m2);
    d.nhap(&c3);
    d.nhap(&m1);
    int ic4 = d.nhap(&c4);
    d.nhap(&c5);
    d.nhap(&m5);
    d.nhap(&c2);
    d.nhap(&m3);
    d.thong_ke();
    d.xuat(im2);
    d.xuat(ic4);
    d.thong_ke();
    _getch();
}
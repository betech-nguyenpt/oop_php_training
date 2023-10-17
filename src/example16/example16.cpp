#include <conio.h>
#include <iostream>

using namespace std;

class HINH_CN
{
    private:
    int d ,r; // chieu dai va chieu rong
    public:
    void nhapsl()
    {
        cout << "\nNhap chieu dai va chieu rong: ";
        cin >> d >> r;
    }
    void in()
    {
        cout << "\nChieu dai = " << d;
        cout << " Chieu rong = " << r;
    }
    int dien_tich()
    {
        return d*r;
    }
    int chu_vi()
    {
        return 2*(d + r);
    }
};
class DAY_HINH_CN
{
    private:
    int n; // So hinh chu nhat
    HINH_CN*h;
    public:
    void nhapsl();
    HINH_CN hinh_dt_max();
    HINH_CN *hinh_cv_max();
};
void DAY_HINH_CN::nhapsl()
{
    cout << "So hinh CN = ";
    cin >> n;
    h = new HINH_CN[n + 1];
    for (int i = 1; i <= n; ++i)
    {
        h[i].nhapsl();
    }
}
HINH_CN DAY_HINH_CN::hinh_dt_max()
{
    HINH_CN htdmax;
    for (int i = 2; i <= n; ++i)
    {
        if (h[i].dien_tich() > htdmax.dien_tich())
        {
            htdmax = h[i];
        }
    }
    return htdmax;
}
HINH_CN *DAY_HINH_CN::hinh_cv_max()
{
    int imax = 1;
    for (int i = 2; i <= n; ++i)
    {
        if (h[i].chu_vi() > h[imax].chu_vi())
        {
            imax = i;
        }
    }
    return (h + imax);
}
void main()
{
    DAY_HINH_CN d;
    HINH_CN hdtmax;
    d.nhapsl();
    hdtmax = d.hinh_dt_max();
    hdtmax.in();
    HINH_CN *hcvmax = d.hinh_cv_max();
    hcvmax->in();
    getch();
}
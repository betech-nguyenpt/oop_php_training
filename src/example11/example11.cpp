/*  
    -- Chương trình được tổ chức thành 3 hàm
    Nhập dẫy số double
    Hoán vị 2 biến double
    Sắp xếp dãy số double theo thứ tự tăng dần
*/

#include <stdio.h>
#include <iostream>
#include <conio.h>

using namespace std;

void nhapds (double *a, int n)
{
    for (int i = 1; i <= n; ++i)
    {
        cout << "\nPhan tu thu " << i << ": ";
        cin >> a[i];
    }
}
void hv(double &x, double &y)
{
    double tg = x; x = y; y = tg;
}
void sapxep(double *a, int n)
{
    for (int i = 1; i <= n - 1; ++i)
    {
        for (int j = i + 1; j <= n; ++j)
        {
            if (a[i] > a[j])
            {
                hv(a[i],a[j]);
            }
        }
    }
}
void main()
{
    double x[100];
    int i, n;
    cout << "\n N = ";
    cin >> n;
    nhapds(x, n);
    sapxep(x, n);
    for (i = 1; i <= n; ++i)
    {
        printf("\n%0.1lf", x[i]);
    }
    getch();
}
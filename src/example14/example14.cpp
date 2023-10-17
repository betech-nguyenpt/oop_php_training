/**
 * Trình bày một hàm trả về một bí danh của một phần tử mảng 
 * Hàm kiểm tra xem chỉ số mảng có vượt ra ngoài miền quy định hay không
 * Sau đó dùng hàm này để truy nhập đến các phần tử mảng cấu trúc
 */

#include <iostream>
#include <conio.h>
#include <stdlib.h>

using namespace std;

struct TS
{
    char ht[25];
    float t, l, h, td;
};
TS *ts;
void cap_phat_bo_nho_nhapsl(int n)
{
    ts = new TS[n + 1];
    if (ts == NULL)
    {
        cout << "Loi cap phat bo nho ";
        exit(1);
    }
    for(int i = 1; i <= n; ++i)
    {
        TS &h = ts[i];
        cout << "\nThi sinh thu " << i;
        cout << "\n Ho ten: ";
        cin.ignore(1);
        cin.get(h.ht,25);
        cout << "Cac diem Toan Ly Hoa: ";
        cin >> h.t >> h.l >> h.h;
        h.td = h.t + h.l + h.h;
    }
}
TS &f (int i, int n) // cho bí danh ts[i]
{
    if (i < 1 || i > n)
    {
        cout << "\nChi so mang khong hop le ";
        exit(1);
    }
    return ts[i];
}
void main()
{
    int n, i;
    cout << "\n So thi sinh: ";
    cin >> n;
    cap_phat_bo_nho_nhapsl(n);
    while(1)
    {
        cout << "\nCan xem thi sinh thu may: ";
        cout << "\nChon so tu 1 den " << n << " (Bam sai ket thuc CT)";
        cin >> i;
        TS &h = f(i, n);
        cout << "\n Ho ten: " << h.ht;
        cout << "\n Tong diem: " << h.td;
    }
}
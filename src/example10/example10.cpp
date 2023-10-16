// CT dùng biến tham chiếu đến một phần tử mảng cấu trúc để nhập dữ liệu và thực hiện các phép tính.
#include <iostream>
#include <conio.h>

using namespace std;

struct TS
{
    char ht[25];
    float t, l, h, td;
};
void main()
{
    TS ts[10], &h = ts[1]; //h tham chiếu đến ts [1]
    cout << "\nHo ten:";
    cin.get(h.ht, 25);
    cout << "Cac diem toan, ly, hoa: ";
    cin >> h.t >> h.l >>h.h;
    h.td = h.t + h.l + h.h;
    cout << "\nHo ten:" << ts[1].ht;
    cout << "\nTong diem: " << ts[1].td;
    getch();
}
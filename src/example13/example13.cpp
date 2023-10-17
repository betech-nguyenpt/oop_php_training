// Trình bày một hàm trả về một bí danh của một biến cấu trúc toàn bộ. Ở đây không dùng hàm một cách trực tiếp mà gán hàm cho một biến tham chiếu, sau đó dùng biến tham chiếu này để truy nhập đến cấu trúc toàn bộ.

#include <iostream>
#include <conio.h>

using namespace std;
struct TS
{
    char ht[25];
    float t, l, h, td;
};
TS ts;
TS &f()
{
    return ts;
}
void main()
{
    TS &h = f(); // h tham chiếu đến biến ts.
    cout << "\n Ho ten: ";
    cin.get(h.ht, 25);
    cout << "Cac diem Toan Ly Hoa: ";
    cin >> h.t >> h.l >> h.h;
    h.td = h.t + h.l + h.h;
    cout << "\n Ho ten: " << ts.ht;
    cout << "\nTong diem: " << ts.td;
    getch();
}
// Nếu lớp kh có hàm tạo: CT sẽ cung cấp một hàm tạo mặc định kh đối (default). Hàm này thực chất kh làm gì cả. Như vậy đối tượng tạo ra chỉ được cấp phát bộ nhớ. Còn các thuộc tính chưa được xác định.

// Hàm tạo mặc định
#include <conio.h>
#include <iostream>

using namespace std;

class DIEM_DH
{
    private:
        int x, y, m;
    public:
        // phuong thuc
        void in()
            {
                cout << "\n" << x << " " << y << " " << m;
            }
};

void main()
{
    DIEM_DH d;
    d.in();
    DIEM_DH *p;
    p = new DIEM_DH[10];
    // clrscr();
    system("cls");
    d.in();
    for (int i = 0; i < 10; i++)
    {
        (p + i) -> in();
    }
    getch();
}
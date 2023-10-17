// Hàm ht (bên dưới) dùng để hiển thị chuỗi ký tự được trên n dòng màn hình. Các đối 'dc' và 'n' đều có giá trị mặc định,

#include <iostream>
#include <conio.h>

using namespace std;

void ht (char *dc = "HA NOI", int n = 10);
void ht (char *dc, int n)
{
    for (int i = 0; i < n; ++i)
    {
        cout << "\n" << dc;
    }
}
void main()
{
    ht(); // In dòng chữ "HA NOI" trên 10 dòng
    ht("ABC", 3); // In dòng chữ "ABC" trên 3 dòng
    ht("DEF"); // In dòng chữ "DEF" trên 10 dòng
    getch();
}
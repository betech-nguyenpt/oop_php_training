#include <iostream>
#include <conio.h>

using namespace std;

int z;
int &f() // Hàm trả về một bí danh của biến toàn bộ z
{
    return z;
}
void main(void)
{
    f() = 50; // z = 50
    cout << "\n z = " << z;
    getch();
}
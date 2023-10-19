// CT minh hoạ cách xây dựng hàm tạo và cách sử dụng hàm tạo trong khai báo, trong cấp phát bộ nhớ và trong việc biểu diễn các hằng đối tượng.

#include <iostream>
#include <conio.h>
#include <iomanip>

using namespace std;

class DIEM_DH
{
    private:
        int x, y, m;
    public:
        // Hàm bạn dùng để in đối tượng DIEM_DH
        friend void in(DIEM_DH d)
        {
            cout << "\n" << d.x << " " << d.y << " " << d.m;
        }

    // phương thức dùng để in đối tượng điểm DIEM_DH
    void in()
    {
        cout << "\n" << x << " " << y << " " << m;
    }

    // Hàm tạo không đối
    DIEM_DH()
    {
        x = y = 0;
        m = 1;
    }

    // Hàm tạo có đối, đối m1 có giá trị mặc định là 15 
    DIEM_DH(int x1, int y1, int m1 = 15);
};

// Xây dựng hàm tạo
DIEM_DH::DIEM_DH(int x1, int y1, int m1)
{
    x = x1;
    y = y1;
    m = m1;
}

int main()
{
    DIEM_DH d1; // Gọi tới hàm tạo không đối
    DIEM_DH d2; // Gọi tới hàm tạo có đối
    DIEM_DH *d;
    d = new DIEM_DH(300, 300); // Gọi tới hàm tạo có đối
    // clrscr();
    system("cls");
    in(d1); // Gọi hàm bạn in()
    d2.in(); // Gọi phương thức in()
    in(*d); // Gọi hàm bạn in()
    DIEM_DH(2, 2, 2).in(); // Gọi phương thức in()
    DIEM_DH t[3]; // 3 lần gọi hàm tạo không đối
    DIEM_DH *q; //Gọi hàm tạo không đối
    int n;
    cout << "\nN = ";
    cin >> n;
    q = new DIEM_DH[n + 1]; // (n + 1) lần gọi hàm tạo không đối
    for (int i = 0; i <= n; i++)
    {
        q[i] = DIEM_DH(300 + i, 200 + i, 8); // (n + 1) lần gọi hàm tạo có đối
    }
    for (int i = 0; i <= n; i++)
    {
        q[i].in(); // Gọi phương thức in()
    }
    for (int i = 0; i <= n; i++)
    {
        DIEM_DH(300 + i, 200 + i, 8).in(); // Gọi phương thức in()
    }
    getch();
}

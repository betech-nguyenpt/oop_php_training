// QL Hoá đơn, Mỗi hoá đơn có 2 dữ liệu tên hàng và tiền bán. sử dụng hàm tạo để tạo ra các hoá đơn, dùng hàm huỷ để bỏ đi các hoá đơn không cần lưu trữ, dùng phương thức để sửa chữa nội dung hoá đơn(Nhập lại tiền bán). Vấn đề đặt ra là sau một số thao tác: Tạo, sửa, huỷ hoá đơn thì tổng số hoá đơn còn lại là bao nhiêu và tổng số tiền trên các hoá đơn còn lại là bao nhiêu.

// Thanh phan tinh
// Lop HDBH(lop hoa don ban hang)

#include <iostream>
#include <conio.h>

using namespace std;

class HDBH
{
private:
    char *tenhang;
    double tienban;
    static int tshd;
    static double tstienban;

public:
    HDBH(char *tenhang1 = NULL, double tienban1 = 0.0)
    {
        tienban = tienban1;
        tenhang = tenhang1;
        ++tshd;
        tstienban = tienban;
    }
    ~HDBH()
    {
        --tshd;
        tstienban -= tienban;
    }
    void sua();
    static void in();
};

int HDBH::tshd = 0;
double HDBH::tstienban = 0;
void HDBH::in()
{
    cout << "\n\nTong so hoa don: " << tshd;
    cout << "\nTong so tien: " << tstienban;
}

void HDBH::sua()
{
    cout << "\n\nTen hang: " << tenhang;
    cout << "\n\nTien ban: " << tienban;
    tstienban -= tienban;
    cout << "\nSua tien ban thanh: ";
    cin >> tienban;
    tstienban += tienban;
}

void main()
{
    HDBH *h1 = new HDBH("Xi mang", 2000);
    HDBH *h2 = new HDBH("Sat thep", 3000);
    HDBH *h3 = new HDBH("Noi That", 4000);
    // clrscr();
    system("cls");
    HDBH::in();
    getch();
    delete h1;
    HDBH::in();
    getch();
    h2->sua();
    HDBH::in();
    getch();
    delete h3;
    HDBH::in();
    getch();
}
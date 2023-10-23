/*
    CT định nghĩa lớp tự trỏ TS(lớp có thuộc tình kiểu *TS). Lớp này được dùng để tổ chức danh sách móc nối. CT nhập 1 danh sách thí sinh và chứa trong 1 danh sách mốc nối. Sau đó duyệt trên danh sách này để in các thí sinh trúng tuyển.
*/

#include <string.h>
#include <conio.h>
#include <iostream>
#include <stdio.h>
#include <ctype.h>

using namespace std;

class TS
{
private:
    char *ht;
    double td;
    TS *dc;

public:
    TS()
    {
        ht = new char[20];
        td = 0;
        dc = NULL;
    }

    ~TS()
    {
        delete ht;
        dc = NULL;
    }

    int nhap(int i);
    void in();
    double gettd()
    {
        return td;
    }
    void setdc(TS *dc1)
    {
        dc = dc1;
    }
    TS *getdc()
    {
        return dc;
    }
};

void TS::in()
{
    cout << "\nHo ten: " << ht << " Tong diem: " << td;
}

int TS::nhap(int i)
{
    cout << "\nNhap thi sinh " << i;
    cout << "\nHo ten (Bam Enter de ket thuc nhap):";
    // fflush(stdin);
    // fgets(ht);

    cin.ignore(numeric_limits<streamsize>::max(), '\n'); // để xóa bộ đệm bàn phím sau khi đọc số.
    cin.getline(ht, sizeof(ht));                         // để đọc chuỗi dữ liệu từ bàn phím.
    // Hàm này cho phép bạn đọc chuỗi có độ dài tối đa sizeof(ht) và tự động chặt bỏ kí tự xuống dòng (\n) ở cuối chuỗi.
    if (ht[0] == 0)
        return 0;
    cout << "tong diem: ";
    cin >> td;
    dc = NULL;
    return 1;
}

void main()
{
    int i = 0;
    TS *pdau, *p, *q;
    pdau = NULL;
    // clrscr();
    system("cls");
    while (1)
    {
        q = new TS;
        ++i;
        if (q->nhap(i) == 0)
        {
            delete q;
            break;
        }
        if (pdau == NULL)
        {
            pdau = p = q;
        }
        else
        {
            p->setdc(q);
            p = q;
        }
    }
    /* IN */
    double diemchuan;
    cout << "\nDiem chuan: ";
    cin >> diemchuan;
    cout << "\nDanh sach trung tuyen: ";
    p = pdau;
    while (p != NULL)
    {
        if (p->gettd() >= diemchuan)
            p->in();
        p = p->getdc();
    }
    getch();
}
// Để tạo ra một hằng có kiểu, ta sử dụng từ khoá CONST đặt trước một khai báo có khởi gán giá trị.
// CT tạo một cấu trúc hằng (Kiểu DIEM) mô tả giữa màn hình đồ hoạ với màu trắng.

#include <stdio.h>
#include <conio.h>
#include "lib/graphics.h"
#include <stdlib.h>

#pragma comment(lib, "lib/graphics.lib")
typedef struct
{
    int x, y;
    int mau;
}
DIEM;

void main()
{
    int mh = 0, mode = 0;
    initgraph(&mh, &mode, "");
    int loi = graphresult();
    if (loi)
    {
        printf("\nLoi do hoa: %s",grapherrormsg(loi));
        getch();
    }
    const DIEM gmh = {getmaxx() / 2, getmaxy() / 2, WHITE};
    putpixel(gmh.x, gmh.y, gmh.mau);
    getch();

    closegraph();
}

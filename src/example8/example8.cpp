// Lấy địa chỉ các phần tử mảng thực 2 chiều.
// CT nhập một ma trận thực cấp mxn và xác định phần tử có giá trị lớn nhất.

#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

void main()
{
    float a[20][20], smax;
    int m, n, i, j, imax, jmax;
    // clrscr();
    system("cls");
    puts ("Cho biet so hang va so cot cua ma tran: ");
    scanf("%d%d", &m, &n);
    for (i = 1; i <= m; ++i)
    {
        for (j = 1; j <= n; ++j)
        {
            printf("\na[%d][%d] = ",i, j);
            scanf("%f", &a[i][j]); // Lấy địa chỉ phần tử mảng thực. 2 chiều
        }
    }
    smax = a[1][1];
    imax = 1;
    jmax = 1;
    for (i = 1; i <= m; ++i)
    {
        for (j = 1; j <= n; ++j)
        {
            if (smax < a[i][j])
            {
                smax = a[i][j];
                imax = i;
                jmax = j;
            }
        }
    }
    puts ("\n\n Ma tran");
    for (i = 1; i <= m; ++i)
    {
        for (j = 1; j <= n; ++j)
        {
            if (j == 1) puts ("");
            printf(" %6.1f", a[i][j]);
        }
    }
    puts ("\n\nPhan tu max: ");
    printf("\n co gia tri = %6.1f", smax);
    printf("\nTai hang %d cot %d", imax, jmax);
    getch();
}

// Chương trình nhập 1 dãy số thực rồi sắp xếp theo thứ tự tăng dần.

#include <stdio.h>
#include <conio.h>
#include <malloc.h>

void main()
{
    int n;
    int i;
    printf("\nNhap so phan tu cua day N = ");
    scanf("%d", &n);
    float *x = (float *)malloc((n + 1) * sizeof(float));
    for (int i = 1; i <= n; ++i)
    {
        printf("\nX[%d]= ", i);
        scanf("%f", x + i);
    }
    for (i = 1; i <= n - 1; ++i)
    {
        for (int j = i + 1; j <= n; ++j)
        {
            if (x[i] > x[j])
            {
                float tg = x[i];
                x[i] = x[j];
                x[j] = tg;
            }
        }
    }
    printf("\nDay sau khi sap xep\n");
    for (i = 1; i <= n; ++i)
    {
        printf("%0.2f", x[i]);
    }
    getch();
}
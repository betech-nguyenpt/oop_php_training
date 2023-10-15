// Với n là một sô nguyên dương nhập từ bàn phím.

#include <stdio.h>
#include <conio.h>

void main()
{
    int n;
    printf("\nSo phan tu cua day N = ");
    scanf("%d", &n);
    float s = 0.0;
    for (int i = 1; i <= n; ++i)
    {
        s += float(i + 1) / float(i); // Ep kieu theo C++
        printf("\nS = %0.2f", s);
        getch();
    }
}
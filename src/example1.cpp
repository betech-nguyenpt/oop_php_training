#include <stdio.h>
int main()
{
    float a, b, c, p, s;
    printf("\nNhap a, b, c:\n");
    scanf("%f%f%f", &a, &b, &c);
    p = (a + b + c) / 2;
    printf("\nDien tich = %0.2f", p);
}
// Trở lại xét bài toán tìm độ dài lớn nhất đi qua 2 điểm.
/**
 * Biến nguyên n là số điểm của dãy
 * con trỏ x kiểu thực trỏ đến vùng nhớ chứa dãy hoành độ.
 * con trỏ y kiểu thực trỏ đến vùng nhớ chứa dãy tung độ.
 */

#include <stdio.h>
#include <conio.h>
#include <math.h>
#include <malloc.h>

class daydiem
{
    public:
        int n;
        float *x, *y;
        float do_dai(int i, int j)
        {
            return sqrt(pow(x[i] - x[j], 2) + pow(y[i] - y[j], 2));
        }
        void nhapsl(void);
};

void daydiem::nhapsl(void)
{
    int i;
    printf("\nSo diem N = ");
    scanf("%d", &n);
    x = (float*)malloc((n + 1)*sizeof(float));
    y = (float*)malloc((n + 1)*sizeof(float));
    for (i = 1; i <= n; ++i)
    {
        printf("\nNhap toa d x,y cua diem thu %d: ",i);
        scanf("%f%f", &x[i], &y[i]);
    }
}
void main()
{
    daydiem p;
    p.nhapsl();
    int n,i,j,imax,jmax;
    float d,dmax;
    n = p.n;
    dmax = p.do_dai(1,2);
    imax = 1;
    jmax = 2;
    for (i=1; i<=n-1; ++i)
        for (j=1; j<=n; ++j)
        {
            d = p.do_dai(i,j);
            if (d > dmax)
            {
                dmax = d;
                imax = i;
                jmax = j;
            }
        }
    printf("\nDoan thang lon nhat co do dai bang: %0.2f", dmax);
    printf("\nDi qua 2 diem co chi so la %d va %d", imax, jmax);
    getch();
}

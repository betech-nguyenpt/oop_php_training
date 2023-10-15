// Ví dụ xét yêu cầu sau: Viết chương trình nhập toạ độ (x,y) của một dãy điểm, sau đó tìm một điểm cách xa nhau nhất.

#include <stdio.h>
#include <conio.h>
#include <math.h>
float x[100], y[100];
float do_dai(int i, int j) 
{
    return sqrt(pow(x[i] - x[j], 2) + pow(y[i] - y[j], 2));
}
void nhapsl(int n)
{
    // ++i tính luôn trên giá trị ban đầu
    // i++ tạo ra bản copy của giá trị ban đầu
    int i;
    for (i=1;i<=n;++i)
    {
        printf("\n Nhap toa do x,y cua diem thu %d :" ,i);
        scanf("%f%f",&x[i],&y[i]);
    }
}
int main()
{
    int n,i,j,imax,jmax;
    float d,dmax;
    printf("\nSo diem N= ");
    scanf("%d",&n);
    nhapsl(n);
    dmax = do_dai(1,2);
    imax = 1;
    jmax = 2;
    for (i=1; i<=n-1; ++i)
        for (j=i+1;j<=n;++j)
        {
            d = do_dai(i,j);
            if (d > dmax)
            {
                dmax = d;
                imax = i;
                jmax = j;
            }
        }
        printf("\nDoan thang lon nhat co do dai bang: %0.2f",dmax);
        printf("\nDi qua 2 diem co chi so la %d va %d:",imax,jmax);

        getch();
}
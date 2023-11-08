/**
 * @file example47.cpp
 * @author TyNT
 * @brief CT 6- 06
 * @version 0.1
 * @date 2023-11-08
 * 
 * @copyright Copyright (c) 2023
 * Lop co so truu tuong
 * lop sort
 */

#include <stdio.h>
#include <conio.h>
#include <time.h>
#include <stdlib.h>
#include <iostream>

using namespace std;

class sort
{
    protected:
        int *a;
        void hoan_vi(long i, long j)
        {
            int tg = a[i];
            a[i] = a[j];
            a[j] = tg;
        }
    public:
    virtual void sapxep(int *a1, long n)
    {
        a = a1;
    }
};

class select_sort : public sort
{
    public:
    virtual void sapxep(int *a1, long n);
};
void select_sort::sapxep(int *a1, long n)
{
    long i, j, r;
    sort::sapxep(a1, n);
    for (i = 1; i < n; ++i)
    {
        r = i;
        for (j = i + 1; j <= n; ++j)
        
            if (a[j] < a[r]) r = j;
            
            if(r != i) hoan_vi(i, r);
    }
}

class quick_sort : public sort
{
    private:
    void q_sort(long l, long r);
    public:
    virtual void sapxep(int *a1, long n);
};

void quick_sort::q_sort(long l, long r)
{
    int x;
    long i, j;
    if (l == r) 
    {
        x = a[l];
        i = l;
        j = r + 1;
        do
        {
            ++i;
            --j;
            while (i < r && a[i] < x) ++i;
            while (a[j] > x) --j;
            if (i < j) hoan_vi(i, j);
        } while (i < j);
        hoan_vi(l, j);
        q_sort(l, j - 1);
        q_sort(j + 1, r);
    }
}

void quick_sort::sapxep(int *a1, long n)
{
    sort::sapxep(a1, n);
    q_sort(1, n);
}

class heap_sort : public sort
{
    private:
        void shift(long i, long n);
    public:
        virtual void sapxep(int *a1, long n);
};

void heap_sort::shift(long i, long n)
{
    long l, r, k;
    l = 2 * i;
    r = l + 1;
    if (l > n) return ;
    if (l == n)
    {
        if (a[i] < a[l]) hoan_vi(i,l);
        return ;
    }
    if (a[l] > a[r])
    {
        k = l;
    }
    else
    {
        k = r;
    }
    if (a[i] >= a[k])
    {
        return;
    }
    else
    {
        hoan_vi(i, k);
        shift(k, n);
    }
}

void heap_sort::sapxep(int *a1, long n)
{
    long i;
    sort::sapxep(a1, n);
    /*Tao dong*/
    for (i = n / 2; i >= 1; --i) shift(i, n);
    // Lap
    for (i = n; i >= 2; --i)
    {
        hoan_vi(1, i);
        shift(1, i - 1);
    }
}

// int main()
// {
//     long i, n;
//     // struct time t1, t2;
//      struct time elapsedTime(struct time t1,struct time t2);
//     int *a, k, tg, sec, hund;
//     n = 30000;
//     a = (int*) malloc((n + 1)*sizeof(int));
//     if ( a == NULL)
//     {
//         puts("\nLoi BN");
//         getch();
//         exit(0);
//     }
//     sort *s[3];
//     select_sort ss;
//     quick_sort qs;
//     heap_sort hs;
//     s[0] = &ss;
//     s[1] = &qs;
//     s[2] = &hs;
//     // clrscr();
//     system("cls");
//     for (k = 0; k < 3; ++k)
//     {
//         srand(5000);
//         for (i = 1; i <= n; ++i)
//         {
//             a[i] = rand();
//         }
//         gettime(&t1);
//         s[k]->sapxep(a,n);
//         gettime(&t2);
//         tg = (t2.ti_sec - t1.ti_sec) *100 + t2.ti_hund - t1.ti_hund;
//         sec = tg / 100;
//         hund = tg % 100;
//         printf("\n Sap xep %d %d %d %d %d", k + 1, t2.ti_sec, t2.ti_hund, t1.ti_sec, t1.ti_hund);
//         printf("\nSap xep %d Thoi gian %d sec %d hund", k + 1, sec, hund);
//     }
//     getch();
// }


int main() {
    long i, n;
    clock_t t1, t2;
    int *a, k, tg, sec, hund;
    n = 30000;
    a = (int*) malloc((n + 1) * sizeof(int));
    
    if (a == NULL) {
        puts("\nLoi BN");
        getchar();
        exit(0);
    }

    // Khởi tạo bộ sinh số ngẫu nhiên
    srand(5000);

    // Initialize and sort the array here
    
    for (k = 0; k < 3; ++k) {
        // Initialize and sort the array
        for (i = 1; i <= n; ++i) {
            a[i] = rand();
        }

        t1 = clock();
        // Perform the sorting here
        t2 = clock();
        
        tg = t2 - t1;
        sec = tg / CLOCKS_PER_SEC;
        hund = (tg * 100) / CLOCKS_PER_SEC;
        
        printf("\nSap xep %d %d %d", k + 1, sec, hund);
    }

    free(a);
    getchar();
    return 0;
}

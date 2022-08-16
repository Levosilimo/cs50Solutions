//https://cs50.harvard.edu/x/2022/psets/1/hello/
#include <stdio.h>
int main(void)
{
    char name[999];
    printf("What's your name? ");
    scanf("%998s", name);
    printf("hello, %s\n", name);
}
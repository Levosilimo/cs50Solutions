//https://cs50.harvard.edu/x/2022/psets/1/credit/
#include <cs50.h>
#include <stdio.h>

int main(void)
{
    long cardNumber = get_long("Number: ");
    long rest = 1;
    int digits[16];
    for(int i = 0; i<15;i++){
        digits[i]=10;
    }
    int i=16;
    bool visa = false;
    bool americanExpress = false;
    bool masterCard = false;
    while (true){
        long k = cardNumber%rest;
        if(rest>1) digits[i]=k/(rest/10);
        if(k==cardNumber){
            if((i==3||i==0)&&digits[i]==4) visa = true;
            else if(i==1&&digits[i]==3&&(digits[i+1]==4||digits[i+1]==7)) americanExpress=true;
            else if(i==0&&digits[i]==5&&digits[i+1]>=1&&digits[i+1]<=5) masterCard=true;
            else {
                printf("INVALID\n");
                return 0;
            }
            break;
        }
        rest*=10;
        i--;
        if(i<0) {
            printf("INVALID\n");
            return 0;
        }
    }
    int oddSum = 0;
    int evenSum = 0;
    for(int j = 15; j>=0&&digits[j]<10;j--){

        if(j%2==0) {
            int number = digits[j]*2;
            evenSum+=number%10;
            evenSum+=number/10;
        }
        else {
         oddSum+=digits[j];
        }
    }
    if((oddSum+evenSum)%10==0){
        if (visa) printf("VISA\n");
        if (americanExpress) printf("AMEX\n");
        if (masterCard) printf("MASTERCARD\n");
    }
    else printf("INVALID\n");
}
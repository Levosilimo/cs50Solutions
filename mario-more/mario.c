//https://cs50.harvard.edu/x/2022/psets/1/mario/more/
#include <cs50.h>
#include <stdio.h>

int main(void)
{

    int height;
    int lineCounter = 1;
    bool correctHeight = false;
    do{
        height = get_int("Height: ");
        if (height >= 1 && height <= 8) correctHeight=true;
    } while(!correctHeight);
    while(lineCounter<=height){
        for(int i = 0; i<height-lineCounter; i++){
            printf(" ");
        }
        for(int i = 0; i<lineCounter; i++){
            printf("#");
        }
        printf("  ");
        for(int i = 0; i<lineCounter; i++){
            printf("#");
        }
        printf("\n");
        lineCounter++;
    }
}
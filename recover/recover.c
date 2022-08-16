//https://cs50.harvard.edu/x/2022/psets/4/recover/
#include <stdio.h>
#include <stdlib.h>
#include <stdint.h>
#include <stdbool.h>

typedef uint8_t BYTE;
const int BLOCK_SIZE = 512;

int main(int argc, char *argv[])
{
    if (argc != 2){
        printf("Usage: ./recover file\n");
        return 1;
    }
    FILE *file = fopen(argv[1], "r");
    if (file == NULL){
        printf("Could not open file.\n");
        return 1;
    }
    FILE *jpeg;
    BYTE buffer[BLOCK_SIZE];
    int jpegCounter = 0;
    bool fileOpened = false;
    char nameBytes[8];
    while(fread(&buffer, sizeof(BYTE),BLOCK_SIZE,file)==BLOCK_SIZE){
        if(buffer[0] == 0xff && buffer[1] == 0xd8 && buffer[2] == 0xff && buffer[3]>=0xe0 && buffer[3]<=0xef){
            if(fileOpened){
                fclose(jpeg);
            }
            sprintf(nameBytes, "%03d.jpg", jpegCounter);
            jpeg = fopen(nameBytes, "w");
            fileOpened = true;
            fwrite(&buffer, sizeof(BYTE), BLOCK_SIZE, jpeg);
            jpegCounter++;
        }
        else if (jpegCounter>0){
            fwrite(&buffer, sizeof(BYTE), BLOCK_SIZE, jpeg);
        }
    }
    fclose(file);
    fclose(jpeg);
}
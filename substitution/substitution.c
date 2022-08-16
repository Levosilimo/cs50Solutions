//https://cs50.harvard.edu/x/2022/psets/2/substitution/
#include <cs50.h>
#include <stdio.h>
#include <string.h>
#include <ctype.h>

int main(int argc, string argv[])
{
    if(argc!=2){
        printf("Usage: ./substitution key\n");
        return 1;
    }
    string cipher = argv[1];
    int cipherLength = strlen(cipher);
    if(cipherLength!=26){
        printf("Key must contain 26 characters.\n");
        return 1;
    }
    for(int i = 0; i<26; i++){
        if(!isalpha(cipher[i])){
            printf("Key must contain only alphabetic characters.\n");
            return 1;
        }
        for(int j = i+1; j<26;j++){
            if(cipher[j]==cipher[i]){
                printf("Key must not contain duplicate characters.\n");
                return 1;
            }
        }
    }
    string plaintext = get_string("plaintext: ");
    for(int i = 0; i<strlen(plaintext);i++){
        char symbol = plaintext[i];
        if(isalpha(symbol)){
            if(islower(symbol)) plaintext[i] = tolower(cipher[symbol-'a']);
            else plaintext[i] = toupper(cipher[symbol-'A']);
        }
    }
    printf("ciphertext: %s\n", plaintext);
}
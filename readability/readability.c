//https://cs50.harvard.edu/x/2022/psets/2/readability/
#include <cs50.h>
#include <stdio.h>
#include <math.h>
#include <string.h>

int count_letters(string text);
int count_words(string text);
int count_sentences(string text);

int main(void)
{
    string text = get_string("Text: ");
    double lettersAmount = count_letters(text);
    double wordsAmount = count_words(text);
    double sentencesAmount = count_sentences(text);
    double index = (0.0588 * ((lettersAmount/wordsAmount)*100)) - (0.296 * ((sentencesAmount/wordsAmount)*100)) - 15.8;
    int output = round(index);
    index>=(double)16? printf("Grade 16+") : index<(double)1 ? printf("Before Grade 1") : printf("Grade %d", output);
    printf("\n");
}

int count_letters(string text)
{
    int lettersAmount = 0;
    for(int i = 0; i<=strlen(text+1); i++){
        if((text[i]>='A'&&text[i]<='Z')||(text[i]>='a'&&text[i]<='z')) lettersAmount++;
    }
    return lettersAmount;
}

int count_words(string text)
{
    int wordsAmount = 1;
    for(int i = 0; i<=strlen(text+1); i++){
        if(text[i]==' ') wordsAmount++;
    }
    return wordsAmount;
}

int count_sentences(string text)
{
    int sentencesAmount = 0;
    for(int i = 0; i<=strlen(text+1); i++){
        if(text[i]=='.'||text[i]=='!'||text[i]=='?') sentencesAmount++;

    }
    return sentencesAmount;
}

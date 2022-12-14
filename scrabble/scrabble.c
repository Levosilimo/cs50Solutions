//https://cs50.harvard.edu/x/2022/labs/2/
#include <ctype.h>
#include <cs50.h>
#include <stdio.h>
#include <string.h>

// Points assigned to each letter of the alphabet
int POINTS[] = {1, 3, 3, 2, 1, 4, 2, 4, 1, 8, 5, 1, 3, 1, 1, 3, 10, 1, 1, 1, 1, 4, 4, 8, 4, 10};

int compute_score(string word);

int main(void)
{
    // Get input words from both players
    string word1 = get_string("Player 1: ");
    string word2 = get_string("Player 2: ");
    // Score both words
    int score1 = compute_score(word1);
    int score2 = compute_score(word2);
    //Print the winner
    score1==score2 ? printf("Tie!\n") : score1>score2 ? printf("Player 1 wins!\n") : printf("Player 2 wins!\n");
}

int compute_score(string word)
{
    int arraySize = strlen(word) + 1;
    char charSequence[arraySize];
    strcpy(charSequence, word);
    int wordScore = 0;
    for(int i = 0; i<arraySize; i++){
        char symbol = charSequence[i];
        if(symbol>=97&&symbol<=122){
            wordScore+=POINTS[symbol-97];
        }
        else if(symbol>=65&&symbol<=90){
            wordScore+=POINTS[symbol-65];
        }
    }
    return wordScore;
}

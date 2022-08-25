// Implements a dictionary's functionality

#include <stdbool.h>
#include <stdio.h>
#include <stdlib.h>
#include <stdint.h>
#include <string.h>
#include <strings.h>
#include <ctype.h>
#include "dictionary.h"

// Represents a node in a hash table
typedef struct node
{
    char word[LENGTH + 1];
    struct node *next;
}
node;

// TODO: Choose number of buckets in hash table
const unsigned int N = 100000;

// Hash table
node *table[N];
int wordsAmmount = 0;

// Returns true if word is in dictionary, else false
bool check(const char *word)
{
    int wordHash = hash(word);
    node *node = table[wordHash];
    while (node != NULL)
    {
        if (strcasecmp(word, node->word) == 0)
        {
            return true;
        }
        node = node->next;
    }
    return false;
}

// Hashes word to a number
unsigned int hash(const char *word)
{
    long sum = 0;
    for (int i = 0; i < strlen(word); i++)
    {
        sum += tolower(word[i]);
    }
    return sum % N;
}

// Loads dictionary into memory, returning true if successful, else false
bool load(const char *dictionary)
{
    FILE *wordsDictionary = fopen(dictionary, "r");
    if (dictionary == NULL){
        return false;
    }
    char nextWord[LENGTH+1];
    while (fscanf(wordsDictionary, "%s", nextWord) != EOF){
        node *n = malloc(sizeof(node));
        if (n == NULL){
            return false;
        }
        strcpy(n->word, nextWord);
        int hash_value = hash(nextWord);
        n->next = table[hash_value];
        table[hash_value] = n;
        wordsAmmount++;
    }
    fclose(wordsDictionary);
    return true;
}

// Returns number of words in dictionary if loaded, else 0 if not yet loaded
unsigned int size(void)
{
    return wordsAmmount;
}

// Unloads dictionary from memory, returning true if successful, else false
bool unload(void)
{
     for (int i = 0; i < N; i++)
    {
        node *n = table[i];
        while (n != NULL)
        {
            node *tmp = n;
            n = n->next;
            free(tmp);
        }
        if (n == NULL && i == N - 1)
        {
            return true;
        }
    }
    return false;
}

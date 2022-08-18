//https://cs50.harvard.edu/x/2022/psets/4/filter/more/
#include "helpers.h"
#include <math.h>

// Convert image to grayscale
void grayscale(int height, int width, RGBTRIPLE image[height][width])
{
    for(int i = 0; i<height; i++){
        for(int j = 0; j<width; j++){
            RGBTRIPLE grayPixel;
            int average = round((float)(image[i][j].rgbtRed+image[i][j].rgbtGreen+image[i][j].rgbtBlue)/3.0);
            grayPixel.rgbtGreen=average;
            grayPixel.rgbtBlue=average;
            grayPixel.rgbtRed=average;
            image[i][j]=grayPixel;
        }
    }
}

// Reflect image horizontally
void reflect(int height, int width, RGBTRIPLE image[height][width])
{
    RGBTRIPLE buffer[height][width];
    for(int i = 0; i<height; i++){
        for(int j = 0; j < (width%2==0?width/2:(width-1)/2); j++){
            buffer[i][j] = image[i][j];
            image[i][j] = image[i][width - (j + 1)];
            image[i][width - (j + 1)] = buffer[i][j];
        }
    }
}

// Blur image
void blur(int height, int width, RGBTRIPLE image[height][width])
{
    RGBTRIPLE bluredPixels[height][width];
    for(int i = 0; i<height; i++){
        for(int j = 0; j<width; j++){
            float overallRed = 0;
            float overallGreen = 0;
            float overallBlue = 0;
            int pixelsAmount = 0;
            for(int ii=-1;ii<=1;ii++){
                for(int jj=-1;jj<=1;jj++){
                    if(i+ii<0||i+ii>=height) continue;
                    if(j+jj<0||j+jj>=width) continue;
                    overallRed += image[i+ii][j+jj].rgbtRed;
                    overallGreen += image[i+ii][j+jj].rgbtGreen;
                    overallBlue += image[i+ii][j+jj].rgbtBlue;
                    pixelsAmount++;
                }
            }
            bluredPixels[i][j].rgbtRed = round(overallRed/pixelsAmount);
            bluredPixels[i][j].rgbtGreen = round(overallGreen/pixelsAmount);
            bluredPixels[i][j].rgbtBlue = round(overallBlue/pixelsAmount);
        }
    }
    for(int i = 0; i<height; i++){
        for(int j = 0; j<width; j++){
            image[i][j] = bluredPixels[i][j];
        }
    }
}

// Detect edges
void edges(int height, int width, RGBTRIPLE image[height][width])
{
    RGBTRIPLE buffer[height][width];

    int gx[3][3] = {{-1, 0, 1}, {-2, 0, 2}, {-1, 0, 1}};
    int gy[3][3] = {{-1, -2, -1}, {0, 0, 0}, {1, 2, 1}};

    for (int i = 0; i < height; i++){
        for (int j = 0; j < width; j++){
            int gxBlue = 0;
            int gyBlue = 0;
            int gxGreen = 0;
            int gyGreen = 0;
            int gxRed = 0;
            int gyRed = 0;
            for (int ii = -1; ii<=1; ii++){
                for (int jj=-1; jj<=1; jj++){
                    if(i+ii<0||i+ii>=height) continue;
                    if(j+jj<0||j+jj>=width) continue;
                    gxBlue += image[i+ii][j+jj].rgbtBlue*gx[ii+1][jj+1];
                    gyBlue += image[i+ii][j+jj].rgbtBlue*gy[ii+1][jj+1];
                    gxGreen += image[i+ii][j+jj].rgbtGreen*gx[ii+1][jj+1];
                    gyGreen += image[i+ii][j+jj].rgbtGreen*gy[ii+1][jj+1];
                    gxRed += image[i+ii][j+jj].rgbtRed*gx[ii+1][jj+1];
                    gyRed += image[i+ii][j+jj].rgbtRed*gy[ii+1][jj+1];
                }
            }
            int red = round(sqrt(gxRed * gxRed + gyRed * gyRed));
            int green = round(sqrt(gxGreen * gxGreen + gyGreen * gyGreen));
            int blue = round(sqrt(gxBlue * gxBlue + gyBlue * gyBlue));
            buffer[i][j].rgbtRed = red>255 ? 255 : red;
            buffer[i][j].rgbtGreen = green>255 ? 255 : green;
            buffer[i][j].rgbtBlue = blue>255 ? 255 : blue;
        }
    }
    for(int i = 0; i<height; i++){
        for(int j = 0; j<width; j++){
            image[i][j] = buffer[i][j];
        }
    }
}

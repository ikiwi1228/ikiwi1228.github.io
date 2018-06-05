#include <stdio.h>

//Equation Cited by Sanfoundry.com
void main()
{
	int dec = 0, base = 1, remem, numb, bin;
	printf("Enter a binary number ");
	scanf("%d", &numb);
	bin = numb;
	while (numb > 0)
	{
	remem = numb % 10;
	dec = dec + remem * base;
	numb = numb / 10 ;
	base = base * 2;
	}
	printf("%d\n", dec);
}

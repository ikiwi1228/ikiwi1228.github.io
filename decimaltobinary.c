#include <stdio.h>
int convert(int);
int main()
{
	int num, bin;

	printf("Enter a decimal number\n");
	scanf("%d",&num);
	bin = convert(num);
	printf ("The binary number of %d is %d.\n",num,bin);

	return 0;
}

int convert(int num)
{
	if (num==0)
	{
		return 0;
	}
	else
	{
		return (num % 2 + 10*convert(num/2));
	}
}


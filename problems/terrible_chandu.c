    #include <stdio.h>
    #include<string.h>
    int main()
    {
        int n,j;
       scanf("%d",&n);
       	while(n!=0)
       	{
       		char s[31],r[31];
       		scanf("%s",s);
       		int len=strlen(s);
       		for(j=0;j<len;j++)
       		{
       			r[j]=s[len-j-1];
       		}
       		r[j]='\0';
       		printf("%s",r);
       	        printf("\n");
       		len=0;
       		n--;
       	}
    }

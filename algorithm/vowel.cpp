//program to check wheather letter is vowel or consonant
#include<iostream>
using namespace std;
int main()
{
	char L;
	cout<<"enter a letter"<<endl;
	cin>>L;
	if(L=='a'||L=='e'||L=='i'||L=='o'||L=='u')
	cout<<"vowel"<<endl;	
	else
	{
		cout<<"consonant"<<endl;
	}
	return 0;
} 


#include<iostream>
using namespace std;
int main()
{
	char l;
	cout<<"enter the letter to find wheater it is capital or not"<<endl;
	cin>>l;
	if(l>='A'&&l<='Z')
	cout<<"the letter is capital"<<endl;
	if(l>='a'&&l<='z')
	cout<<"the letter is small"<<endl;
	return 0;
}

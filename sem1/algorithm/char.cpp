#include<iostream>
using namespace std;
int main()
{
	char S;
	cout<<"enter the character u want to findout"<<endl;
	cin>>S;
	if(S>='A'&&S<='Z'||S>='a'&&S<='z')
	cout<<"the character is a alphabet"<<endl;
else
	if(S>='0'&&S<='9')
	cout<<"the character is a digit"<<endl;
else
	cout<<"the character is a special character"<<endl;
	return 0;
}

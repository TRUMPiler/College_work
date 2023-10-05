#include<iostream>
using namespace std;
int main()
{
	int Divisior,Dividend,Remainder=0;
	cout<<"enter the value of Dividend"<<endl;
	cin>>Dividend;
	cout<<"enter the value of Divisior"<<endl;
	cin>>Divisior;
	Remainder=Dividend%Divisior;
	cout<<"the Remainder is:"<<Remainder<<endl;
	return 0;
}

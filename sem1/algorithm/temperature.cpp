//
#include<iostream>
using namespace std;
int main()
{
	int T;
	cout<<"enter temperature of the area"<<endl;
	cin>>T;
	if(T<0)
	cout<<"the weather is freezing"<<endl;
else
	if(T>=0&&T<=10)
	cout<<"the weather is very cold"<<endl;
else
	if(T>=10&&T<=20)
	cout<<"the weather is cold"<<endl;
else
	if(T>=20&&T<=30)
	cout<<"the weather is normal"<<endl;
else
	if(T>=30&&T<=40)
	cout<<"the weather is hot"<<endl;
else
	if(T>=40)
	cout<<"the weather is very hot"<<endl;
else
	cout<<"weather condition not found pls rewrite the weather"<<endl;
	return 0;
}

//program to swap a value
#include<iostream>
using namespace std;
int main()
{
	int a=0,b=0,c=0;
	cout<<"enter the value of a:"<<endl;
	cin>>a;
	cout<<"enter the value of b:"<<endl;
	cin>>b;
	c=a+b;
	cout<<"value of c is:"<<c<<endl;
	a=c-a;
	cout<<"value of swaped value a is:"<<a<<endl;
	b=c-b;
	cout<<"value of swaped value b is:"<<b<<endl;
	return 0;
}


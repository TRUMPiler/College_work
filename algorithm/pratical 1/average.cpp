//program to find average of any two numbers
#include<iostream>
using namespace std;
int main()
{
	int num1,num2,sum=0,average=0;
	cout<<"enter the value of num1:"<<endl;
	cin>>num1;
	cout<<"enter the value of num2:"<<endl;
	cin>>num2;
	sum=num1+num2;
	cout<<"sum of num1 and num2 is:"<<sum<<endl;
	average=num1+num2/2;
	cout<<"average of both num1 and num2 is:"<<average<<endl;
}

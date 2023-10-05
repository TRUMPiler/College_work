//
#include<iostream>
using namespace std;
int num1=23;
int main()
{
	int num2=0,sum=0;
	cout<<"num1="<<num1<<endl;
	cout<<"num2="<<endl;
	cin>>num2;
	sum=num1+num2;
	num2=sum-num2;
	num1=sum-num1;
	cout<<"swapped value="<<endl;
	cout<<"num1:="<<num1<<endl;
	cout<<"num2:="<<num2<<endl; 
}
void print()
{
	int num2=43;
	cout<<"num1="<<num1<<endl;
	cout<<"num2="<<num2<<endl;
}	

	
	
	
	
	

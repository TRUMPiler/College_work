//
#include<iostream>
using namespace std;
int main()
{
	int a,b,c;
	cout<<"enter the first side of the triangle"<<endl;
	cin>>a; 
	cout<<"enter the second side of the triangle"<<endl;
	cin>>b;
	cout<<"enter the third side of the triangle"<<endl;
	cin>>c;
	if(a=b=c)
	cout<<"the triangle is equilateral"<<endl;
else
	if(a==b||b==c||a==c)
	cout<<"the triangle is isosceles"<<endl;
else
	cout<<"the triangle is scalar"<<endl;
	return 0;
}


//print simple interst
#include<iostream>
using namespace std;
int main()
{
	float p,r,n,si=0;
	cout<<"enter the value of principle amount:"<<endl;
	cin>>p;
	cout<<"enter the value of interest:"<<endl;
	cin>>r;
	cout<<"enter the net year:";
	cin>>n;
	si=p*r*n/100;
	cout<<"simple interest of given principal amount,interest on amount and net year is:"<<si<<endl;
} 

	

//program to find wheater the year is leap year or not
#include<iostream>
using namespace std;
int main()
{
	int year,leap=0;
	cout<<"enter the year:-"<<endl;
	cin>>year;
	leap=year%4;
	if(year%4==0)
	cout<<"the year is leap year"<<endl;
else
	cout<<"the year is not a leap year"<<endl;
	return 0;
}


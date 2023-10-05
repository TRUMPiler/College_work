#include<iostream>
using namespace std;
int main()
{
	int a[10];
	float total=0,average;
	cout<<"Enter the numbers"<<endl;
	for(int i=0;i<10;i++)
	{
		cin>>a[i];
		total=total+a[i];
	}
	cout<<"Total of all arrays is:- "<<total<<endl;
	average=total/10;
	cout<<"average of all arrays is:- "<<average<<endl;

}

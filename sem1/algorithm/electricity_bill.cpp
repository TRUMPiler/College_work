// to calcute a electricity bill
#include<iostream>
using namespace std;
int main()
{
	float P,unit;
	cout<<"enter the power consumed of a particular customer"<<endl;
	cin>>P;
	if(P>=0&&P<=199){
	unit=P*1.20;
	cout<<"cost of power consumed is:-"<<unit<<endl;}
else
	if(P>=200&&P<=400){
	unit=P*1.50;
	cout<<"cost of power consumed is:-"<<unit<<endl;}
else
	if(P>=400&&P<=600){
	unit=P*1.80;
	cout<<"cost of power consumed is:-"<<unit<<endl;}
else
	if(P>=600){
	unit=P*2.00;
	cout<<"cost of power consumed is:-"<<unit<<endl;}
	return 0;
}

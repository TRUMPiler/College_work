//program to find that student is eligible for admission or not
#include <iostream>
using namespace std;
int main()
{
	int maths=0,phy=0,chem=0,total=0;
	cout<<"enter the maths"<<endl;
	cin>>maths;
	if (maths>=65){
	cout<<"yes eligible"<<endl;}
	else{
	cout<<"not eligible"<<endl;}
	cout<<"enter the phy"<<endl;
	cin>>phy;
	if (phy>=55){
	cout<<"yes eligible"<<endl;}
	else{
	cout<<"not eligible"<<endl;}
	cout<<"enter the chem"<<endl;
	cin>>chem;
	if (chem>=50){
	cout<<"yes eligible"<<endl;}
	else{
	cout<<"not eligible"<<endl;}
	cout<<"enter the total"<<endl;
	cin>>total;
	if (total>=190){
	cout<<"yes eligible"<<endl;}
	else{
	cout<<"not eligible"<<endl;}
	return 0;
}


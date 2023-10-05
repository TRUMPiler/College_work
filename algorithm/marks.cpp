#include<iostream>
using namespace std;
int main()
{
	int maths,physics,chemistry,total=0,overall=0,elg=0;
	cout<<"enter the marks of maths"<<endl;
	cin>>maths;
	if(maths>=65)
	cout<<"it is valid"<<endl;
	else
	cout<<"it is not valid"<<endl;
	cout<<"enter the marks of physics"<<endl;
	cin>>physics;
	if(physics>=55)
	cout<<"it is valid"<<endl;
	else
	cout<<"it is not valid"<<endl;	
	cout<<"enter the marks of chemistry"<<endl;
	cin>>chemistry;
	if(chemistry>=50)
	cout<<"it is valid"<<endl;	
else
	cout<<"it is not valid"<<endl;
	overall=physics+chemistry+maths;
	if(overall>=190)
	cout<<"it is valid"<<endl;
else
	cout<<"it is not valid"<<endl;
	total=maths+physics;
	if(total>=140)
	cout<<"it is valid"<<endl;
	else
	cout<<"it is not valid"<<endl;
	cout<<"testing if the candidate is eliglible or not"<<endl;	
	if(maths>=65&&physics>=55&&chemistry>=50&&overall>=190&&total>=140)
	cout<<"the candidate is eligible"<<endl;
	else
	cout<<"the candidate is ineligible"<<endl;	
	return 0;	
}


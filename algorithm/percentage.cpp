//Write a program find percentage
#include<iostream>
using namespace std;
int main()
{
	float total_marks=500,marks_obtained=0,ENGLISH_MARKS,DBMS_MARKS,ALGORITHM_MARKS,COP_MARKS,MATHS_MARKS,percentage=0,passing_percentage=25;
	cout<<"Enter the ENGLISH_MARKS : "<<endl;
	cin>>ENGLISH_MARKS;
	cout<<"Enter the DBMS_MARKS : "<<endl;
	cin>>DBMS_MARKS;
	cout<<"Enter the ALGORITHM_MARKS : "<<endl;
	cin>>ALGORITHM_MARKS;
	cout<<"Enter the COP_MARKS : "<<endl;
	cin>>COP_MARKS;
	cout<<"Enter the MATHS_MARKS : "<<endl;
	cin>>MATHS_MARKS;
	marks_obtained=ENGLISH_MARKS+DBMS_MARKS+ALGORITHM_MARKS+COP_MARKS+MATHS_MARKS;
	cout<<"marks obatined is :"<<marks_obtained<<endl;
	percentage=marks_obtained/total_marks*100;	
	cout<<"percentage is: "<<percentage<<endl;
	if(passing_percentage>percentage)
	cout<<"fail"<<endl;
else
	cout<<"pass"<<endl;
	return 0;
}

/*Write a program to insert five different subjects’ marks of
student and display result with total, percentage and class
[Distinction, first class, second class, pass class, fail]. */

#include<iostream>
using namespace std;
int main()
{
	string class;
	float marks[5],percentage,total=0;
	cout<<"Insert the marks of 5 subjects"<<endl;
	for(int i=0;i<sizeof(marks);i++)
	{
		cin>>marks[i];
		total=total+marks[i];
	}
	percentage=(total/500)*100;
	if(p)
}
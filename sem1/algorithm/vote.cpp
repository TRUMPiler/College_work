//program to find where the person is age eligible for casting a vote
#include<iostream>
using namespace std;
int main()
{
	int age;
	cout<<"enter the age of the person who wants to vote"<<endl;
	cin>>age;
	if(age>=18)
	cout<<"the person is eligible to vote"<<endl;
else
	cout<<"the person is not eligible to vote"<<endl;
	return 0;
}

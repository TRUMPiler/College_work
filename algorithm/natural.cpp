//program to print all natural numbers from 1 to n
#include<iostream>
using namespace std;
int main ()
{
	int i,n;
	cout<<"enter the number till u want to find all the natural numbers"<<endl;
	cin>>n;
	cout<<"Natural numbers from 1 to %d : \n"<<n<<endl;
	for(i=1; i<=n; i++)
    {
        cout<<"\n"<<i<<endl;
    }

    return 0;
}

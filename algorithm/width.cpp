//program to excecute a width program
#include<iostream>
using namespace std;
int main()
{
	cout.setf(ios::left, ios::adjustfield);
	cout.fill( 'o' );
	cout.precision(3);
	cout.width(6);
	cout<<12.53;
	cout.width(6);
	cout<<20.5;
	cout.width(6);
	cout<<2<<endl;
	return 0;
}

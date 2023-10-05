#include<iostream>
using namespace std;
int main()
{
	int i,j,k,l,n;
	cout<<"enter the number of rows"<<endl;
	cin>>n;
	for(i=1;i<=n;i++){
			   for(j=n-i;j>1;j--){
						cout<<" ";
					     }
			   for(k=1;k<=i;k++){
					      cout<<" "<<"*";	
					    }
				cout<<endl;
			 }
	return 0;
}

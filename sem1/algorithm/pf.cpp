#include<iostream>
using namespace std;
int main()
{
	int costprice,sellprice,ans=0;
	cout<<"enter costprice:"<<endl;
	cin>>costprice;
	cout<<"enter sellprice:"<<endl;
	cin>>sellprice;
	ans=sellprice-costprice;
	cout<<"answer is:"<<ans<<endl;
	if(sellprice>costprice)
		cout<<"profit"<<endl;
	else
		cout<<"loss"<<endl;
return 0;
}

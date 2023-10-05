/*#include <iostream>  
#include<sstream>  
using namespace std;  
int main() {  
      int k;  
      cout<<"Enter an integer value";  
      cin>>k;  
      stringstream ss;  
      ss<<k;  
      string s;  
      ss>>s;  
      cout<<"\n"<<"An integer value is : "<<k<<"\n";  
      cout<<"String representation of an integer value is : "<<s;   
    }  */

#include<iostream>
#include<sstream>
using namespace std;
int main(){
	int num2=0,tem=10;
	stringstream ss,rr;
	string rev=0,n1,num,num1,n2,rem,ten;
	cin>>num1;
	ss<<num2;
	ss>>num;
	rr<<tem;
	rr>>ten;
	
	
    while(num1!=num)
    {
        rem = num%10;
        rev = rem + (rev*10);
        num = num/10;
    }
	stringstream nm;
	nm<<rev;
	string s;
	nm>>s;
	cout<<" hello ans is "<<s;
}
	

/*#include <iostream>
using namespace std;
 
void relationalOperation(string s1, string s2)
{
 
    if (s1 != s2)
    {
        cout << s1 << " is not equal to " << s2 << endl;
        if (s1 > s2)
            cout << s1 << " is greater than " << s2 << endl;
        else
            cout << s2 << " is greater than " << s1 << endl;
    }
    else
        cout << s1 << " is equal to " << s2 << endl;


}
 
// Driver code
int main()
{
	
    string s1("1010");
    string s2("0101");
    relationalOperation(s1, s2);
    string s3("Geeks");
    string s4("Geeks");
    relationalOperation(s3, s4);
    return 0;

		 while(num!=0)
    {
        rem = num%10;
        rev = rem + (rev*10);
        num = num/10;
    }
}*/

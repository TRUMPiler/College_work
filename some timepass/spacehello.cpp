#include<iostream>
using namespace std;
int main()
{
      string b[5],a[5]={"H","E","L","L","O"};
    for(int i=0;i<=5;++i)
    {
            
            for(int j=5;j>i;j--)
            {
            cout<<" ";
            }
            for(int k=0;k<i;k++)
            {
                cout<<a[k]<<" ";
            }
                cout<<endl;
    }

    }
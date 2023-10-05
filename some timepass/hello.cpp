#include<iostream>
using namespace std;
int main()
{
    string a[5],b[5]={"H","E","L","L","O"};
    for (int i = 0; i <=5; i++)
    {
        for (int j = 0; j < i; j++)
        {
            /* code */
            cout<<b[j]<<" ";
        }
        cout<<endl;
        
    }
        
}
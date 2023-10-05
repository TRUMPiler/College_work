/*
Write a program to delete an element of array at position of
user choice.
*/
#include<string>
#include<iostream>
using namespace std;
int main(){
    int n,l;
    cout<<"Enter the size of array"<<endl;
    cin>>n;
    string nums[n];
    cout<<"enter the elements"<<endl;
    for(int i=0;i<n;i++)
    {        
        cin>>nums[i];
    }
    cout<<"entered elements are "<<endl;

    for(int i=0;i<n;i++)
    {
        cout<<nums[i]<<" ";
    }
    cout<<endl;
    cout<<"enter a position whoms data is  to be deleted"<<endl;
    cin>>l;
    nums[l]="";

    for(int i=0;i<n;i++)
    {
        cout<<nums[i]<<" ";
    }
}
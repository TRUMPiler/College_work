/*
Write a program to input element at the position of user’s
choice.
*/
#include<string>
#include<iostream>
using namespace std;
int main()
{
    string n[10],r;
    int i=91,j,l;
    cout<<"array size is 10";
    for(j=0;j<10;j++){
        n[j]='0';
    }
    while(i!=0){
    cout<<endl<<"mention a postion you want to put your element at (row is from 0 to 9)"<<endl;
    cin>>l;
    cout<<endl<<"Now put the element you want to store"<<endl;
    cin>>r;
    
    n[l]=r;
    cout<<" do want to store any more element(enter 0 for no else 1 for yes)"<<endl;
    cin>>i;
    }
    cout<<"{ ";
    for(j=0;j<10;j++){
        cout<<n[j]<<" ";
    }
    cout<<"}"<<endl;
}
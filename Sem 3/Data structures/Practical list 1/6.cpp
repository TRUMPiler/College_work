/*
Write a program to input n elements into array and display it.
n must be any positive number.
*/
#include<iostream>
using namespace std;
int main()
{
    int n;
    cout<<"Enter the size of array"<<endl;
    cin>>n;
    int nums[n];
    cout<<"enter the numbers(integers)  as mentioned size"<<endl;
    for(int i=0;i<n;i++){
        cin>>nums[i];
        if(nums[i]<=0){
            cout<<"all numbers should be positive "<<endl;
            i--;
        }
    }
    cout<<"entered numbers are: "<<endl;
        cout<<"{ ";
    for(int i=0;i<n;i++){
        
        cout<<nums[i]<<" ";
    }
    cout<<"}";

}
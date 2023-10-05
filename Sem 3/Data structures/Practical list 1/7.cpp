/*Write a program to take array of n elements. Insert Values in
it and count the total number of odd values, even values and
zero in array and display it.*/
#include<iostream>
using namespace std;
int main()
{
    int n,odd=0,even=0,zero=0;
     cout<<"Enter the size of array"<<endl;
    cin>>n;
    int nums[n];
    cout<<"insert the elements"<<endl;
    for(int i=0;i<n;i++){
     cin>>nums[i];
     if((nums[i]%2)==0 && nums[i]>0){
        even++;
     }
     if(nums[i]%2!=0){
        odd++;
     }
     if(nums[i]==0){
        zero++;
     }
    }
    cout<<" odd numbers in array is:- "<<odd<<endl;
    cout<<"even numbers in array is:-"<<even<<endl;
    cout<<"numbers of zero are:-"<<zero<<endl;
}
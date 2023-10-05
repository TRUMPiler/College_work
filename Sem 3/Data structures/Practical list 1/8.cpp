/*
Write a program to find positions of inputted value from
array.
*/
#include<string>
#include<iostream>
using namespace std;
int main()
{
    int n;
    
    cout<<"enter the size of array"<<endl;
    cin>>n;
    string nums[n],l,text;
    cout<<"enter the elements"<<endl;
    for(int i=0;i<n;i++){
        cin>>nums[i];
    }
    cout<<"Entered values are"<<endl<<"{ ";
    for(int i=0;i<n;i++){
        cout<<nums[i]<<" ";
    }   
    cout<<" }"<<endl<<"do you want to see the postion of any value of the displayed array(yes or no) ";
    cin>>text;
    if(text=="yes"){
        cout<<"pls enter the value you want to see the position of (between 0 to "<<(n-1)<<")"<<endl;
        cin>>l;
        for(int i=0;i<n;i++){
            if(nums[i]==l){
               cout<<i+1<<endl;
               break;
            }
          if(i<=n){
            cout<<"value not found"<<endl;
            break;
          }
        }
          for(int i=0;i<n;i++){
        cout<<nums[i]<<" ";
    } 
    }
    
}
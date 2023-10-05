import java.util.*;
class In
{

	String b[];
		
	In()
	{
		b=new String[5];
	}
	void Getter()
	{
		Scanner sc=new Scanner(System.in);
		
		for(int i=0;i<b.length;i++)
		{
		System.out.println("Enter the " +(i+1)+ " element which is in  int and you can write any numbers");	
		b[i]=sc.next();
		}
	}
	void Setter()
	{
		for(int i=0;i<b.length;i++)
		{
		System.out.println("The " +(i+1) +" element is:- "+b[i]);
		}
	}
}
class Out
{
	public static void main(String args[])
	{
		In nj=new In();
		nj.Getter();
		nj.Setter();
	}	
}
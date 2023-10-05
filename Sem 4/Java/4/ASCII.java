/*Write a program to display character of given ASCII number.
E.g. intasciiNumber=65, Output would be A.*/

import java.util.*;
class ASCII
{
	public static void main(String args[])
	{
		int a;
		Scanner sc=new Scanner(System.in);
		a=sc.nextInt();
		char c=(char)a;
		System.out.println(c);
	}
}

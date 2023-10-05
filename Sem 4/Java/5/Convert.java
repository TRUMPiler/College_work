/*
Write a program in which there are three variables whose data type is byte, int and
double; the value of int is 260 and value of double is 323.142. Convert the value of int
into byte, double into int and double into byte and display all the values after
conversion.
*/

import java.util.*;

class Convert
{
	public static void main(String args[])
	{
		double dn;
		int irn;
		byte bn;
	Scanner sc=new Scanner(System.in);
		
        dn=sc.nextDouble();
	irn=sc.nextInt();
		
	bn=(byte)irn;
	System.out.println("converted value of int into byte is "+bn);
	irn=(int)dn;
	System.out.println("converted value of double into int is "+irn);
	bn=(byte)irn;
	System.out.println("converted value of double into int and then into byte  is "+bn);		
	}
}

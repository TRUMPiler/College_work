import java.util.*;
class High
{
	public static void main(String args[])
	{
		int a[];
		a=new int[10];
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the numbers from which you want to find the highest");
		for(int i=0;i<a.length;i++)
		{
			
			a[i]=sc.nextInt();
		}
		Arrays.sort(a);
		System.out.println("second highest element is "+ a[8]);
	}
}
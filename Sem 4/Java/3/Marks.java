/*
Write a program to perform below task:
1. Calculate sum of given two variables, where subject_mark1= 26 and
subject_mark2=40.
2. Consider same variable and display average using conditional operator.
3. Display minimum marks of student.
*/
import java.util.*;
class Marks
{
 public static void main(String args[])
    {
        float subject_mark1,subject_mark2;
	Scanner sc= new Scanner(System.in);
	subject_mark1=sc.nextFloat();
	subject_mark2=sc.nextFloat();
	float total=subject_mark1+subject_mark2;
	System.out.println("total = "+ total);
	if(subject_mark1>subject_mark2)
	{
		System.out.println("student has got more marks in subject_mark1");
	}
	else
	{
		System.out.println("student has got more marks in subject_mark2");
	}
    }

}


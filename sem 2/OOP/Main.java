import java.util.*;
class Student{
	int y,x,z;
	Student(){
	x=10;
	
	}
	void Display(){
	System.out.println(x);
	}
}

	class Main{
		public static void main(String args[]){
		//Student s2=new Student();
		//Student s1=s2;
		Student s1,s2,s3=new Student();
		s3=s1;
	}
}

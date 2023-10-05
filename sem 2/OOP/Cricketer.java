/* 1. Write a Java program to calculate strike rate of the cricketer as well as allocate and
display player category based on strike rate.
Create a class called Cricketer by considering cricketer id, cricketer name, specialization
and score of last five tournaments score should out of 100.
Perform following operations to allocate category
1. Get the values from user
2. Display all the platinum cricketer data
3. Calculate strike rate using (Total score of 5 tournaments *100/500)
4. Allocate category based on following criteria
If strike rate> 90 then category = Platinum
If strike rate> 70 then category = Gold
If strike rate> 60 then category = Silver
5. Identify all the instance method
6. Implement the concept of array of object
Note: Add if you need extra instance variables */

import java.util.*;
class Cricket{
	int cricketid;
	String cricketername;
	String specialization;
	float score[];
	float total; 
	float Strikerate;
	
	Cricket(){
	cricketid=0;
	cricketername=null;
	specialization=null;
	score=new float[5];
	total=0.0f;
	Strikerate=0.0f;
	}
	
	void Getdata(int id, String name,String special){
	cricketid=id;
	cricketername=name;
	specialization=special;
	}

	void array(){
	Scanner sc=new Scanner(System.in);
	System.out.println("SCORE of next 5 matches are: ");
	for(int i=0;i<score.length;i++){
		score[i]=sc.nextFloat();
		}
	}

	void calculate(){
	for(int i=0;i<score.length;i++){
		total=total+score[i];
		}
	Strikerate=(total*100)/500;
	}

	void Display(){
		System.out.println("Cricketer name is "+cricketername);
		System.out.println("Cricketer id is "+cricketid);
		System.out.println("specialization is "+specialization);
		for(int i=0;i<score.length;i++){
			System.out.println("Score of match " + (i+1) + " is " + score[i]);
		}
		System.out.println("Total score is "+total);
		System.out.println("Strikerate is "+Strikerate);
	}

	void jugde(){
		if(Strikerate>90){
			System.out.println("player is category is Platinum");
		}
		else
		if(Strikerate>70){
			System.out.println("player is category is gold");
		}
		else
		if(Strikerate>60){
			System.out.println("player is category is Silver");
		}
		
	}
}


class Cricketer{
	public static void main(String[] args) {
	 	
	 
	 
			int id;
			String name;
			String special; /* this is used as a commentline */
		Scanner sc=new Scanner(System.in);
		System.out.println("--------------------Welcome to Players menu---------------------------");
		
		System.out.println("Please enter cricketername");
		name=sc.nextLine();
		System.out.println("Please enter cricketerid");
		id=sc.nextInt();
		System.out.println("Please enter specialization");
		special=sc.next();
		Cricket c=new Cricket();
		c.Getdata(id,name,special);
		c.array();
		c.calculate();
		c.Display();
		c.jugde();
			

		}
}
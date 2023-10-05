/*
2. Write a Java program to calculate average purchase of the customer as well as calculate
and display discount earned by the customer.Create a class called Customer by
considering customer id, customer name, city, contact no and last five purchases from
the store.
Perform following operations to calculate discount:
1. Get the values from user
2. Display the customer data
3. Calculate average purchase using (Total purchase/ 5)
4. Calculate discount based on following criteria
If average purchase > 50000 then discount = 5000
If average purchase > 35000 then discount = 3500
If average purchase > 20000 then discount = 2000
If average purchase < 20000 then discount = 0
5. Identify all the instance method
Note: Add if you need extra instance variables
*/
import java.util.*;
class CustomerIN{
		int custid;
		String custname;
		String City;
		Long contactno;
		float Purchase[];
		float Total,Discount,Average_Purchase;

	CustomerIN(int a,String name,String citys,Long cn){
		custid=a;
		custname=name;
		City=citys;
		contactno=cn;
		Total=0.0f;
		Discount=0.0f;
		Average_Purchase=0.0f;
		Purchase = new float[5];
	}
		void array(){
		Scanner sc=new Scanner(System.in);
		
		System.out.println("Please enter the Amount of last Purchases");
		for(int i=0;i<Purchase.length;i++){
			Purchase[i]=sc.nextFloat();
		}
		}

		void Displaydata(){
			System.out.println("Customer name is: "+custname);
			System.out.println("Customer id is: "+custid);
			System.out.println("Customer city is: "+City);
			System.out.println("Customer ContactNo is: "+contactno);
			System.out.println("LAST 5 Purchases are: ");
			for(int i=0;i<Purchase.length;i++){
				System.out.println("Purchase "+(i+1)+" is "+Purchase[i]);
			}
		}
		void calculate(){
			for( int i=0;i<Purchase.length;i++){
			Total=Total+Purchase[i];
			}

			Average_Purchase=Total/Purchase.length;
			System.out.println("Total Purchase = "+Total);
			System.out.println("Average_Purchase = "+Average_Purchase);
		}

		void Discount(){
			if(Average_Purchase>=50000){
				Discount=5000f;
			}
			else if(Average_Purchase>=35000){
				Discount=3500f;
			}
			else if(Average_Purchase>=20000){
				Discount=2000f;
			}
			else if(Average_Purchase<=20000){
				Discount=0f;
			}
			else {
				Discount=0f;
			}
			System.out.println(" Discount allotted is "+Discount);
		}
	
}

class CustomerOUT{
	 public static void main(String[] args) {
			Scanner sc=new Scanner(System.in);
			int a;
			String name;
			String citys;
			Long cn;
			System.out.println("-----------------------------------------Welcome to cart Menu-----------------------------------------");
			System.out.println("Please Enter Custid: ");
			a=sc.nextInt();
			System.out.println("Please Customer name: ");
			name=sc.next();
			System.out.println("Please Customer City");
			citys=sc.next();
			System.out.println("Please ContactNo : ");
			cn=sc.nextLong();
			CustomerIN ne=new CustomerIN(a,name,citys,cn);
			ne.array();
			ne.Displaydata();
			ne.calculate();
			ne.Discount();
	}
}
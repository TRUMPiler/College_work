/*
4. A book shop maintains the inventory of books that are been sold at the shop. The list
includes the details such as BookTitle, Author, Price, Publisher & Stock position.Whenever a customer wants to purchase a book, the sales person inputs the title and
author to the system and the system searches the list & display whether it is available or
not. If it is not, an appropriate message is displayed. If it is, then the system displays the
book detail and request for the number of copies required. If the requested copies are
available, the total cost of the requested copies is displayed; otherwise, the message
"Required copies not in stock" is displayed. Design a system using a class called Books
with suitable members and member functions & constructors. Use new operator in
constructors to allocate memory space required.
*/
import java.utill.*;
class BookIN
{
	int BookID;
	String Booktitle;
	String Author;
	float Price;
	String Publisher;
	int Stock;
	int  n=1;
	int o=0;
	BookIN()
	{
		Booktitle=null;
		Author=null;
		Price=null;
		Publisher=null;
		Stock=null;
		BookID=null;
	}
	Void getdata()
	{
		Scanner sc=new Scanner(System.in);
		System.out.println("BOOK ID STARTS FROM 1");
		System.out.println("Enter Book Title");
		Booktitle=sc.next();
		System.out.println("Enter the author of the book");
		Author=sc.next();
		System.out.println("Enter the Book Publisher");
		Publisher=sc.next();
		System.out.println("Enter the Price of the Book");
		Price=sc.nextFloat();
		System.out.println("Enter the Stock of the Book");	
		Stock=sc.nextInt();
		
	}

	
	Void DisplayData()
			{
		
				System.out.println("--------------------------------------------------------------------------------------------------------");
				System.out.println("Booktitle:"+Booktitle);
				System.out.println("Author:"+Author);
				System.out.println("Publisher:"+Publisher);
				System.out.println("Price:"+Price);
				System.out.println("Stock:"+Stock);
			}
	Void Buybook()
	{
		

	}
}

class BookOUT
{
	public static void main(String[] args) 
	{
		Scanner sc=new Scanner(System.in);
		BookIN b[]=new BookIN();
		int s;
		int o=0,k;
		System.out.println("Welcome to The Library menu");
		System.out.println("Press 1 to Insert a Book data");
		System.out.println("Press 2 to Buy a Book");
		s=sc.nextInt();
		switch (s);
		{
			case 1:
			
				b[o].getdata();
				o++;
			
			
			case 2:

			String Title,author;
			System.out.println("Please enter Booktitle:");
			Title=sc.next();
			System.out.println();
			author=sc.next();
			for(int i=0;i<o;)
			{
				if(b[i].Booktitle==Title)
				{
					if(b[i].Author==author)
					{
						System.out.println("Book is available");


					}		
				}	
			}
			
		}
		

	}
}

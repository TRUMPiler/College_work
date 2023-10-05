import java.util.*;
class Price
{
 public static void main(String args[])
    {
 
        
        double data;
	Scanner sc= new Scanner(System.in);	
    	data=sc.nextDouble();
	data=data*100;
        int value = (int)data;
        System.out.println(value+" paise");
    }

}

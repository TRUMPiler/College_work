/*Write a program to convert given no. of days into months, years and days; assume
that each month is of 30 days. For Example: if input is 69 than Output is 2 months
and 9 days */
import java.util.*;
class Years
{
    
        int days,months,years;
        Years()
        {
            days=0;
            months=0;
            years=0;
        }
        void daysinput()
        {
           Scanner sc = new Scanner(System.in);
            days=sc.nextInt();
            
            Convert();
        }
        void Convert()
        {
            while(days>29)
            {
                if(days>=360)
                {
                    years++;
                    days=days-360;
                }
               else if(days>=30)
               {
                    months++;
                    days=days-30;
               }
            }
             display();
        } 
            void display()
            {
                System.out.println("Months:-"+months);
                System.out.println("days:-"+days);
                System.out.println("years:-"+years);
            } 
}
class Convert
{
    public static void main(String[] args) {
        Years y=new Years();
        y.daysinput();
    }
}
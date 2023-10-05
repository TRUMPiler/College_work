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
            Scanner sc=new Scanner(System.in);
            days=sc.nextInt();
            System.out.println("days");
        }  
}
class Convert
{
    public static void main(String[] args) {
        Years y=new Years();
        y.daysinput();
    }
}
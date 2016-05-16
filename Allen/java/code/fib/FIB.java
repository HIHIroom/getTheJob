/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package fib;
import java.util.Scanner;

/**
 *
 * @User:Huang Yi
 */
public class FIB {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
         System.out.println("請輸入費氏陣列項數:");
        Scanner scanner = new Scanner(System.in);
        int number=scanner.nextInt();
      fib(number);
    }
    public static void fib(int number){
        int[] fArray=new int[number+1];
      
        for(int i=0;i<fArray.length;i++){
            if (i<=1){
                  fArray[i]=i;
                    
             }
              else{
                
                    fArray[i]=fArray[i-1]+fArray[i-2];  
              }
        }
          int sum=0;
         for(int value:fArray){
            System.out.print(value+",");
           sum+=value; 
        }
          System.out.println();
           System.out.print("費氏總合為:"+sum);
    }
}

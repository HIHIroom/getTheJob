/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package rfib;

import java.util.Scanner;

/**
 *
 * @User:Huang Yi
 */
public class RFIB {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
             System.out.println("請輸入費氏陣列項數:");
            Scanner scanner = new Scanner(System.in);
             int number=scanner.nextInt();
             int[] fArray=new int[number];
             for(int i=0;i<fArray.length;i++){
                 fArray[i]=fib(i+1);
                  System.out.print( fArray[i]+",");
             }  
    }
    public static int fib(int n){
        if(n==1 || n==2)
            return 1;
       
        else
          return fib(n-1)+fib(n-2);
                   
    }
}

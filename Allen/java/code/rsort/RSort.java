/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package rsort;

import java.util.Random;

/**
 *
 * @User:Huang Yi
 */
public class RSort {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Random rnd=new Random();
        int aIndex=rnd.nextInt(50)+2;
        int[] rArray=new int[aIndex];
        for(int i=0;i<rArray.length;i++){
            rArray[i]=rnd.nextInt(80)+1;
        }
        sort(rArray);
    }
    public static void sort(int[] array){
 
        int min;
        int temp;
        for(int i=0;i<array.length;i++){
           min=array[i];
           for(int j=i+1;j<array.length;j++){
              if(min>array[j]){
                  temp=min;
                  min=array[j];
                 array[j]=temp;
              }
           }
          array[i]=min;
        }
        
        for(int value:array){
            System.out.print(value+",");
        }
    }
}
        



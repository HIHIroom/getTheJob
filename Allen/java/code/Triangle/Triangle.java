/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package triangle;

/**
 *
 * @User:Huang Yi
 */
public class Triangle {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int lv=5;
        for(int i=1;i<6;i++){
            for(int j=1;j<=i+5;j++){
              
                if(j>lv){
                    System.out.print("*");
                }
                else{
                      System.out.print(" ");
                }
              }
            System.out.println();
            lv--;
            }
            
        
            
        }
    }



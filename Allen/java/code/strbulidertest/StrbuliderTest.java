/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package strbulidertest;

/**
 *
 * @User:Huang Yi
 */
public class StrbuliderTest {

    /**
     * @param args the command line arguments
     */
       static int times = 10000;
    public static void main(String[] args) {
        // TODO code application logic here
        String s1="aaa";
        StringBuilder s2=new StringBuilder("aaa");
        test(s1);
        test(s2);
    }
    public static void test(String s){
        long begin = System.currentTimeMillis(); 
        for(int i=1;i<times;i++){
            s+="abc";
           
        }
        long over = System.currentTimeMillis();  
        System.out.println(" 操作 " + s.getClass().getName() + " 類型使用的時間為： "  
                + (over - begin) + " 毫秒 ");  
    }
     public static void test(StringBuilder s){
        long begin = System.currentTimeMillis(); 
        for(int i=1;i<times;i++){
            s.append("abc");
        }
        long over = System.currentTimeMillis();  
        System.out.println(" 操作 " + s.getClass().getName() + " 類型使用的時間為： "  
                + (over - begin) + " 毫秒 ");  
    }
}

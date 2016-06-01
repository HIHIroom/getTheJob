/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package exinterface;

/**
 *
 * @User:Huang Yi
 */
public class Exinterface {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Man p1=new Man("peter");
    //    p1.setName("peter");
        p1.walkToThere("Swimming pool");
        p1.swim();
      //  p1.state="50";
        System.out.println(p1.state);
    }

}

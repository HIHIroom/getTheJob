/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package polymorphismdemo;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @User:Huang Yi
 */
public class PolymorphismDemo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        List<Pet>  pets=new ArrayList<Pet>();
        pets.add(new cat());
         pets.add(new dog());
        for(Pet pet:pets){
            pet.makeSound();
        }
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package worldbehavior;

/**
 *
 * @User:Huang Yi
 */
public class WorldBehavior {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Singer singer=new Singer();
         singer.setName("peter");
         singer.setJob("歌手");
         singer.setAge(20);
         Actor actor=new Actor();
        actor.setName("allen");
         actor.setJob("演員");
        actor.setAge(21);
         showbehavior(singer);
         showbehavior(actor);
    }
     public static void showbehavior(Human human){
         human.playPC();
    }
}

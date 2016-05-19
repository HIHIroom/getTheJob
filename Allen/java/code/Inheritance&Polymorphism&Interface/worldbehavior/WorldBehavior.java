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
        Human a=singer;
        a.Skill();
        a=actor;
        a.Skill();
        System.out.println("以上為人類職業行為---------------");
         dog dog1=new dog();
         dog1.setKind("鬥牛犬");
         cat cat1=new cat();
         cat1.setKind("斑點貓");
         Ghost ghost1=new Ghost();
         ghost1.setName("鬼");
         //介面多型
         normalBehaviour nBehavior=singer;
         nBehavior.eat();
         nBehavior=actor;
         nBehavior.eat(); 
          nBehavior= dog1;
         nBehavior.eat();
           nBehavior= cat1;
           nBehavior.eat();
             nBehavior= ghost1;
           nBehavior.eat();
         
         System.out.println("以上為世界正常行為----------------");
    }
     public static void showbehavior(Human human){
         human.playPC(); 
    }
      
     
}

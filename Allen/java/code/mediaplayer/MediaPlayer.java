/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package mediaplayer;
import java.util.Scanner;
/**
 *
 * @User:Huang Yi
 */
public class MediaPlayer {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws ClassNotFoundException,InstantiationException,IllegalAccessException{
        // TODO code application logic here
       // String playerImp1=System.getProperty("mediaplayer.PlayerImp1");
        Player player=(Player)Class.forName("mediaplayer.ConsolePlayer").newInstance();
        System.out.print("請輸入撥放的影片");
        player.play(new Scanner(System.in).nextLine());
    }

}

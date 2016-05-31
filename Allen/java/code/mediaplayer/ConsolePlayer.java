package mediaplayer;
public class ConsolePlayer implements Player{
    public void play(String video){
        System.out.println("現在撥放的是"+video);
    }
}
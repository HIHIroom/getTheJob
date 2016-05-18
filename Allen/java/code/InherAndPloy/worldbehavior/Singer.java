package worldbehavior;
public class Singer extends Human{
    public void sing(){
        System.out.println(this.getName()+"職業是:"+this.getJob()+",所以會唱歌");
    }
    public void playPC(){
         System.out.println(this.getName()+"雖然職業是:"+this.getJob()+",但還是會打電腦");
    }
}
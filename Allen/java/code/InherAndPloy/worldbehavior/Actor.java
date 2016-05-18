package worldbehavior;
public class Actor extends Human{
     public void act(){
        System.out.println(this.getName()+"職業是:"+this.getJob()+",所以會演戲");
    }
    public void playPC(){
         System.out.println(this.getName()+"雖然職業是:"+this.getJob()+",但還是會打電腦");
    }
}
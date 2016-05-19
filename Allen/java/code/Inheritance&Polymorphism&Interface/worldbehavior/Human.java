package worldbehavior;
public  abstract class Human implements normalBehaviour{
    private String name;
    private int age;
    private String job;
    public String getName(){
        return name;
    }
    public void setName(String name){
        this.name=name;
    }
      public int getAge(){
        return age;
    }
    public void setAge(int age){
        this.age=age;
    }
       public String getJob(){
        return job;
    }
    public void setJob(String job){
        this.job=job;
    }
    public  void playPC(){
           System.out.println(this.getName()+"雖然職業是:"+this.getJob()+",但還是會打電腦");
    }
     public  void eat(){
           System.out.println(this.getName()+"用筷子吃飯");
    }
     public abstract void Skill();
      
       
    
    
}
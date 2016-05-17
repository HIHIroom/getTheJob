package abs;
public abstract class Father{
    private String last_name;
    private int age;
    private String blood;
    public String getName(){
        return last_name;
    }
    public void setName(String last_name){
         this.last_name=last_name;
    }
    public int getAge(){
        return age;
    }
    public void setAge(int age){
        this.age=age;
    }
    public String getBlood(){
        return blood;
    }
    public void setBlood(String blood){
        this.blood=blood;
    }
    public abstract void talk();
      
  
}
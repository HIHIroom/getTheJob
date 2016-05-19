package worldbehavior;
public class Ghost implements normalBehaviour{
    String name;
    public String getName(){
        return name;
    }
    public void setName(String name){
        this.name=name;
    }
    public  void eat(){
           System.out.println("我是"+this.getName()+",吃元寶蠟燭");
    }
}
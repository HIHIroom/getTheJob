package exinterface;
public  abstract class Human implements WalkToSwimmingPool{
     private String name;
     Human(){
         
     }
    Human(String name){
         this.name=name;
    }
   
    public String getName(){
        return name;
    }
    public void setName(String name){
        this.name=name;
    }
    public  void walkToThere(String place){
          System.out.println(this.name+",goto"+place);
      }
    public  void swim(){
          System.out.println(this.name+",Swimming");
      }
}
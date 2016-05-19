package worldbehavior;
public abstract class Pet implements normalBehaviour{
      private String kind;
      
       public String getKind(){
        return kind;
    }
    public void setKind(String kind){
        this.kind=kind;
    }
     public abstract void eat();
}
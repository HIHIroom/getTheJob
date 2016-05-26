
package polymorphismdemo;

abstract class Pet{
    public abstract void  makeSound();
}
class cat extends Pet{
      public  void  makeSound(){
          System.out.println("Meow");
      }
}
class dog extends Pet{
      public  void  makeSound(){
          System.out.println("Woof");
      }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package staticloadingmain;

/**
 *
 * @User:Huang Yi
 */
public class StaticLoadingMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        GreetingService service = new HasEatingService();
        GreetingServiceUtil.callService(service);
        GreetingServiceUtil.callService(new HiGreetingService());

    }

}
 interface GreetingService {

    void greeting(String who);

}
 class HiGreetingService implements GreetingService {

    public void greeting(String who) {

        System.out.println("Hi, " + who + ".");

    }

}
 class HasEatingService implements GreetingService {

    static {
        // 為了證明是動態載入，所以在這裡加上這個動作!!
        System.out.println("INFO: HasEatingService Loading!!");
    }
     
    public void greeting(String who) {
        System.out.println(who + ", Has eating??");
    }

}
class GreetingServiceUtil {
    public static void callService(GreetingService service) {
        System.out.print("Class Name: " + service.getClass().getName());
        System.out.print(", Message: ");
        service.greeting("cdchen");
    }
}


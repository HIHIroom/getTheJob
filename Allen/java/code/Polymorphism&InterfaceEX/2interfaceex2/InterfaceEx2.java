/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package interfaceex2;

/**
 *
 * @User:Huang Yi
 */
public class InterfaceEx2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Operater(new AirConditioner("Pansonic"));
	Operater(new ElectronicDoor("National"));
    }
public static void Operater(RemoteControl oRC)
	{
		System.out.println("RemoteName: " + oRC.getName());
		System.out.println(oRC.turnOn());
		System.out.println(oRC.turnOff());
	}
}

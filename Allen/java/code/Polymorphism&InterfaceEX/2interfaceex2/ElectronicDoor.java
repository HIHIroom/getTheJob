package interfaceex2;
public class ElectronicDoor implements RemoteControl
{
	private String name;
	public ElectronicDoor(String cTemp) { this.name = cTemp; }
	public String getName() { return this.name; }
	public String turnOn()  { return "ElectronicDoor ON"; }
	public String turnOff() { return "ElectronicDoor OFF"; }
}
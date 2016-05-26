package interfaceex2;
public class AirConditioner implements RemoteControl
{
	private String name;
	public AirConditioner(String cTemp) { this.name = cTemp; }
	public String getName() { return this.name; }
	public String turnOn()  { return "AirConditioner ON"; }
	public String turnOff() { return "AirConditioner OFF"; }
}
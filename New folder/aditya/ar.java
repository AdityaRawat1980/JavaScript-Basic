// Java Program of JavaBean class
package geeks;

public class Student implements java.io.Serializable {
	private int id;
	private String name;
	
	// Constructor
	public Student() {}

	// Setter for Id
	public void setId(int id) { this.id = id; }

	// Getter for Id
	public int getId() { return id; }
	
	// Setter for Name
	public void setName(String name) { this.name = name; }

	// Getter for Name
	public String getName() { return name; }
}

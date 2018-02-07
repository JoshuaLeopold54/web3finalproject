//Joshua Leopold test Object request/sender

package io.Web3Project.topic;

public class Topic {
	
	//Having our Strings set up to know what we can send, recieve.
	//Think of a database and how it would work with this. Much easier.
	private String id;
	private String name;
	private String description;
	
	public Topic() {
		
	}
	
	public Topic(String id, String name, String description) {
		super();
		this.id = id;
		this.name = name;
		this.description = description;
	}
	
	//Getter setters to allow us to set these variables up above!
	//We can also recieve them later on, see TopicController.java for output.
	
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
}

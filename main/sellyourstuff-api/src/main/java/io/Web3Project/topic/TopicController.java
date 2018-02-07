package io.Web3Project.topic;

import java.util.Arrays;
import java.util.List;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class TopicController {
	
	@RequestMapping("/topics")
	//Basically what this does, is when you visit the /topics URL, it is going
	//to return a list of these "Topics" from using the class Topic.java
	public List<Topic> getAllTopics() {
		//Actually returns these as Objects in JSON so we can easily extract the data.
		//The values correspond to their identifier we created in Topic.java
		return Arrays.asList(
				new Topic("1","Spring Framework","Hello"),
				new Topic("2","Another Spring Test","Hello v.2"),
				new Topic("3","Yet Another Spring Test","Hello v.3")
				);
	}
	
}

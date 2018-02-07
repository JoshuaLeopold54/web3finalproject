//Joshua Leopold test class to understand/reference REST controllers!

package io.Web3Project.hello;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

//This is added to have REST controlled pages, basically having
//a function run as you call the URL. 
// -- THIS IS NEEDED -- //

//"Hey, this is a HTTP request class, get ready for some URLs to respond to!"
@RestController
public class HelloController {

	
	//This is essentially what you need to be able to get a function to run
	//when a certain URL is called. 
	@RequestMapping("/hello")
	public String sayHi() {
		return "<h1>Hello</h1>";
	}
}

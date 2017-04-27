function pageLoad() { 
	//var list = document.getElementById("categories");
	//var books = document.createElement("INPUT");
	//books.setAttribute("type","radio");
	//books.setAttribute("value","book1");
	//list.innerHTML=books.value;
	//list.appendChild(books);
	var test = document.getElementById("categories");
	test.innerHTML = "test";
	new Ajax.Request("booklist.php",{
		method: "get",
		onSuccess: myAjaxSuccessFunction
	});

} 
function myAjaxSuccessFunction(ajax) {
		/*var list=document.getElementById("categories");

		var options = document.createElement("INPUT");
		stuff = ajax.responseXML.getElementsByTagName("book");
		for (var i=0;i<stuff.length;i++)
		{
			var category = stuff[i].getAttribute("category"); 
			options= document.createElement("INPUT");
			options.setAttribute("type","radio");
			options.setAttribute("value",category);
			list.innerHTML=options.value;
			list.appendChild(options);
				
		}*/
		//alert(ajax.responseText);
		var elms = ajax.responseXML.getElementsByTagName("book")[0];
		var p = document.createElement("p");
		p.innerHTML = "elms";
		document.getElementById("categories").appendChild(p); 
	
}
window.onload = pageLoad;


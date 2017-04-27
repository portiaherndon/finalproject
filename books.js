function pageLoad() { 
	var list = document.getElementById("categories");
	var books = document.createElement("INPUT");
	books.setAttribute("type","radio");
	books.setAttribute("value","book1");
	list.appendChild(books);
	//$("categories").innerHTML = "stuff";
}
function okayClick() {
	alert("hello");

}
window.onload=pageLoad;


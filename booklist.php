<?php 
	$db= new PDO("mysql:dbname=books","root","Pherndon1234"); 
	$categories=$db->query("SELECT * FROM book_category;");
	$test = False;
	$book_categories = array();
	foreach($categories as $category ){ 
		//echo $category;
		for($i=1;$i<count($category);$i++){
			if($i>1){
				$x=$i;
				while($x >1){ 
					if($category["category"] === $book_categories[$x-1]){
					$test = True;
					}
					else
						$test = False;
					$x--;
				}
			}
			if($test === False){
				$book_categories = $category; 
			}
		}		
	} 
?>

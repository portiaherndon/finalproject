<?php 
	$db= new PDO("mysql:dbname=books","root","Pherndon1234"); 
	$categories=$db->query("SELECT * FROM book_category;");
	foreach($categories as $category ){
		$list_of_categories = $array();
		for ($i =1; $i<=count($category);$i==){
			$x = $i;
			if($i === 1)
				$list_of_categories = $category["category"];
			while($x > 1)
			{
				if($category["category"] === $list_of_cateogories[$x-1])
				{
					$x--;		
				}
				else
					$list_of_categories = $category;
			}	
			
	} 
?>

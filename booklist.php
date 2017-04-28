<?php 
	$db= new PDO("mysql:dbname=books","root","Pherndon1234"); 
	$categories=$db->query("SELECT * FROM book_category;");
	$test = False;
	$book_categories = array();
	$i=0;
	foreach($categories as $category ){ 
		if($i === 0)
		{ 
			$book_categories[$i] = $category["category"];
		}
		else
		{
			$s = $i;
			while($s>0)
			{
				if($category["category"] == $book_categories[$s-1])
				{
					
					$test = True;
					break;
				}
				else
				{
					$test = False;	
				}
				$s--;
			}
		}
		if($test === False) { 
			$book_categories[$i] = $category["category"];
			$i++; 
		} 
	} 
	$xml = new SimpleXMLElement("<?xml version='1.0'?><categories/>"); 
	array_walk_recursive($book_categories, array($Xml,'addchild'));
	echo($xml->asXML());
	echo json_encode($book_categories, JSON_FORCE_OBJECT);
?>

<h2>Bienvenido Invitado</h2>
<div class="text">
	<center><img src="images/home.jpg" alt=""/></center>
</div>

<h2>Productos al azar</h2>
<div class="gal">
<?php	
	if(count($page->arrProduct)>0) {
		$i=1;
		foreach($page->arrProduct as $objProduct) {
			echo("<div class=\"img_gal\">
			<a href=\"index.php?page=detail1&page2=slide2&productID={$objProduct->getProductID()}&categoryID={$objProduct->getCategoryID()}\">
			<img src=\"images/product/{$objProduct->getProductImage()}\" 
			width=\"100\" height=\"100\" class=\"img_g\" alt=\"{$objProduct->getProductName()}\"  /></a>
			<br /><a href=\"index.php?page=detail&page2=slide2&productID={$objProduct->getProductID()}&categoryID={$objProduct->getCategoryID()}\">{$objProduct->getProductName()}</a></div>");
			if($i%3==0 && $page->arrProduct[$i+1]!=null) echo("</div><br/><br/><div class=\"gal\">");
			$i++;
		}
		if($i%3!=0) echo("</div>");
	} else {
		echo("No hay mas productos</div>");
	}
?>
<br/><br/>

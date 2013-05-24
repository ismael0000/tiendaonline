<?php 

	$sql = "SELECT DISTINCT TOP 3 ProductID, categoryID, SUM(Quantity) AS [Quantity] FROM [Order] GROUP BY ProductID";
?>
<MARQUEE onmouseover=this.stop() onmouseout=this.start() scrollAmount=3 direction="up" height="360" loop =-1>
		    <div style="width:140; margin:auto;" align="center">
				<table border='1'>
                                <table style="font-family:Tahoma, Geneva, sans-serif; border-style: none">
								<?php 
								
								if(count($_page->arrProductRandom)>0) 
								{
									$i=1;
									foreach($_page->arrProductRandom as $objProduct) 
									{
										echo ("<tr>");
										echo("<td style='border-style:none none'><a href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID=
										{$objProduct->getProductID()}&categoryID={$objProduct->getCategoryID()}\"><img src=\"../images/product/{$objProduct->getProductImage()}\" class = \"img_g\" width=\"100\" height=\"110\" /></a></td>");
										echo ("</tr><tr><td></td></tr>");
									}
								}
								?>
                                </table>
				</table>
            </div>
</MARQUEE>

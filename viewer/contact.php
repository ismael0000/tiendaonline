<h1 align="center">Contáctenos</h1>
<div class="text">
	<table align="center">
		<tr>
			<td align= "left" valign="top"><img width="200" src="../images/contact.jpg"></td>
			<td align= "left" valign="top">
				<br/>
				<b>Teléfono</b> : (+34)666999666 (Servicio de ventas)<br/>
				<br/>
				<b>Contactar online</b> : <a href="ymsgr:sendIM?cristina_yahoo_id">Empezar chat</a><br/>
				<br/>
				<b>Enviar email</b> : <a href="mailto://ismaelmail@gmail.com">ismaelmail@gmail.com</a><br/>
				<br/>
				
				Póngase en contacto con nosotros para obtener asesoramiento y información<br/>
				<br/>
			</td>
		</tr>
	</table>
</div>
<h2>Productos al azar</h2>
<?php	
	if(count($_page->arrProduct)>0) {
		$i=1;
		echo ("<table><tr>");
		foreach($_page->arrProduct as $objProduct) 
		{
			echo("	<td><div class=\"product_title\">{$objProduct->getProductName()}</div>
                                    <div class=\"product_detail\">
                                        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                            <tr>
                                                <td height=\"185\" width=\"50%\" align=\"center\">
													<img src=\"../images/product/{$objProduct->getProductImage()}\" width=\"100\" height=\"100\" class=\"img_g\" \"  
													onmouseout=\"hidetrail()\" onmouseover=\"showtrail('../images/product/{$objProduct->getProductImage()}','',200,200)\" />
													<div style='display: none; position: absolute;z-index:110; ' id='preview_div'></div></a><br/>
												</td>
                                                <td align='left'>
													{$objProduct->getProductDetails2()}
                                                </td>
                                            </tr>
											<tr>
											<td></td>
											<td>
													<a href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID={$objProduct->getProductID()}&categoryID={$objProduct->getCategoryID()}\"><img src=\"../images/buy.gif\" hspace=\"10\" align=\"right\" /></a>
											</td>
											</tr>
                                        </table>
                                    </div></td>");
		}
	} else {
		echo("No hay productos para listar");
	}
	echo("</tr></table>");
?>
<br/><br/>

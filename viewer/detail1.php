<!-- encabezado  -->
	<div class="nombreProd">
		<?php
			//$html = "<a href=\"?page=list3&cat={$_page->objCategory->getCategoryID()}\">{$_page->objCategory->getCategoryName()}</a>";
			//$html .= " --> ";
			$html ="";
			$html .= "<p>Nombre del producto: </p>";
			$html .= "<h3>{$_page->objProduct->getProductName()}</h3>";
			echo($html);
			if(isset($_SESSION['carts']))
			$list = $_SESSION['carts'];
		?>
	</div>
	
<!-- cuadro con foto e info  -->
	<div class="formularioDetail1">
		<form action="../viewer/viewerController.php?page=Cart&event=cart" method="POST" id="FormOrder" onsubmit="return checkNum()">
			<div class="detail1Iz">
				<img width="300" src="../images/product/<?php echo $_page->objProduct->getProductImage() ?>" alt="<?php echo($_page->objCategory->getCategoryName()) ?>">
				<span class="numUnidades">Número unidades:</span> <input type="text" name="quantity" id="quantity" value=""/>
				<input type='hidden' name='id' value='<?php echo $_page->objProduct->getProductID() ?>'/>
				<input type='hidden' name='name' value='<?php echo $_page->objProduct->getProductName() ?>'/>
				<input type='hidden' name='price'value='<?php echo $_page->objProduct->getProductPrice()?>'/>
				<input type="image" src ="../images/carrito.jpg" title="añade al carrito" class="carrito2"></a>
			</div>
			<div class="detail1Der">
				<ul class="lista">
					<li><strong>Precio : </strong><?php echo $_page->objProduct->getProductPrice() ." Euros"; ?></li>
					<li><strong>Detalles del producto: </strong><?php echo($_page->objProduct->getProductDetails()); ?></li>
					<li><strong>Manual de producto: </strong><?php echo($_page->objProduct->getProductManual()); ?></li>
				</ul>
			</div>
		</form>
	</div>

	<!--  jCarousel library -->
	<script type="text/javascript" src="../jquery/jquery.jcarousel.js"></script>
	<!--   jCarousel skin stylesheet -->
	<link rel="stylesheet" type="text/css" href="../lib/skins/tango/skin.css" />

	<script type="text/javascript">

		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
		});

	</script>

	<?php
		$arrOrders = $_page->arrProduct;
	?>

<div id="wrap" class="wrapperCarouselInferior">
  <h2 class="productosRelacionados">Productos relacionados</h2>
  <div class="jcarousel-skin-tango">
  <div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal">
  
  <div disabled="true" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal">
  </div>
  
  <div  class="jcarousel-clip jcarousel-clip-horizontal">
  <ul  id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
  <?php 
	for ($i = 0; $i < count($arrOrders); $i++) 
	{ 
	?>
		<li><img src="../images/product/<?php echo $arrOrders[$i]->getProductImage()?>" alt="" width="75" height="75" onclick="window.open ('../viewer/viewerController.php?page=detail1&page2=slide2&categoryID=<?php echo $_page->objCategory->getCategoryID()?>&productID=<?php echo $arrOrders[$i]->getProductID()?>','mywindow');"/></li>
	<?php 
	}
	?>
  </ul>
  </div>
  
  <div disabled="false" style="display: block;" class="jcarousel-next jcarousel-next-horizontal"></div>
  
  </div>
	</div>
</div>



<div style="width:100%;position: fixed;top: 200px;left: 0px; color: white;display: none" id="divOrder">
	<form action="?page=detail&event=orderProduct&productID=<?php echo($_page->objProduct->getProductID()) ?>" method="POST" id="FormOrder" onsubmit="return detailFormOrder()">
		<center>
			<table bgcolor="#663333" cellpadding="10" style="">
				<tr>
					<td>Nombre completo : </td>
					<td><input type="text" name="customerName" id="customerName" /></td>
				</tr>
				<tr>
					<td>Telefono : </td>
					<td><input type="text" name="customerPhone" id="customerPhone" /></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="customerEmail" id="customerEmail" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input name="cmdClose" id="cmdClose" type="button" value="Omitir" />
					<input type="submit" value="Enviar" /></td>
				</tr>
			</table>
		</center>
		<input type="hidden" name="productID" value="<?php echo($_page->objProduct->getProductID()) ?>"/>
	</form>
</div>


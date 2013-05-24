<h2>
	<?php
		$html = "<a href=\"?page=list&categoryID={$page->objCategory->getCategoryID()}\">{$page->objCategory->getCategoryName()}</a>";
		$html .= " -> ";
		$html .= $page->objProduct->getProductName();
		echo($html);
	?>
</h2>
<br/>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="600">
	<tr>
		<td height="300" background="images/b_img_bg.jpg" width="225" valign="top" align="center">
			<img height="300" width="225" src="images/product/<?php echo $page->objProduct->getProductImage() ?>" alt="<?php echo($page->objCategory->getCategoryName()) ?>">
			<br/><br/>
				<a class="razd_but" id="orderButton">
					Orden
				</a>
		</td>
		<td background="images/b_img_bg.jpg" width="330" valign="top">
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr><td class="f13grey"><strong>Precio : </strong><?php echo $page->objProduct->getProductPrice() ." euros"; ?></td></tr>
				<tr><td height="20">&nbsp;</td></tr>
				<tr><td valign="top"><div id="scroller"><p>
				  <strong>Acerca del producto: </strong><?php echo($page->objProduct->getProductDetails()); ?>
				  <br/>
				  <br/>
				  <strong>Guia de usuario: </strong><?php echo($page->objProduct->getProductManual()); ?>
				  </p></div></td></tr>
			</table>
		</td>
	</tr>
</table>
<br/>
<h2></h2>
<br/>
<?php
	echo $productID;
?>
<div style="width:100%;position: fixed;top: 200px;left: 0px; color: white;display: none" id="divOrder">
	<form action="?page=detail&event=orderProduct&productID=<?php echo($page->objProduct->getProductID()) ?>" method="POST" id="FormOrder" onsubmit="return detailFormOrder()">
		<center>
			<table bgcolor="#663333" cellpadding="10" style="">
				<tr>
					<td>Nombre cliente : </td>
					<td><input type="text" name="customerName" id="customerName" /></td>
				</tr>
				<tr>
					<td>Telefono cliente : </td>
					<td><input type="text" name="customerPhone" id="customerPhone" /></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="customerEmail" id="customerEmail" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input name="cmdClose" id="cmdClose" type="button" value="Bỏ qua" />
					<input type="submit" value="Đặt hàng" /></td>
				</tr>
			</table>
		</center>
		<input type="hidden" name="productID" value="<?php echo($page->objProduct->getProductID()) ?>"/>
	</form>
</div>

<script>
	$(document).ready(function() {
		$("#orderButton").click(function() {
			$("#divOrder").slideDown();
		})
		
		$("#cmdClose").click(function() {
			$("#divOrder").slideUp();
		})
	})
</script>

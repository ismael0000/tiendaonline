
<?php
	//si hay algo en el carrito
	if(count($_page->carts)>0)
	{
?>

	
	<div class="carritoCompra estiloCarrito">
	<!--	<div class="tituloCarrito"><?php echo 'Tienes un total de <b>' . count($_page->carts) . '</b> productos en su cesta de la compra';?></div>-->
			<div class="carritoCabeceras">
				<div class="carritoNombre">Nombre</div>
				<div class="carritoP">Precio</div>
				<div class="carritoCantidad">Cantidad</div>
				<div class="carritoPrecio">Subtotal</div>
			</div>
	<?php
	
	$total = 0;
	//para cada item vamos a pintar cosas (nombre, cantidad, etc)
	foreach($_page->carts as $item)
	{
	//foreach($_SESSION['carts'] as $item){

		if(isset($_POST['id'])){
			$id= $_POST['id'];
		}
			if(isset($_POST['more'])){
			$more= $_POST['more'];
		}
		if(isset($_POST['less'])){
			$less= $_POST['less'];
		}
		if(isset($_POST['quantity'])){
			$quantity= $_POST['quantity'];
		}
		
		//si le da al botón de sumar 
		if(isset($_POST['more']) && $id==$item->getId()){
			$quantity++;
			$item->setQuantity($quantity);	
		}
		//si el usuario introduce un valor en el input a mano
		if(isset($_POST['actualizar']) && $id==$item->getId()){
			$item->setQuantity($quantity);		
		}
				//si le da al botón de restar 
		if(isset($_POST['less']) && $id==$item->getId()){
			$quantity--;
			$item->setQuantity($quantity);	
		}
		
		$subTotal = $item->getPrice() * $item->getQuantity();
		$total += $subTotal;
		if($item->getQuantity()!=0){
			
		
	?>
	<div class="carritoDatos">
		<form name="formCarrito" method="POST" action="../viewer/viewerController.php?page=ViewOrder&event=view">
			<div class="idCarrito"><input type="text" name="id" value="<?php echo $item->getId();?>" hidden/></div>
			<div class="idCarrito"><input type="text" name="name" value="<?php echo $item->getName();?>" disabled/></div>
			<div class="idCarrito"><input type="text" name="price" value="<?php echo $item->getPrice();?>" disabled/></div>
			<div class="cantidadCarrito"><input type="text" name="quantity" value="<?php echo $item->getQuantity();?>"/></div>
			<div><input type="text" value="<?php echo $subTotal;?>" disabled/></div>
			<span class="sumaUnoAlCarro"><input value="+" name="more" type="submit" /></span>
			<span class="restaUnoAlCarro"><input value="-" name="less" type="submit"/></span>
			<span class="refrescaCantCarrito"><input value="refrescar" name="actualizar" type="submit"/></span>
		</form>
		
	</div>
<?php
	}
}
?>
	<div class="carritoTotal">
			<span>Precio total: </span>
			<div><?php echo $total . ' €';?></div>
	</div>
	<div class="listaCarrito">
		<ul>
			<li class="prime"><a href='../viewer/viewerController.php?page=list3&cat=1'>Continuar</a></li>
			<li class="sec"><a href='../viewer/viewerController.php?page=ViewOrder&event=delete'>Borrar</a></li>
			<li><a href='../viewer/viewerController.php?page=order&event=confirm' >Confirmar carrito</a></li>
			<!--<li><a href='../viewer/viewerController.php?page=Order&event=order' class="lastChildCarrito">Pagar</a></li>-->
		</ul> 
	</div>
	
</div>
<?php
}//cerrando la condicion de si hay algun cart
?>







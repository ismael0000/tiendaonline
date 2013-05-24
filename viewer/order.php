
<div class="registro3">
	<p class="fraseConf">
		Tu carrito ha sido guardado...	
	</p>
	<p>Para hacer le pago e iniciar el procedimiento de envío del pedido a su casa, dele al siguiente botón:</p>
	<span class="botPagar">
	<?php
	error_reporting(0);
		$article = 1;
		foreach($_page->carts as $item)
		{ 
			?>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart"><br>
		<input type="hidden" name="upload" value="1"><br>
		<input type="hidden" name="business" value="jkdcam83@yahoo.es">
		<input type="hidden" name="lc" value="ES">
		<input type="hidden" name="<?php echo "item_number_".$article;?>" value="<?php echo $article;?>">
		<input type="hidden" name="<?php echo "item_name_".$article;?>" value="<?php echo $item->getName();?>">
		<input type="hidden" name="<?php echo "quantity_".$article;?>" value="<?php echo $item->getQuantity();?>">
		<input type="hidden" name="<?php echo "amount_".$article;?>" value="<?php echo $item->getPrice();?>">	
		<input type="hidden" name="tax_cart" value="<?echo ($total * (0.21)) ?>">
		<?php
		$article++;
		}?>
		<input type="hidden" name="currency_code" value="EUR">
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_note" value="0">
		<br><br><br>
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
		<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onClick="enviar();">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<br><br><br>
		</form>
	</span>
</div>


<?php
$rows_per_page = 4; 
if(!isset($page1)) $page1 = 1;
$page_start = ( $page1 - 1 ) * $rows_per_page; 
$page_end = $page1 * $rows_per_page; 

$sql = "select * from product where categoryID = {$cat}";
$sql_query = Connection::excuteQuery($sql);

$number_of_page = ceil ( mysql_num_rows( $sql_query ) / $rows_per_page );
if($page_end > mysql_num_rows( $sql_query )) $page_end = mysql_num_rows( $sql_query );
if(mysql_num_rows( $sql_query ) == 0)
	echo "<div class='noProducto'>Estamos actualizando nuestro productos. Prueba más tarde. Gracias</div>";
if ( $number_of_page > 1 ) 
{ 
	$list_page = " <td> lista: &nbsp</td>"; 
	for ( $i = 1; $i <= $number_of_page; $i++ ) 
	{ 
		if ( $i == $page1 ) 
		{ 
			$list_page .= " <td>[<b>{$i}</b>]</td> "; 
		} 
		else 
		{ 
			$list_page .= "<td><a href='../viewer/viewerController.php?page=list3&page1={$i}&cat={$cat}'>{$i}</a></td>"; 
		}
	} 
}

$i = 0;
$count = 1;
$a = "left";
echo "<div class='cajas'>";
while ( $result = mysql_fetch_object ( $sql_query, 'productDTO' )) 
{ 
	if ( $i >= $page_start ) 
	{ 
		
		echo("<div class=\"product_{$a}\">
                                <div class='product_title'>{$result->getProductName()}</div>
                                    <div class='product_detail'>
                                        <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                            <tr>
                                                <td class='tdList3' align=\"center\" rowspan='2'>
													<a href=\"../images/product/{$result->getProductImage()}\"   class=\"zoomIt zoom\"  >
													<img src=\"../images/product/{$result->getProductImage()}\" width=\"150\" height=\"150\"  border='0' alt=\"{$result->getProductName()}\"  
													  />
													<div class='precioList3' id='preview_div'></div></a><br/>
													Precio : {$result->getProductPrice()} EUROS
												<a href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID={$result->getProductID()}&categoryID={$result->getCategoryID()}\">{$result->getProductName()}</a>
												</td>
                                                <td align='left'>
													{$result->getProductDetails2()}
                                                </td>
                                            </tr>
											<tr>
											<td>
												<a href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID={$result->getProductID()}&categoryID={$result->getCategoryID()}\"><img src=\"../images/detalles.png\" hspace=\"10\" align=\"right\" class='buy' title=\" ver detalles \"/></a>
											</td>
											</tr>
                                        </table>
                                    </div>
                                </div>");
                               
	}
	$i++;
	if($i== 1)
	{
		$a = "right";
	}
	if($i>1 & $i%2==0)
	{
		$a = "left2";
	}
	else if($i>1 & $i%2!=0)
	{
		$a = "right2";
	}
	if($i >= $page_end)
	{
		break;
		$count ++;
	}
}
 echo "</div>";

?>

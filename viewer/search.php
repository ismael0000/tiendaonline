<?php

// resultados por pagina !
$rows_per_page = 6;


// si no recibimos ningun parametro monstramos la primera de las paginas 

if(!isset($page1)) $page1 = 1;

// el primer elemento por mostrar $page_start se calcula con la siguiente formula por ejemplo 
// en la primera pagina $page1=1 sera 0, en la siguiente cuando $page1=2 sera 6  
// este sera el primer elemento a mostrar en el array de los productos que cumplen los requisito de busqueda

$page_start = ( $page1 - 1 ) * $rows_per_page; 

// el ultimo elemento por mostrar $page_end se calcula con la siguiente formula por ejemplo
// en la primera pagina $page1=1 sera 6, en la siguiente cuando $page1=2 sera 12  
// este sera el ultimo elemento a mostrar en el array de los productos que cumplen los requisito de busqueda

$page_end = $page1 * $rows_per_page; 

// Es la busqueda : buscamos cualquier producto que la palabra buscada es o forma parte de su nombre 
if(!isset($nd))
$nd = "";
$sql = "select * from product where productName like '%{$nd}%' ";

// Ejecutamos la sentencia
$sql_query = Connection::excuteQuery($sql);
// El numero de paginas es el numero de resultados encontrados dividido por el numero que enseño en cada paginas 
$number_of_page = ceil ( mysql_num_rows( $sql_query ) / $rows_per_page );

// Si hay mas paginas en nuestra paginacion que resultados cosa que es practicamente imposible (a menos que se produzca un error)
// (porque como minimo sacaremos un producto por pagina con $rows_per_page = 1 y $page_end =mysql_num_rows( $sql_query )

if($page_end > mysql_num_rows( $sql_query )) $page_end = mysql_num_rows( $sql_query );

// Si no encontramos ningun elemento que cumple los criterios de la busqueda sacamos un mensaje por pantalla que avisa de ello
if(mysql_num_rows( $sql_query ) == 0)
	echo "<div class='noProducto'>No se ha encontrado ningun ariculo relacionado con tu busqueda.</div>";
// sacamos un pequeño listado de las paginas de resultados 1,2,3,4
if ( $number_of_page > 1 ) 
{ 
	$list_page = " <td> Lista: &nbsp</td>"; 
	for ( $i = 1; $i <= $number_of_page; $i++ ) 
	{ 
		if ( $i == $page1 ) 
		{ 
			$list_page .= " <td>[<b>{$i}</b>]</td> "; 
		} 
		else // pinchando en el numero de pagina ira a la pagina de resultados correspondiente
		{ 
			$list_page .= "<td><a href='../viewer/viewerController.php?page=search&page1={$i}&nd1={$nd}'>{$i}</a></td>"; 
		}
	} 
}
?>
<?php
$i = 0;
$count = 1;
$a = "left";
while ( $result = mysql_fetch_object ( $sql_query, 'productDTO' )) 
{ 
	if ( $i >= $page_start ) 

	{ 
		// este a es quien decide el (css)  que coge cada producto y que determina su lugar de posicionamiento
	                   	echo("<div class=\"product_{$a}\"> 
                                <div class=\"product_title\">{$result->getProductName()}</div>
                                    <div class=\"product_detail\">
                                        <table width=\"100%\" height=\"80%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                            <tr>
                                                <td height=\"185\" width=\"50%\" align=\"center\">
													<a href=\"../images/product/{$result->getProductImage()}\" class=\"zoomIt zoom\" >
													<img src=\"../images/product/{$result->getProductImage()}\" width=\"100\" height=\"100\" alt=\"{$result->getProductName()}\" />
													<div style='display: none; position:absolute; z-index:10000;' id='preview_div'></div></a><br/>
													Precio : {$result->getProductPrice()} EUROS
													<a href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID={$result->getProductID()}&categoryID={$result->getCategoryID()}\">{$result->getProductName()}</a>
												</td>
                                                <td align ='left'>
													{$result->getProductDetails2()}
											
                                                </td>
                                            </tr>
											</tr>
											<tr>
											<td></td>
											<td>
													<a class= \" lupa \" href=\"../viewer/viewerController.php?page=detail1&page2=slide2&productID={$result->getProductID()}&categoryID={$result->getCategoryID()}\"><img src=\"../images/detalles.png\" hspace=\"10\" align=\"right\" title=\"ver detalles \"/></a>
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

?>	


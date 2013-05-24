<?php

//cerramos session 
session_destroy();
// y vamos a la primera categoria de ventas
echo "<meta http-equiv='refresh' content='1;url=\"../viewer/viewerController.php?page=list3&cat=1\"' />";


?>
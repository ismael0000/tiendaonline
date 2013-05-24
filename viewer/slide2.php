<!--
  jQuery library
-->
<script type="text/javascript" src="../jquery/jquery-1.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="../jquery/jquery2.js"></script>
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="../lib/tango/skin.css">

<style type="text/css">

/**
 * Overwrite for having a carousel with dynamic width.
 */
.jcarousel-skin-tango .jcarousel-container-horizontal {
	top : 0px;
	left : 0px;
    width: 88%;
}

.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width: 100%;
}

</style>

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        visible: 4
    });
});

</script>

<?php
	$arrOrders = $slide->arrProduct;
	echo count($arrOrders);
?>

<div id="wrap">

  <div class=" jcarousel-skin-tango">
  <div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal">
  <div disabled="true" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal">
  </div>
  <div style="overflow: hidden; position: relative;" class="jcarousel-clip jcarousel-clip-horizontal">
  <ul style="overflow: hidden; position: relative; top: 0px; left: 0px; margin: 0px; padding: 0px; width: 2000px;" id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
  <?php 
	for ($i = 0; $i < count($arrOrders); $i++) 
	{
	?>
		<li jcarouselindex="<?php echo $i?>" style="float: left; list-style: none outside none; width: 100px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal">
		<img src="resource/images/product/<?php echo $arrOrders[$i]->getProductImage()?>" alt="" width="75" height="75">
		</li>
	<?php 
	}
	?>
  </ul>
  </div>
  <div disabled="false" style="display: block;" class="jcarousel-next jcarousel-next-horizontal">
  </div>
  </div>
	</div>
</div>

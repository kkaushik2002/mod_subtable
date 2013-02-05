<?php
/**
 * @version		$Id: style_clean.php 786 2012-10-05 17:40:09 kaushik.shivendra@gmail.com
 * @package		Subtable v2.01
 * @author		3stechnosolutions http://www.3stechnosolutions.com
 * @copyright	Copyright (c) 2012 3stechnosolutions Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
 defined('_JEXEC') or die('Restricted access'); ?>
<?php 
$template = $params->get( 'Select_template' );
if($template == 'style3'){
$template = 'style3col';
}
$document = JFactory::getDocument();
$document->addStyleSheet( JURI::base().'modules/mod_subtable/assets/css/'.$template.'.css' );
      ?>
     
<?php 
$set1_col1 = $params->get( 'set1_col1' );$set1_col2 = $params->get( 'set1_col2' );$set1_col3 = $params->get( 'set1_col3' );$set1_col4 = $params->get( 'set1_col4' );$set1_col5 = $params->get( 'set1_col5' );$set1_col6 = $params->get( 'set1_col6' );$set1_col7 = $params->get( 'set1_col7' );$set1_col8 = $params->get( 'set1_col8' );$set1_col9 = $params->get( 'set1_col9' );$set1_col10 = $params->get( 'set1_col10' );
$set2_col1 = $params->get( 'set2_col1' );$set2_col2 = $params->get( 'set2_col2' );$set2_col3 = $params->get( 'set2_col3' );$set2_col4 = $params->get( 'set2_col4' );$set2_col5 = $params->get( 'set2_col5' );$set2_col6 = $params->get( 'set2_col6' );$set2_col7 = $params->get( 'set2_col7' );$set2_col8 = $params->get( 'set2_col8' );$set2_col9 = $params->get( 'set2_col9' );$set2_col10 = $params->get( 'set2_col10' );
$set3_col1 = $params->get( 'set3_col1' );$set3_col2 = $params->get( 'set3_col2' );$set3_col3 = $params->get( 'set3_col3' );$set3_col4 = $params->get( 'set3_col4' );$set3_col5 = $params->get( 'set3_col5' );$set3_col6 = $params->get( 'set3_col6' );$set3_col7 = $params->get( 'set3_col7' );$set3_col8 = $params->get( 'set3_col8' );$set3_col9 = $params->get( 'set3_col9' );$set3_col10 = $params->get( 'set3_col10' );
$set3_col1 = $params->get( 'set4_col1' );
$highlight1 = $params->get( 'hightlight1' );
$highlight2 = $params->get( 'hightlight2' );
$highlight3 = $params->get( 'hightlight3' );
$column_num = $params->get( 'col_num' );
?>
<?php $col1id = $params->get( 'Set1_id' );
if ($col1id == ''){
$col1id = 'col1';
}
else {$col1id = $col1id;}
$col2id = $params->get( 'Set2_id' );
if ($col2id == ''){
$col2id = 'col2';
}
else {$col2id = $col2id;}
$col3id = $params->get( 'Set3_id' );
if ($col3id == ''){
$col3id = 'col3';
}
else {$col3id = $col3id;}
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>




<?php if($params->get('currency_enable') == 1){ ?>

<div class="currency_container" >
<div class="toolpop heading_currency" title="The curreny Conversion is done live form the http://finance.yahoo.com.Please cross check before making any payment. Thanks">
Please check the price in Your currency:</div>
<div class="currency">
<script type="text/javascript">

var j = jQuery.noConflict();
j(function(){
j("#<?php echo $col1id; ?> ul.pricing li:nth-child(2n)").addClass('bg');
j("#<?php echo $col2id; ?> ul.pricing li:nth-child(2n)").addClass('bg');
j("#<?php echo $col3id; ?> ul.pricing li:nth-child(2n)").addClass('bg');

});

function showUser(str)
{

if (str=="USD")
  {
  document.getElementById("set1_price").innerHTML="<?php echo $params->get( 'Set1_Currency' ) ?><?php echo $params->get( 'Set1_price' ) ?>";
  document.getElementById("set2_price").innerHTML="<?php echo $params->get( 'Set2_Currency' ) ?><?php echo $params->get( 'Set2_price' ) ?>";
  document.getElementById("set3_price").innerHTML="<?php echo $params->get( 'Set3_Currency' ) ?><?php echo $params->get( 'Set3_price' ) ?>";

  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else if(str=="EUR" || str=="INR" || str=="GBP" || str=="CHF" || str=="CNY")
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var s = xmlhttp.responseText;
    customarray = s.split(",");
	//alert (customarray[0]);
    document.getElementById("set1_price").innerHTML = customarray[0];
	document.getElementById("set2_price").innerHTML = customarray[1];
	document.getElementById("set3_price").innerHTML = customarray[2];
	document.getElementById("currency_info").innerHTML = customarray[4];

    }
  }	
  var str1 = <?php echo $params->get( 'Set1_price' ) ?>;
  var str2 = <?php echo $params->get( 'Set2_price' ) ?>;
  var str3 = <?php echo $params->get( 'Set3_price' ) ?>;

xmlhttp.open("GET","<?php echo JURI::base();?>modules/mod_subtable/assets/convert.php?q="+str+"&amount1="+str1+"&amount2="+str2+"&amount3="+str3+"&amount4=0",true);
xmlhttp.send();
}
</script>
 <select id="selectcurency" onchange="showUser(this.value)">
         <?php 
	  	$currency_type= $params->get( 'currency_type' );
		$currency_group = explode(",", $currency_type);
	    ?>
		<?php foreach($currency_group as $key){?>
        <option class="cur_<?php echo $key?>" value="<?php echo $key?>" ><?php echo $key?></option><?php }?>
       
    </select>

</div>
</div>
<?php }else{ echo '<div style="width:100%;height:25px"></div>';}?>

<div class="plans">

<div class="row-fluid plans-list col<?php echo $column_num; ?>">

<div class="span4 pricehover first <?php if($highlight1 == 1){ echo "featured";}?>">
<div id="<?php echo $col1id; ?>">
<div class="price <?php if($highlight1 == 1){ echo "featuredprice"; }?>"><h4><?php echo $params->get( 'Set1_title' ) ?></h4></div>
<?php if($highlight1 == 1){?> 
<span class="plans-tags">Our Most Popular Plan!</span><?php }else {?><span class="plans-tags">&nbsp;</span><?php }?>
<h5 id="set1_price"><?php echo $params->get( 'Set1_Currency' ) ?><?php echo $params->get( 'Set1_price' ) ?></h5>
<div class="plans-tags">per <?php echo $params->get( 'Select_duration' ) ?></div>
<ul class="unstyled pricing ">
<?php if ($set1_col1 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style1' ).'"' ?> class="plans-highlight plans-uncheck firstItem"><?php echo $set1_col1;?></li>
<?php } ?>
<?php if ($set1_col2 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style2' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set1_col2;?>	</li>
<?php } ?>
                <?php if ($set1_col3 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style3' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set1_col3;?>	</li>
 <?php } ?>
				 <?php if ($set1_col4 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style4' ).'"' ?>><?php echo $set1_col4;?></li>
<?php } ?>
             <?php if ($set1_col5 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style5' ).'"' ?>><?php echo $set1_col5;?></li>
<?php } ?>
             <?php if ($set1_col6 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style6' ).'"' ?>><?php echo $set1_col6;?></li>
<?php } ?>
             <?php if ($set1_col7 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style7' ).'"' ?>><?php echo $set1_col7;?></li>
  <?php } ?>
             <?php if ($set1_col8 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style8' ).'"' ?>><?php echo $set1_col8;?></li>
   <?php } ?>
             <?php if ($set1_col9 != ''){?>
<li <?php echo 'style="'.$params->get( 'set1_style9' ).'"' ?>><?php echo $set1_col9;?></li>
<?php } ?>
             <?php if ($set1_col10 != ''){?>
<li class="last lastItem"><?php echo $set1_col10;?></li>
  <?php } ?>
</ul>
<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set1_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access now!</span>
		</div>
</div>
</div>

<?php if(($column_num==2) || ($column_num == 3) || ($column_num == 4)){?>

<div class="span4 pricehover <?php if($highlight2 == 1){ echo "featured";}?>">
 <div id="<?php echo $col2id; ?>">
<div class="price <?php if($highlight2 == 1){ echo "featuredprice"; }?>"><h4><?php echo $params->get( 'Set2_title' ) ?></h4></div>
<?php if($highlight2 == 1){?> 
<span class="plans-tags">Our Most Popular Plan!</span><?php }else {?><span class="plans-tags">&nbsp;</span><?php }?>
<h5 id="set2_price"><?php echo $params->get( 'Set2_Currency' ) ?><?php echo $params->get( 'Set2_price' ) ?></h5>
<div class="plans-tags">per <?php echo $params->get( 'set2_Select_duration' ) ?></div>
<ul class="unstyled pricing">
<?php if ($set2_col1 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style1' ).'"' ?> class="plans-highlight plans-uncheck firstItem"><?php echo $set2_col1;?></li>
<?php } ?>
<?php if ($set2_col2 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style2' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set2_col2;?>	</li>
<?php } ?>
                <?php if ($set2_col3 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style3' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set2_col3;?>	</li>
 <?php } ?>
				 <?php if ($set2_col4 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style4' ).'"' ?>><?php echo $set2_col4;?></li>
<?php } ?>
             <?php if ($set2_col5 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style5' ).'"' ?>><?php echo $set2_col5;?></li>
<?php } ?>
             <?php if ($set2_col6 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style6' ).'"' ?>><?php echo $set2_col6;?></li>
<?php } ?>
             <?php if ($set2_col7 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style7' ).'"' ?>><?php echo $set2_col7;?></li>
  <?php } ?>
             <?php if ($set2_col8 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style8' ).'"' ?>><?php echo $set2_col8;?></li>
   <?php } ?>
             <?php if ($set2_col9 != ''){?>
<li <?php echo 'style="'.$params->get( 'set2_style9' ).'"' ?>><?php echo $set2_col9;?></li>
<?php } ?>
             <?php if ($set2_col10 != ''){?>
<li class="last lastItem"><?php echo $set2_col10;?></li>
  <?php } ?>
</ul>

<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set2_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access now!</span>
		</div>
</div>
</div>
<?php }?>
<?php if(($column_num==3)){?>

<div class="span4 pricehover <?php if($highlight3 == 1){ echo "featured";}?>">
 <div id="<?php echo $col3id; ?>">
<div class="price <?php if($highlight3 == 1){ echo "featuredprice"; }?>"><h4><?php echo $params->get( 'Set3_title' ) ?></h4></div>
<?php if($highlight3 == 1){?> 
<span class="plans-tags">Our Most Popular Plan!</span><?php }else {?><span class="plans-tags">&nbsp;</span><?php }?>
<h5 id="set3_price"><?php echo $params->get( 'Set3_Currency' ) ?><?php echo $params->get( 'Set3_price' ) ?></h5>
<div class="plans-tags">per <?php echo $params->get( 'set3_Select_duration' ) ?></div>
<ul class="unstyled pricing">
<?php if ($set3_col1 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style1' ).'"' ?> class="plans-highlight plans-uncheck firstItem"><?php echo $set3_col1;?></li>
<?php } ?>
<?php if ($set3_col2 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style2' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set3_col2;?>	</li>
<?php } ?>
                <?php if ($set3_col3 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style3' ).'"' ?> class="plans-highlight plans-uncheck"><?php echo $set3_col3;?>	</li>
 <?php } ?>
				 <?php if ($set3_col4 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style4' ).'"' ?>><?php echo $set3_col4;?></li>
<?php } ?>
             <?php if ($set3_col5 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style5' ).'"' ?>><?php echo $set3_col5;?></li>
<?php } ?>
             <?php if ($set3_col6 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style6' ).'"' ?>><?php echo $set3_col6;?></li>
<?php } ?>
             <?php if ($set3_col7 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style7' ).'"' ?>><?php echo $set3_col7;?></li>
  <?php } ?>
             <?php if ($set3_col8 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style8' ).'"' ?>><?php echo $set3_col8;?></li>
   <?php } ?>
             <?php if ($set3_col9 != ''){?>
<li <?php echo 'style="'.$params->get( 'set3_style9' ).'"' ?>><?php echo $set3_col9;?></li>
<?php } ?>
             <?php if ($set3_col10 != ''){?>
<li class="last lastItem"><?php echo $set3_col10;?></li>
  <?php } ?>
</ul>

<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set3_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access now!</span>
		</div>
</div>
</div>

<?php } ?>


</div>
</div>

              
<div class="clear"></div>
<!--Please don't remove the below code Thanks-->
<div id="currency_info"><a href="http://3stechnosolutions.com" target="_blank"><img src="modules/mod_subtable/assets/images/3stechnosolutions.jpg" alt="3stechnosolutions"></a></div>
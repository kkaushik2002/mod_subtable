<?php
/**
 * @version		$Id: default.php 786 2012-10-05 17:40:09 kaushik.shivendra@gmail.com
 * @package		Subtable v2.01
 * @author		3stechnosolutions http://www.3stechnosolutions.com
 * @copyright	Copyright (c) 2012 3stechnosolutions Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
 defined('_JEXEC') or die('Restricted access'); ?>
<?php 
$template = $params->get( 'Select_template' );
if($template == 'Default' || $template == ''){
$template = 'style';
}
else {
$template = 'style2';}
$document = JFactory::getDocument();
$document->addStyleSheet( JURI::base().'/modules/mod_subtable/assets/css/'.$template.'.css' );
      ?>
     
<?php 
$set1_col1 = $params->get( 'set1_col1' );$set1_col2 = $params->get( 'set1_col2' );$set1_col3 = $params->get( 'set1_col3' );$set1_col4 = $params->get( 'set1_col4' );$set1_col5 = $params->get( 'set1_col5' );$set1_col6 = $params->get( 'set1_col6' );$set1_col7 = $params->get( 'set1_col7' );$set1_col8 = $params->get( 'set1_col8' );$set1_col9 = $params->get( 'set1_col9' );$set1_col10 = $params->get( 'set1_col10' );
$set2_col1 = $params->get( 'set2_col1' );$set2_col2 = $params->get( 'set2_col2' );$set2_col3 = $params->get( 'set2_col3' );$set2_col4 = $params->get( 'set2_col4' );$set2_col5 = $params->get( 'set2_col5' );$set2_col6 = $params->get( 'set2_col6' );$set2_col7 = $params->get( 'set2_col7' );$set2_col8 = $params->get( 'set2_col8' );$set2_col9 = $params->get( 'set2_col9' );$set2_col10 = $params->get( 'set2_col10' );
$set3_col1 = $params->get( 'set3_col1' );$set3_col2 = $params->get( 'set3_col2' );$set3_col3 = $params->get( 'set3_col3' );$set3_col4 = $params->get( 'set3_col4' );$set3_col5 = $params->get( 'set3_col5' );$set3_col6 = $params->get( 'set3_col6' );$set3_col7 = $params->get( 'set3_col7' );$set3_col8 = $params->get( 'set3_col8' );$set3_col9 = $params->get( 'set3_col9' );$set3_col10 = $params->get( 'set3_col10' );
$set3_col1 = $params->get( 'set4_col1' );$set4_col2 = $params->get( 'set4_col2' );$set4_col3 = $params->get( 'set4_col3' );$set4_col4 = $params->get( 'set4_col4' );$set4_col5 = $params->get( 'set4_col5' );$set4_col6 = $params->get( 'set4_col6' );$set4_col7 = $params->get( 'set4_col7' );$set4_col8 = $params->get( 'set4_col8' );$set4_col9 = $params->get( 'set4_col9' );$set4_col10 = $params->get( 'set4_col10' );
$highlight1 = $params->get( 'hightlight1' );
$highlight2 = $params->get( 'hightlight2' );
$highlight3 = $params->get( 'hightlight3' );
$highlight4 = $params->get( 'hightlight4' );
$column_num = $params->get( 'col_num' );
?>
<?php 

$row_class = $params->get( 'rowclass' );
if ($row_class == ''){
$row_class = 'subtable-col';
}
else{
$row_class = $row_class;
}
$col1id = $params->get( 'Set1_id' );
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
$col4id = $params->get( 'Set4_id' );
if ($col4id == ''){
$col4id = 'col4';
}
else {$col4id = $col4id;}?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>

$(function(){
$("#<?php echo $col1id; ?> .subtable-cell:nth-child(2n)").addClass('bg');
$("#<?php echo $col2id; ?> .subtable-cell:nth-child(2n)").addClass('bg');
$("#<?php echo $col3id; ?> .subtable-cell:nth-child(2n)").addClass('bg');
$("#<?php echo $col4id; ?> .subtable-cell:nth-child(2n)").addClass('bg');
});
window.addEvent('domready', function() {
	var tables = $$('.subtable<?php echo $params->get( 'classname' ) ?>'), current = {}, cls;
	var cols = tables.getElements('.<?php echo $row_class; ?>');
	
	tables.each(function(table, j) {
		var columns = cols[j];
		
		columns.each(function(col, i) {
			if (col.hasClass('highlight')) {current[j] = i; cls = 'highlight'; }
			else if (col.hasClass('ft-highlight')) {current[j] = i; cls = 'ft-highlight'; }
			col.addEvents({
				'mouseenter': function() { columns.removeClass(cls);this.addClass(cls); },
				'mouseleave': function() { this.removeClass(cls); }
			});
		});
		if ($chk(current[j])) {
			table.addEvent('mouseleave', function() {
				table.getElements('.<?php echo $row_class; ?>').removeClass(cls);
				table.getElements('.<?php echo $row_class; ?>')[current[j]].addClass(cls);
			});
		}
	});
});
</script>



<?php if($params->get('currency_enable') == 1){ ?>
<script>
window.addEvent('domready', function() {
$(".toolpop[title]").style_my_tooltips({ 
		tip_follows_cursor: "on", //on/off
		tip_delay_time: 200 //milliseconds
	}); 
	});
</script>
<div class="currency_container" >
<div class="toolpop heading_currency" title="The curreny Convertion is done live form the http://finance.yahoo.com.Please cross check before making any payment. Thanks">
Please check the price in Your currency:</div>
<div class="currency">
<script type="text/javascript">
function showUser(str)
{
if (str=="USD")
  {
  document.getElementById("set1_price").innerHTML="<?php echo $params->get( 'Set1_Currency' ) ?><?php echo $params->get( 'Set1_price' ) ?>";
  document.getElementById("set2_price").innerHTML="<?php echo $params->get( 'Set2_Currency' ) ?><?php echo $params->get( 'Set2_price' ) ?>";
  document.getElementById("set3_price").innerHTML="<?php echo $params->get( 'Set3_Currency' ) ?><?php echo $params->get( 'Set3_price' ) ?>";
  document.getElementById("set4_price").innerHTML="<?php echo $params->get( 'Set4_Currency' ) ?><?php echo $params->get( 'Set4_price' ) ?>";
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
	document.getElementById("set4_price").innerHTML = customarray[3];
	document.getElementById("currency_info").innerHTML = customarray[4];
    }
  }	
  var str1 = <?php echo $params->get( 'Set1_price' ) ?>;
  var str2 = <?php echo $params->get( 'Set2_price' ) ?>;
  var str3 = <?php echo $params->get( 'Set3_price' ) ?>;
  var str4 = <?php echo $params->get( 'Set4_price' ) ?>;
xmlhttp.open("GET","<?php echo JURI::base();?>/modules/mod_subtable/assets/convert.php?q="+str+"&amount1="+str1+"&amount2="+str2+"&amount3="+str3+"&amount4="+str4,true);
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
                <div class="subtable<?php echo $params->get( 'classname' ) ?> col<?php echo $column_num; ?>"><div class="subtable-border">
<div class="subtable-col <?php echo $row_class; ?> ft-col-first <?php if($highlight1 == 1){ echo "sthighlight";}else {echo "";}?>" id="subtable-col">
	<div class="subtable-col-border">
				<div class="subtable-head">
			<div style="" class="head-text">
								<div class="name"><?php echo $params->get( 'Set1_title' ) ?></div>
												<div style="" class="price">
					<span class="item1"><div id="set1_price"><?php echo $params->get( 'Set1_Currency' ) ?><?php echo $params->get( 'Set1_price' ) ?></div></span>
					<span class="item2">per <?php echo $params->get( 'Select_duration' ) ?></span>				</div>
							</div>
		</div>
        <div id="<?php echo $col1id; ?>">
						<div <?php echo 'style="'.$params->get( 'set1_style1' ).'"' ?> class="subtable-cell">
			<?php echo $params->get( 'Set1_col1' ) ?></div>
				<?php if ($set1_col2 != ''){?>
                <div <?php echo 'style="'.$params->get( 'set1_style2' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col2;?>		</div>
            	<?php } ?>
                <?php if ($set1_col3 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style3' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col3;?>	</div>
            <?php } ?>
				 <?php if ($set1_col4 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style4' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col4;?>	</div>
            <?php } ?>
             <?php if ($set1_col5 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style5' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col5;?>	</div>
            <?php } ?>
             <?php if ($set1_col6 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style6' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col6;?>	</div>
            <?php } ?>
             <?php if ($set1_col7 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style7' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col7;?>	</div>
            <?php } ?>
             <?php if ($set1_col8 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style8' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col8;?>	</div>
            <?php } ?>
             <?php if ($set1_col9 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style9' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col9;?>	</div>
            <?php } ?>
             <?php if ($set1_col10 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set1_style10' ).'"' ?> class="subtable-cell">
			<?php echo $set1_col10;?>	</div>
            <?php } ?>
								<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set1_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access!</span>
		</div>
			</div>
            </div>
</div>
<?php if(($column_num==2) || ($column_num == 3) || ($column_num == 4)){?>
<div class="subtable-col <?php echo $row_class; ?> <?php if($highlight2 == 1){ echo "sthighlight";}else {echo "";}?> ft-col-even">
	<div class="subtable-col-border">
				<div class="subtable-head">
			<div style="" class="head-text">
								<div class="name"><?php echo $params->get( 'Set2_title' ) ?></div>
												<div style="" class="price">
					<span class="item1"><div id="set2_price"><?php echo $params->get( 'Set2_Currency' ) ?><?php echo $params->get( 'Set2_price' ) ?></div></span>
					<span class="item2">per <?php echo $params->get( 'set2_Select_duration' ) ?></span>				</div>
							</div>
		</div>
         <div id="<?php echo $col2id; ?>">
						<div <?php echo 'style="'.$params->get( 'set2_style1' ).'"' ?> class="subtable-cell">
			<?php echo $params->get( 'Set2_col1' ) ?></div>
				<?php if ($set2_col2 != ''){?>
                <div <?php echo 'style="'.$params->get( 'set2_style2' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col2;?>		</div>
            	<?php } ?>
                <?php if ($set2_col3 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style3' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col3;?>	</div>
            <?php } ?>
				 <?php if ($set2_col4 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style4' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col4;?>	</div>
            <?php } ?>
             <?php if ($set2_col5 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style5' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col5;?>	</div>
            <?php } ?>
             <?php if ($set2_col6 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style6' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col6;?>	</div>
            <?php } ?>
             <?php if ($set2_col7 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style7' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col7;?>	</div>
            <?php } ?>
             <?php if ($set2_col8 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style8' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col8;?>	</div>
            <?php } ?>
             <?php if ($set2_col9 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style9' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col9;?>	</div>
            <?php } ?>
             <?php if ($set2_col10 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set2_style10' ).'"' ?> class="subtable-cell">
			<?php echo $set2_col10;?>	</div>
            <?php } ?>
								<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set2_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access!</span>
		</div>
			</div>
</div>
</div>
<?php }?>
<?php if(($column_num==3) || ($column_num == 4)){?>
<div class="subtable-col <?php echo $row_class; ?> <?php if($highlight3 == 1){ echo "sthighlight";}else {echo "";}if($column_num == 3){echo "ft-col-last";}?>">
	<div class="subtable-col-border">
					<div class="subtable-head">
			<div style="" class="head-text">
								<div class="name"><?php echo $params->get( 'Set3_title' ) ?></div>
												<div style="" class="price">
					<span class="item1"><div id="set3_price"><?php echo $params->get( 'Set3_Currency' ) ?><?php echo $params->get( 'Set3_price' ) ?></div></span>
					<span class="item2">per <?php echo $params->get( 'set3_Select_duration' ) ?></span>				</div>
							</div>
		</div>
					<div id="<?php echo $col3id; ?>">
						<div <?php echo 'style="'.$params->get( 'set3_style1' ).'"' ?> class="subtable-cell">
			<?php echo $params->get( 'Set3_col1' ) ?></div>
				<?php if ($set3_col3 != ''){?>
                <div <?php echo 'style="'.$params->get( 'set3_style2' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col2;?>		</div>
            	<?php } ?>
                <?php if ($set3_col3 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style3' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col3;?>	</div>
            <?php } ?>
				 <?php if ($set3_col4 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style4' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col4;?>	</div>
            <?php } ?>
             <?php if ($set3_col5 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style5' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col5;?>	</div>
            <?php } ?>
             <?php if ($set3_col6 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style6' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col6;?>	</div>
            <?php } ?>
             <?php if ($set3_col7 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style7' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col7;?>	</div>
            <?php } ?>
             <?php if ($set3_col8 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style8' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col8;?>	</div>
            <?php } ?>
             <?php if ($set3_col9 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style9' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col9;?>	</div>
            <?php } ?>
             <?php if ($set3_col10 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set3_style10' ).'"' ?> class="subtable-cell">
			<?php echo $set3_col10;?>	</div>
            <?php } ?>
								<div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set3_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access!</span>
		</div>
			</div>
</div>
</div>
<?php } ?>
<?php if($column_num == 4){ ?>
<div class="subtable-col <?php echo $row_class; ?> ft-col-even ft-col-last <?php if($highlight4 == 1){ echo "sthighlight";}else {echo "";}?>">
	<div class="subtable-col-border">
						<div class="subtable-head">
			<div style="" class="head-text">
								<div class="name"><?php echo $params->get( 'Set4_title' ) ?></div>
												<div style="" class="price">
					<span class="item1"><div id="set4_price"><?php echo $params->get( 'Set4_Currency' ) ?><?php echo $params->get( 'Set4_price' ) ?></div></span>
					<span class="item2">per <?php echo $params->get( 'set4_Select_duration' ) ?></span>				</div>
							</div>
		</div>
							<div id="<?php echo $col4id; ?>">
						<div <?php echo 'style="'.$params->get( 'set4_style1' ).'"' ?> class="subtable-cell">
			<?php echo $params->get( 'Set4_col1' ) ?></div>
				<?php if ($set4_col2 != ''){?>
                <div <?php echo 'style="'.$params->get( 'set4_style2' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col2;?>		</div>
            	<?php } ?>
                <?php if ($set4_col3 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style3' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col3;?>	</div>
            <?php } ?>
				 <?php if ($set4_col4 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style4' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col4;?>	</div>
            <?php } ?>
             <?php if ($set4_col5 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style5' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col5;?>	</div>
            <?php } ?>
             <?php if ($set4_col6 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style6' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col6;?>	</div>
            <?php } ?>
             <?php if ($set4_col7 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style7' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col7;?>	</div>
            <?php } ?>
             <?php if ($set4_col8 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style8' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col8;?>	</div>
            <?php } ?>
             <?php if ($set4_col9 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style9' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col9;?>	</div>
            <?php } ?>
             <?php if ($set4_col10 != ''){?>
				<div <?php echo 'style="'.$params->get( 'set4_style10' ).'"' ?> class="subtable-cell">
			<?php echo $set4_col10;?>	</div>
            <?php } ?>
								<?php if ($params->get( 'set4_signup_link' ) != ''){?><div style="" class="subtable-cell bottom button4">
			<a class="readon" href="<?php echo $params->get( 'set4_signup_link' ) ?>"><span>Sign Up Now</span></a> <span class="itemtext">Sign Up to get access!</span>
		</div> <?php }?>
			</div>
</div>
</div>
<?php }?>
<div class="clear"></div>
</div>
</div>
<!--Please don't remove the below code Thanks-->
<div id="currency_info"><a href="http://3stechnosolutions.com"  target="_blank" rel="following"><img src="modules/mod_subtable/assets/images/3stechnosolutions.jpg" alt="3stechnosolutions"></a></div>
<?php
/**
 * @version		$Id: convert.php 786 2012-10-05 17:40:09 kaushik.shivendra@gmail.com
 * @package		Subtable v2.01
 * @author		3stechnosolutions http://www.3stechnosolutions.com
 * @copyright	Copyright (c) 2012 3stechnosolutions Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
$link='<a href="http://3stechnosolutions.com" target="_blank"><img src="modules/mod_subtable/assets/images/3stechnosolutions.jpg" alt="3stechnosolutions"></a>';
?>
<?php 
$amountcol1 = $_REQUEST["amount1"];
$amountcol2 = $_REQUEST["amount2"];
$amountcol3 = $_REQUEST["amount3"];
$amountcol4 = $_REQUEST["amount4"];
$from   = 'USD'; /*change it to your required currencies */
$to     = $_GET["q"];
$url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
$handle = @fopen($url, 'r');

if ($handle) {
    $result = fgets($handle, 4096);
    fclose($handle);
}
$allData = explode(',',$result); /* Get all the contents to an array */
$dollarValue1 = $allData[1];
$dollarValue = round($dollarValue1,PHP_ROUND_HALF_UP);
//echo $dollarValue;
//$rateinEUR = "&euro;".$amountcol1*$dollarValue.","."&euro;".$amountcol2*$dollarValue.",". "&euro;".$amountcol3*$dollarValue.","."&euro;".$amountcol4*$dollarValue;
switch ($to)
{
    case ("EUR"):
	$rateinEUR = "&euro;".$amountcol1*$dollarValue.","."&euro;".$amountcol2*$dollarValue.",". "&euro;".$amountcol3*$dollarValue.","."&euro;".$amountcol4*$dollarValue.",".$link;
	echo $rateinEUR;
	break;
    case ("INR"):
       $rateinINR = "<span class="."rupee".">`</span>".$amountcol1*$dollarValue.","."<span class="."rupee".">`</span>".$amountcol2*$dollarValue.",". "<span class="."rupee".">`</span>".$amountcol3*$dollarValue.","."<span class="."rupee".">`</span>".$amountcol4*$dollarValue.",".$link;
	echo $rateinINR;
    break;
	case ("GBP"):
	$rateinGBP = "&pound;".$amountcol1*$dollarValue.","."&pound;".$amountcol2*$dollarValue.",". "&pound;".$amountcol3*$dollarValue.","."&pound;".$amountcol4*$dollarValue.",".$link;
	echo $rateinGBP;
	break;
	case ("CNY"):
	$rateinCNY = "&yen;".$amountcol1*$dollarValue.","."&yen;".$amountcol2*$dollarValue.",". "&yen;".$amountcol3*$dollarValue.","."&yen;".$amountcol4*$dollarValue.",".$link;
	echo $rateinCNY;
	break;
	case ("CHF"):
	$rateinCHF = "&#8355;".$amountcol1*$dollarValue.","."&#8355;".$amountcol2*$dollarValue.",". "&#8355;".$amountcol3*$dollarValue.","."&#8355;".$amountcol4*$dollarValue.",".$link;
	echo $rateinCHF;
	break;
	default:
	$rateinDEF = $to.$amountcol1*$dollarValue.",".$to.$amountcol2*$dollarValue.",".$to.$amountcol3*$dollarValue.",".$to.$amountcol4*$dollarValue.",".$link;
	echo $rateinDEF;
	
}


?>
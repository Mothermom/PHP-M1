<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nam am lich</title>
</head>


<body>
<?php 
	$duong_lich='';
	$am_lich='';
	$can='';
	$chi='';
	if(isset($_POST['duong_lich'])){
	$duong_lich=$_POST['duong_lich'];
	// tinh Can
		if(($duong_lich % 10) == 4 ) {
			$can="Giáp"; }
		else if (($duong_lich % 10) == 5 ) {
			$can="Ất"; }
		else if (($duong_lich % 10) == 6 ) {
			$can="Bính"; }
		else if (($duong_lich % 10) == 7 ) {
			$can="Đinh"; }
		else if (($duong_lich % 10) == 8 ) {
			$can="Mậu"; }
		else if (($duong_lich % 10) == 9 ) {
			$can="Kỷ"; }
		else if (($duong_lich % 10) == 0 ) {
			$can="Canh"; }
		else if (($duong_lich % 10) == 1 ) {
			$can="Tân"; }
		else if (($duong_lich % 10) == 2 ) {
			$can="Nhâm"; }
		else if (($duong_lich % 10) == 3 ) {
			$can="Quí"; }
	// tinh Chi	
		if(($duong_lich % 12) == 4 ) {
			$chi=" Tí"; }
		else if (($duong_lich % 12) == 5 ) {
			$chi=" Sửu"; }
		else if (($duong_lich % 12) == 6 ) {
			$chi=" Dần"; }
		else if (($duong_lich % 12) == 7 ) {
			$chi=" Mẹo"; }
		else if (($duong_lich % 12) == 8 ) {
			$chi=" Thìn"; }
		else if (($duong_lich % 12) == 9 ) {
			$chi=" Tỵ"; }
		else if (($duong_lich % 12) == 10 ) {
			$chi=" Ngọ"; }
		else if (($duong_lich % 12) == 11 ) {
			$chi=" Mùi"; }
		else if (($duong_lich % 12) == 0 ) {
			$chi=" Thân"; }
		else if (($duong_lich % 12) == 1 ) {
			$chi=" Dậu"; }	
		else if (($duong_lich % 12) == 2 ) {
			$chi=" Tuất"; }
		else if (($duong_lich % 12) == 3 ) {
			$chi=" Hợi"; }				
	}


?>
<form method="post" action="" >
<table align="center" width="500px" style="background-color:#6FF; border:solid #FC0 thin" cellpadding="10px"> 
	<tr> 
    	<td colspan="3" align = "center" style="font-size:24px" > 
        <b> TÍNH NĂM ÂM LỊCH</b>
        </td>
    </tr>
    <tr> 
    	<td align="center" style="width:20px"> Năm dương lịch </td>
        <td align="center" style="width:100px">  </td>
        <td align="center" style="width:20px"> Năm âm lịch </td>

    </tr>
    <tr> 
    	<td> <input type = "number" name ="duong_lich" style="padding: 15px; width: 200px;height:15px" value="<?php echo $duong_lich ?>"/>
        <td> <input type = "submit" value = ">>>" name="Tinh" style="padding:3px; width:100px; height:30px; font-size: 18px" />
        <td> <input type = "text" name ="am_lich" style="padding: 15px; width: 200px;height:15px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $can.$chi  ?>"/>
    </tr>
        	
</table>

</form>
</body>
</html>
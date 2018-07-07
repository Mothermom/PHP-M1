<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tinh dien tich va chu vi hinh tron</title>
</head>

<body>

<?php 
	$ban_kinh='';
	$dien_tich='';
	$chu_vi='';
	define("PI",3.14);
	if (isset($_POST['ban_kinh'])){
	$ban_kinh=$_POST['ban_kinh'];
	$dien_tich=PI*($ban_kinh)*($ban_kinh);
	$chu_vi=PI*($ban_kinh)*2;
	}
?>

<form method="post" action="">
<table align="center" width="500px" style="background-color:#666; border:solid #FC0 thin" cellpadding="10px"> 
	<tr> 
    	<td colspan="2" align = "center" style="font-size:24px" > 
        <b> TÍNH DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</b>
        </td>
    </tr>
    <tr> 
    	<td> Bán kính </td>
        <td> <input type = "number" name ="ban_kinh" style="padding: 10px; width: 300px" 
        	 value="<?php echo $ban_kinh ?>"/>
    </tr>
        <tr> 
    	<td> Diện tích </td>
        <td> <input type = "number" name ="dien_tich" style="padding: 10px; width: 300px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $dien_tich ?>"/>
    </tr>
        <tr> 
    	<td> Chu vi </td>
        <td> <input type = "number" name ="chu_vi" style="padding: 10px; width: 300px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $chu_vi ?>"/>
    </tr>
    <tr>
    
    	<td colspan="2" align= "center"> <input type = "submit" value = "Tính" name="Calculate" style="padding:5px; width:150px; height:35px" />
        </td>
        <td> </td>
    </tr>
	
</table>
</form>


</body>
</html>
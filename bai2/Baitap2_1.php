<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dinh mau chu, mau nen</title>
</head>

<body>
<?php 
	$Noi_dung='';
	$Mau_nen='';
	$Mau_chu='';
	if(isset($_POST['Noi_dung'])) {
	$Noi_dung=$_POST['Noi_dung'];
	$Mau_nen=$_POST['Mau_nen'];
	$Mau_chu=$_POST['Mau_chu'];
	}
?>
 <form method="post" action="">
<table align="center" width="600px" style="background-color:#666; border:solid #666 thin" cellpadding="7px"> 
	<tr> 
    	<td colspan="2" align = "center" style="font-size:24px" > 
        <b> ĐỊNH MÀU CHỮ, MÀU NỀN</b>
        </td>
    </tr>
    <tr> 
    	<td> Nội dung </td>
        <td> <input type = "text" name ="Noi_dung" style="padding: 10px; width: 400px" value="<?php echo $Noi_dung ?>"/>
    </tr>
        <tr> 
    	<td> Màu nền </td>
        <td> <input type = "text" name ="Mau_nen" style="padding: 10px; width: 240px" value="<?php echo $Mau_nen ?>"/>
    </tr>
        <tr> 
    	<td> Màu chữ </td>
        <td> <input type = "text" name ="Mau_chu" style="padding: 10px; width: 240px" value="<?php echo $Mau_chu ?>"/>
    </tr>
    <tr>
    
    	<td colspan="2" align= "center"> <input type = "submit" value = "Xem kết quả" name="xem_ket_qua" style="padding:5px; width:150px; height:35px" />
        </td>
        <td> </td>
    </tr>
	
</table>
</form>

<table align="center" width="600px" style="background-color:#666; border:solid #666 thin" cellpadding="7px"> 
    <tr> 
    	<td colspan="2" style="color:#FFF ; background-color:#F00" align="center"><i> Kết quả sau khi nhấn <b> Xem kết quả</b></i></td>
	</tr>
    
   <tr>
   		<td  style="color:#<?php echo $Mau_chu ?> ; background-color:#<?php echo $Mau_nen ?> ; height:30px" align="center" width="600px">
			<?php echo $Noi_dung ?>
        </td>
    </tr>
   </tr>
</table>



</body>
</html>
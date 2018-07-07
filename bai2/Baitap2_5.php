<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bang cuu chuong</title>
</head>

<body>
<?php 
	$cuu_chuong='';
	$ketqua='';
	if(isset($_POST['cuu_chuong'])){
	$cuu_chuong=$_POST['cuu_chuong'];
	}
?>

<form method="post" action="" >
<table align="center" width="500px" style="background-color:#6FF; border:solid #FC0 thin" cellpadding="10px"> 
	<tr> 
    	<td colspan="4" align = "center" style="font-size:24px" > 
        <b> BẢNG CỬU CHƯƠNG</b>
        </td>
    </tr>
    <tr> 
    	<td style="width:100px"> Cửu chương </td>
        <td> <input type = "number" name ="cuu_chuong" style="padding: 5px; width: 150px" value="<?php echo $cuu_chuong ?>"/>
        <td> <input type = "submit" value = "Thực hiện" name="Tinh" style=" width:100px; height:30px" />
        <td style="width:50px"> </td>
    </tr>
            	
</table>
</form>
<table align="center" width="500px" style="background-color:#6FF; border:solid #FC0 thin" cellpadding="10px"> 
	<tr> 
    	<td colspan="4" align = "center" style="font-size:24px" > 
        <b> KẾT QUẢ</b>
        </td>
    </tr>
    <tr> <td align="center"><?php if(empty($_POST['cuu_chuong'])) { "";}
	else 
		for($i=1; $i<=10; $i++)
			{
				echo "$cuu_chuong x $i =" . $cuu_chuong*$i ."<br />";
			}

	
?>	 </td></tr>	
</table>
</body>
</html>

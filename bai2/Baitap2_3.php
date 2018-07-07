<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ket qua hoc tap</title>
</head>

<body>

<?php 
	$HK1='';
	$HK2='';
	$Diem_tb='';
	$Ket_qua='';
	$Xep_loai='';
	if(isset($_POST['HK1'])){
	$HK1=$_POST['HK1'];
	$HK2=$_POST['HK2'];
	$Diem_tb=($HK1+($HK2*2))/3;
	//tinh ket qua
	if($Diem_tb>=5) 
		$Ket_qua="Lên lớp";
	else 
		$Ket_qua= "Ở lại";
	//tinh xep loai
	if($Diem_tb>=8) 
		$Xep_loai="Giỏi";
	else if($Diem_tb>=6.5) 
		$Xep_loai= "Khá"; 
	else if($Diem_tb>=5) 
		$Xep_loai= "Trung Bình"; 
	else
		$Xep_loai= "Yếu"; 	
	}
?>
<form method="post" action="" >
<table align="center" width="500px" style="background-color:#666; border:solid #FC0 thin" cellpadding="5px"> 
	<tr> 
    	<td colspan="2" align = "center" style="font-size:24px" > 
        <b> KẾT QUẢ HỌC TẬP</b>
        </td>
    </tr>
    <tr> 
    	<td> Điểm HK1 </td>
        <td> <input type = "text" name ="HK1" style="padding: 7px; width: 300px" value="<?php echo $HK1  ?>"/>
    </tr>
    <tr> 
    	<td> Điểm HK2 </td>
        <td> <input type = "text" name ="HK2" style="padding: 7px; width: 300px" value="<?php echo $HK2  ?>"/>
    </tr>
    <tr> 
    	<td> Điểm trung bình </td>
        <td> <input type = "text" name ="Diem_tb" style="padding: 7px; width: 300px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $Diem_tb  ?>"/>
    </tr>
	<tr> 
    	<td> Kết quả </td>
        <td> <input type = "text" name ="Ket_qua" style="padding: 7px; width: 300px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $Ket_qua   ?>"/>
    </tr>
    <tr> 
    	<td> Xếp loại học lực </td>
        <td> <input type = "text" name ="Xep_loai" style="padding: 7px; width: 300px; background-color:#EAEAEA" readonly="readonly" value="<?php echo $Xep_loai  ?>"/>
    </tr>
    <tr>
    	<td colspan="2" align= "center"> <input type = "submit" value = "Xem kết quả" name="Xem" style="padding:5px; width:150px; height:35px" />
        </td>
        <td> </td>
    </tr>
	
</table>
</form>
</body>
</html>
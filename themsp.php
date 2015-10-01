<!DOCTYPE html>
<html>
	<head>
		<title>thêm sản phẩm</title>
	</head>
	<body>
	<?php
		$mysql=mysqli_connect('vps.ngocben.com','ngocben','haithinh','webbanhang') ;
		
		if (sizeof($_POST) > 0){
		$sql ="INSERT INTO sanpham (masp,tensp,nhomhang,gia,nhasx,nhacc,soluong)
		VALUES ('".$_POST["txt_masp"]."','".$_POST["txt_tensp"]."','".$_POST["txt_nhomhang"]."','".$_POST["txt_gia"]."','".$_POST["txt_nhasx"]."','".$_POST["txt_nhacc"]."','".$_POST["txt_soluong"]."')";

		mysqli_query($mysql,$sql);
	}
	 ?>
		<form name="thêm sản phẩm" action="themsp.php" method="post">
		<label>Tên Sản Phẩm</label><br>
			<input name="txt_tensp" type="text" placeholder="nhập tên sản phẩm"  /> <br>
		<label>Mã</label><br>
			<input name="txt_masp" type="text" placeholder="mã có thể nhập hoặc tự sinh" /><br>	
		<label>số lượng</label><br>
			<input name="txt_soluong" type="text" placeholder="nhập vào số lượng" /><br>	
		<label>gía </label> <br>
			<input name="txt_gia" type="text" /><br>
		<label>Nhóm Hàng</label><br>
			<input name="txt_nhomhang"  type="text" /><br>
		<label>nhà cung cấp</label><br>
			<?php
				 echo "<select name=\"txt_nhacc\">";

			    
			    while ($row = mysqli_fetch_assoc($result)) {

			        echo "<option values=\"". $row['id'] ."\">" . $row['tennhacc'] . "</option>"; 
			        
			    }
			    echo "</select>";
			
			 ?>
			 	<br>
		<label>nhà sản xuất</label><br>
			<input name="txt_nhasx"  type="text" /><br>	
		<label>upload</label>
		    <input name="file" type="file" /><br>
			<input name="thêm" type="submit" />    


		</form>
	</body>
</html>
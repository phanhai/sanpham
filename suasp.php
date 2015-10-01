<!DOCTYPE html>
<html>
<head>
	<title>sửa sản phẩm</title>
</head>
<body>
	<?php
		$mysql = mysqli_connect('vps.ngocben.com','ngocben','haithinh','webbanhang');
		$sql = "SELECT * FROM sanpham WHERE id='".$_GET['id']."'";
		$result = mysqli_query($mysql,$sql);
		
		
		if ( mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);

			if (sizeof($_POST) >0) {
				// code
				$sql="UPDATE sanpham SET tensp='".$_POST['txt_tensp']."', masp='".$_POST['txt_masp']."', soluong='".$_POST['txt_soluong']."', nhomhang='".$_POST['txt_nhomhang']."', nhacc='".$_POST['txt_nhacc']."', nhasx='".$_POST['txt_nhasx']."' WHERE id='".$_GET['id']."'";
				mysqli_query($mysql,$sql);	
			}
	?>
	<form name="suasp" action="" method="post">
		<label>Tên Sản Phẩm</label><br>
			<input name="txt_tensp" type="text" placeholder="nhập tên sản phẩm" value="<?php echo $row['tensp'] ;?>" /> <br>
		<label>Mã</label><br>
			<input name="txt_masp" type="text" placeholder="mã có thể nhập hoặc tự sinh" value="<?php echo $row['masp'] ;?>" /><br>	
		<label>số lượng</label><br>
			<input name="txt_soluong" type="text" placeholder="nhập vào số lượng" value="<?php echo $row['soluong'] ;?>" /><br>	
		<label>gía </label> <br>
			<input name="txt_gia" type="text"  value="<?php  echo $row['gia']; ?>" /><br>
		<label>Nhóm Hàng</label><br>
			<input name="txt_nhomhang"  type="text"  value="<?php  echo $row['nhomhang']; ?>" /><br>
		<label>nhà cung cấp</label><br>
			<input name="txt_nhacc" type="text"  value="<?php echo $row['nhacc'] ;?>" /><br>
		<label>nhà sản xuất</label><br>
			<input name="txt_nhasx"  type="text"  value="<?php echo $row['nhasx']; ?>" /><br>	
		<label>upload</label>
		    <input name="file" type="file" /><br>
			<input name="thêm" type="submit" />
	
	</form>
	<?php
			}
 	?>
</body>
</html>
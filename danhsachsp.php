<?php
	$mysql= mysqli_connect('vps.ngocben.com','ngocben','haithinh','webbanhang');
	$sql="SELECT * FROM sanpham";  
	$result=mysqli_query($mysql,$sql);
	echo "<a href= \"themsp.php\">themsp</a>" ;
		if (mysqli_num_rows($result)>0) {
				
			echo "<table><tr><th>mã</th><th>tên sản phẩm</th><th>nhóm hàng</th><th>gía</th><th>nhà sản xuất</th><th>nhà cung cấp</th><th>số lượng</th><th>sửa</th><th>xóa</th></tr>";
				while ($rows=mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$rows['masp']."</td>";
					echo "<td>".$rows['tensp']."</td>";
					echo "<td>".$rows['nhomhang']."</td>";
					echo "<td>".$rows['gia']."</td>";
					echo "<td>".$rows['nhasx']."</td>";
					echo "<td>".$rows['nhacc']."</td>";
					echo "<td>".$rows['soluong']."</td>";
					echo "<td><a href=\"suasp.php?id=".$rows["id"]."\"> sửa</a></td>";
					echo "<td><a href=\"xoasp.php?id=" .$rows["id"]."\">xóa</a></td>";
					echo "<tr>";

					# code...
				}
				echo "</table>";
		}

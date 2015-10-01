<?php 
	$mysql= mysqli_connect('vps.ngocben.com','ngocben','haithinh','webbanhang');
	$sql= "DELETE FROM  sanpham WHERE id='".$_GET['id']."'";
	mysqli_query($mysql,$sql);
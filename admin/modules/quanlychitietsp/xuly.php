<?php
	include('../config.php');
	$id=$_GET['id'];
	
	$tensp=$_POST['tensp'];
	$mota=$_POST['motasp'];
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$thutu=$_POST['thutu'];
	
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	
	if(isset($_POST['them'])){
		//them
		$sql="insert into chitietsp(tensp,mota,gia,id_loaisp,thutu,hinhanh) 
			values('$tensp','$mota','$gia','$loaisp','$thutu','$hinhanh')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		} else if(isset($_POST['sua'])){//sua
			if($hinhanh!=0){
				$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' where id_sp='$id'";
			}else {
				$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp' where id_sp='$id'";
			}
			mysql_query($sql);
			header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
			
			}else{//xoa
				$sql="delete from chitietsp where id_sp='$id' ";
				mysql_query($sql);
				header('location:../../index.php?quanly=quanlychitietsp&ac=them');

				}
	
?>
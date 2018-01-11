<?php
	$sql=" select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_loaisp desc";
	$run=mysql_query($sql);
  $dong=mysql_fetch_array($run);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>ten sp</td>
    <td>hinh anh</td>
    <td>gia ca</td>
    <td>thu tu</td>
    <td>loai sp</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php 
  $i=0;
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i ;?></td>
    <td><?php echo $dong['tensp'];?></td>
    <td><img src="modules/quantrichitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
    <td><?php echo $dong['gia'];?></td>
    <td><?php echo $dong['thutu'];?></td>
    <td><?php echo $dong['tenloaisp'];?></td>
    <td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'];?>">Sửa</a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'];?>">Xóa</a></td> 
	<?php
	$i++;
	}
 ?>
</table>

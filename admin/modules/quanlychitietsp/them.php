<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-date">
<table width="200" border="1">
  <tr>
    <td colspan="2">them chi tiet sp</td>
  
  </tr>
  <tr>
    <td>ten sp</td>
    <td><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>gia sp</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>hinh anh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>mo ta sp</td>
    <td><input type="text" name="motasp"></td>
  </tr>
  <?php $sql="select * from loaisp";
  		$run=mysql_query($sql);
  ?>
  
  <tr>
    <td>loai sp</td>
    <td><select name="loaisp">
    <?php 
		while($dong=mysql_fetch_array($run)){
	?>
    		<option value="<?php echo $dong['id_loaisp']?>"><?php echo $dong['tenloaisp']?></option>
            <?php 
			 }
			  ?>
    	</select>
     </td>
    <td><input type="text" name="tenloaisp"></td>
  </tr>
  <tr>
    <td>thu tu</td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2"><button name="them" value="them">them</button></td>
  </tr>
</table>
</form>
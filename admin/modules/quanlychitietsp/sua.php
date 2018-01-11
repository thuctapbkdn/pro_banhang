<?php
  $sql="select * from chitietsp where id_sp=$_GET[id]";
  $run=mysql_query($sql);
   $dong=mysql_fetch_array($run);
?>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-date">
<table width="200" border="1">
  <tr>
    <td colspan="2">sua chi tiet sp</td>
  
  </tr>
  <tr>
    <td>ten sp</td>
    <td><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
  </tr>
  <tr>
    <td>gia sp</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia']?>"></td>
  </tr>
  <tr>
    <td>hinh anh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
  </tr>
  <tr>
    <td>mo ta sp</td>
    <td><input type="text" name="motasp" value="<?php echo $dong['mota']?>"></td>
  </tr>
  <?php $sql_loaisp="select * from loaisp";
  		$run_loaisp=mysql_query($sql_loaisp);
  ?>
  
  <tr>
    <td>loai sp</td>
    <td><select name="loaisp">
    <?php 
		while($dong_loaisp=mysql_fetch_array($run_loaisp)){
      if($dong['is_loaisp']==$dong_loaisp['id_loaisp']){
	?>
    		<option selected="selected"> value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option>
            <?php 
			 }else {
			  ?>
        <option value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option>
        <?php
      }
    }

        ?>
    	</select>
     </td>
    <td><input type="text" name="tenloaisp"></td>
  </tr>
  <tr>
    <td>thu tu</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
  </tr>
  <tr>
    <td colspan="2"><button name="sua" value="sua">sua</button></td>
  </tr>
</table>
</form>
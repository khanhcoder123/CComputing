
<?php
	$sql ="select * from loai";

      $result = mysqli_query($conn,$sql);
?>	
        	<p class="loai">Loại</p>
        	<ul>
            <?php 
				while($dong=mysql_query($result)){
			?>
            	<li><a href="index.php?xem=loai&id=<?php echo $dong['loai_id']?>"><?php echo $dong['tenloai'] ?></a></li>
   <?php
				}
   ?>                   
          </ul>
            <?php
          $sgl2="select * from hieu";
	$run_hieu=mysql_query($sgl2);
           	?>
			<p class="loai">Hiệu</p>
        	<ul>
            <?php
			while($dong=mysql_fetch_array($run_hieu)){
			?>
            	<li><a href="index.php?xem=hieu&id=<?php echo $dong['hieu_id']?>"><?php echo $dong['tenhieu'] ?></a></li>
               
            <?php
			}
			?>
            </ul>
          
          
           
           
      
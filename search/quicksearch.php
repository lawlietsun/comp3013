<ul>
	<table class="table table-bordered">
		<tbody>
			<?php
			include('config.php');
			$count= 0;
			$key =  $_POST['key'];
			$key = addslashes($key);
			$sql = mysql_query("select * from member WHERE fname LIKE '%$key%' or lname LIKE '%$key%'") or die(mysql_error());

			While($row = mysql_fetch_array($sql)) {
				$count++;
				$mem_id= $row['mem_id'];
				$fname=$row['fname'];
				$lname+$row['lname'];

				if($count<= 10){
			?>
			<div class="show<?php echo $mem_id; ?>">
				<tr>
					<td><a href = "/loginValidate/home.php">
						<?php 
						echo $fname;
						echo " ";
						echo $lname;
						?>
						</a>
					</td>
				</tr>
			</div>
			<?php }}
			if($count==""){
				echo "no match Found";
			}else{
			?>
			<?php } ?>

		</tbody>
	</table>	
</ul>
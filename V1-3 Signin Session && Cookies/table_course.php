<?php include 'connection.php'; ?>

<table class="table">
    <tbody>
		<?php
			$query = "select * from courses";
			$result = mysqli_query($con,$query);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					$id =$row['id'];
					$name =$row['name'];
					echo '<tr>
							<td>'.$id.'</td>
							<td>'.$name.'</td>    
							<td>
						    <a href="update_course.php?updateid='.$id.'"><i class="bi bi-pencil text-info btn"></i></a>
							<a href="delete_course.php?deleteid='.$id.'"><i class="bi bi-trash text-info btn"></i></a>
							</td>
						</tr>';
				}
			}
		?>
  </tbody>   
</table>
<?php include 'connection.php';?>


<table class="table">
    <tbody>
		<?php
			$query = "select * from student";
			$result = mysqli_query($con,$query);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					$id =$row['id'];
					$name =$row['name'];
					$email =$row['email'];
					$phone =$row['phone'];
					$enroll_number =$row['enroll_number'];
					$data_of_admission =$row['date_of_admission'];
					echo '<tr>
							<td><img src="assets/img/student.png" class="w-25 mt-0" alt="image student"></td>
							<td>'.$id.'</td>
							<td>'.$name.'</td>
							<td>'.$email.'</td>
							<td>'.$phone.'</td>
							<td>'.$enroll_number.'</td>
							<td>'.$data_of_admission.'</td>
							<td>
								<a href="update_student.php?updateid='.$id.'"><i class="bi bi-pencil text-info btn"></i></a>
								<a href="delete_student.php?deleteid='.$id.'"><i class="bi bi-trash text-info btn"></i></a>
							</td>
						</tr>';
				}
			}
		?>
  </tbody>
</table>
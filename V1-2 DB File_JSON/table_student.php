<?php
	
	$data = file_get_contents('student.json');
	$student = json_decode($data,true);
	
	foreach($student as $key => $student)
	{
		echo "<tr>
				<td><img src='assets/img/student.png' class='w-25 mt-0' alt='image student'></td>
				<td>".$student['Name']."</td>
				<td>".$student['Email']."</td>
				<td>".$student['Phone']."</td>
				<td>".$student['Enroll Number']."</td>
				<td>".$student['Date of admission']."</td>
				<td><i class='bi bi-pencil text-info btn'></i><i class='bi bi-trash text-info btn'></i></td>

		     </tr>";
	}
?>
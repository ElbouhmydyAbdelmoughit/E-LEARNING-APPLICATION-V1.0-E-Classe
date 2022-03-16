<?php
	
	$student =[ 

				array(
				 	'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'user@email.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
					           		<i class="bi bi-pencil text-info btn"></i>
					           		<i class="bi bi-trash text-info btn"></i>
							   </div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
				array(
					'image' => '<img src="assets/img/student.png" class="w-25 mt-0" alt="image student">',

					'Name' => 'username',

					'Email' => 'karthi@gmmail.com',

					'Phone' => '7305477760' ,

					'Enroll Number' => '1234567305477760' ,

					'Date of admission' => '08-Dec, 2021',

					'icon' => '<div> 
										<i class="bi bi-pencil text-info btn"></i>
										<i class="bi bi-trash text-info btn"></i>
								</div>'
				),
	];

	foreach($student as $key => $student)
	{
		echo "<tr>

				<td>".$student['image']."</td>
				<td>".$student['Name']."</td>
				<td>".$student['Email']."</td>
				<td>".$student['Phone']."</td>
				<td>".$student['Enroll Number']."</td>
				<td>".$student['Date of admission']."</td>
				<td>".$student['icon']."</td>

		     </tr>";
	}
?>
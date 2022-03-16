<?php
	
	$payment =[ 

				array(
				 	'Name' => 'Karthi',

					'Payment Schedule' => 'First',

					'Bill Number' => '00012223',

					'Amount Paid' => 'DHS 100,000' ,

					'Balance amount' => 'DHS 500,000' ,

					'Date ' => '05-Jan, 2022',

					'icon' => '<i class="bi bi-eye text-info"></i>'
                ),
                array(
                    'Name' => 'Karthi',

                   'Payment Schedule' => 'First',

                   'Bill Number' => '00012223',

                   'Amount Paid' => 'DHS 100,000' ,

                   'Balance amount' => 'DHS 500,000' ,

                   'Date ' => '05-Jan, 2022',

                   'icon' => '<i class="bi bi-eye text-info"></i>'
               ),
                array(
                    'Name' => 'Karthi',

                    'Payment Schedule' => 'First',

                    'Bill Number' => '00012223',

                    'Amount Paid' => 'DHS 100,000' ,

                    'Balance amount' => 'DHS 500,000' ,

                    'Date ' => '05-Jan, 2022',

                    'icon' => '<i class="bi bi-eye text-info"></i>'
            ),
            array(
                'Name' => 'Karthi',

                'Payment Schedule' => 'First',

                'Bill Number' => '00012223',

                'Amount Paid' => 'DHS 100,000' ,

                'Balance amount' => 'DHS 500,000' ,

                'Date ' => '05-Jan, 2022',

                'icon' => '<i class="bi bi-eye text-info"></i>'
            )
				
	];

	foreach($payment as $key => $payment)
	{
		echo "<tr>
				<td>".$payment['Name']."</td>
				<td>".$payment['Payment Schedule']."</td>
				<td>".$payment['Bill Number']."</td>
				<td>".$payment['Amount Paid']."</td>
				<td>".$payment['Balance amount']."</td>
				<td>".$payment['Date ']."</td>
				<td>".$payment['icon']."</td>
		     </tr>";
	}
?>
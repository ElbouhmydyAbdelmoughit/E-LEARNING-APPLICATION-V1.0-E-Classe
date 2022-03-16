<?php include 'connection.php'; ?>

<table class="table">
    <tbody>
		<?php
			$query = "select * from payment_details";
			$result = mysqli_query($con,$query);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					$id =$row['id'];
					$name =$row['name'];
					$payment_schedule =$row['payment_schedule'];
					$bill_number =$row['bill_number'];
					$amount_paid =$row['amount_paid'];
					$balance_amount =$row['balance_amount'];
                    $date_payment =$row['date_payment'];
					echo "<tr>
							<td>".$id."</td>
							<td>".$name."</td>
							<td>".$payment_schedule."</td>
							<td>".$bill_number."</td>
							<td>".$amount_paid."</td>
							<td>".$balance_amount."</td>
                            <td>".$date_payment."</td>
							<td><i class='bi bi-eye text-info'></i></td>
						</tr>";
				}
			}
		?>
  </tbody>
</table>
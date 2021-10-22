<?php include '../includes/connection.php';?>
 
<?php include '../includes/admin_header.php';?>




<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
                                               
                                                <th>name</th>
                                                <th>email</th>
                                                <th>subject</th>
                                                <th>message</th>
                                                <th>status</th>
                                                <th>replay</th>
                                                <th>delete</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$query = "select * from contact_us";
							$result = mysqli_query($con, $query);
							while($contactSet = mysqli_fetch_assoc($result)){
								echo "<tr>";
							                                                                                                             




								echo "<td>{$contactSet['contact_name']}</td>";
								echo "<td>{$contactSet['contact_email']}</td>";
								echo "<td>{$contactSet['contact_subject']}</td>";
								echo "<td>{$contactSet['contact_message']}</td>";
							    
	                          
                                  if($contactSet['contact_status']=='processed')
                                  {

                                  echo "<td style='color:#00FF00'>{$contactSet['contact_status']}</td>";
 
                                  }else if($contactSet['contact_status']=='not processed')
                                      {
                                     echo "<td style='color:#FF0000'>{$contactSet['contact_status']}</td>";
                                      }
                            	                            
                            						   
                            	


								echo "<td><a href='replay_contact.php?contact_id={$contactSet['contact_id']}'>Replay</a></td>";
								echo "<td><a href='delete_contact.php?contact_id={$contactSet['contact_id']}'>Delete</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
		</div>
	</div>
</div>






<?php include '../includes/admin_footer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GPKP Chatbot</title>
	<link rel="stylesheet" href="../CSS/Chat.css">
	<link rel="icon" href="../Image/GPKP.jpg">
</head>
<body>
	<div class="container">
		<div class="chat">
			<div class="chat-header">
				<div class="profile">
					<div class="left">
					<a href="../PHP/admin1.php"><img src="../Image/GPKP.jpg" alt="GPKP Logo" height = 50px id="GPKP"></a>
						<h2>GPKP Chatbot</h2>
					</div>
					
				</div>
			</div>

			<!-- Main Chat -->


			<div class="chat-box">

			   <div class="chat-l">
					<div class="mess">
						<p>
                            Welcome , How can I help you..
						</p>
					</div>
					<div class="sp"></div>
				</div>	


				<div class="chat-r">
					<div class="sp"></div>
					<div class="mess mess-r">
						<p>
                            <?php 
							  if(!empty($_POST['user_input']))
							  {
							  $msg = $_POST['user_input'];

							  echo $msg;
							  }
							?>
						</p>
					</div>
				</div>
				<div class="chat-l">
					<div class="mess">
						<p>
                            <?php
								$flag = 0;

							  if(!empty($_POST['user_input']))
							  {
							  
								$conn = mysqli_connect("localhost","root","","gpkpbot");

								if(!$conn)
								{
									die("Connection not establish".mysqli_connect_error());
								}
								else
								{
									if($msg == "Curriculum" || $msg == "curriculum" || $msg == "Syllabus" || $msg == "Syllabus" )
									{
									  $sql = "SELECT * FROM chatbot WHERE Messages = '$msg'";
									}
									else
									{
									  $sql = "SELECT * FROM chatbot WHERE Messages = '$msg' or Messages LIKE '%$msg%' ";
									}
    
									$result = mysqli_query($conn, $sql); 

								
									while($row = mysqli_fetch_assoc($result))
            						{
										$output = $row['Response'];

										
										if(filter_var($output,FILTER_VALIDATE_URL))
										{
											echo "Click on Button <br>";
											echo"<button id='Drive'><a href='{$output}' target='_blank'> Click here </a></button>";
											$flag = 1;
										}
										else
										{
											echo $output;
											$flag = 1;
										}	
									}

									if($flag == 0)
									{
										echo "Sorry I can't understand you..";
									}
								}
							}
							?>
						</p>

							
					</div>
					<div class="sp"></div>
				</div>		
			</div>

			<!-- User input -->

			<form action="Chatbot.php" method="post">
			<div class="chat-footer">
				<textarea placeholder="Enter your message..." name="user_input" required ></textarea>
				
	            <button type="submit" id="send_btn"><img src="../Image/send.png" alt="" height="55px" id="send"></button>
				<img src="../Image/happy.png" alt="Happy" id="happy" height=30px>
				<label for="">CREATED BY <b>AMEY & SANDESH</label>
			</div>
			
			</form>
		</div>
	</div>
	
</body>
</html>
<?php
$name= $_POST['name'];
$emailHelp= $_POST['emailid'];
$phone= $_POST['phone'];
$comments=$_POST['msg'];

if(isset($name) && isset($phone) && isset($emailHelp))
{
	global $to_email,$vpb_message_body,$headers;
	$to_email="info@astrawinindia.com";
	
	// HTML Email Template
	$vpb_message_body = '
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>New Contact Form Submission</title>
	</head>
	<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4; padding: 20px;">
			<tr>
				<td align="center">
					<table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
						<!-- Header -->
						<tr>
							<td style="background: linear-gradient(135deg, #ff5e14 0%, #ff8a3d 100%); padding: 30px; text-align: center;">
								<h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700;">New Contact Form Submission</h1>
								<p style="margin: 10px 0 0 0; color: #ffffff; font-size: 14px; opacity: 0.9;">From Astrawin India Website</p>
							</td>
						</tr>
						
						<!-- Date & IP Info -->
						<tr>
							<td style="background-color: #f8f9fa; padding: 15px 30px; border-bottom: 1px solid #e9ecef;">
								<table width="100%" cellpadding="0" cellspacing="0">
									<tr>
										<td style="font-size: 13px; color: #666;">
											<strong>Date:</strong> '.date('d F Y, h:i A').'
										</td>
										<td align="right" style="font-size: 13px; color: #666;">
											<strong>Source:</strong> '.$_SERVER['HTTP_HOST'].'
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Contact Details -->
						<tr>
							<td style="padding: 40px 30px;">
								<h2 style="margin: 0 0 25px 0; color: #1a1a1a; font-size: 20px; font-weight: 600; border-bottom: 2px solid #ff5e14; padding-bottom: 10px;">Contact Information</h2>
								
								<!-- Name -->
								<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
									<tr>
										<td width="40" valign="top">
											<div style="width: 35px; height: 35px; background: linear-gradient(135deg, #ff5e14 0%, #ff8a3d 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
												<span style="color: white; font-size: 16px;">👤</span>
											</div>
										</td>
										<td valign="top" style="padding-left: 15px;">
											<p style="margin: 0 0 5px 0; font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.5px;">Full Name</p>
											<p style="margin: 0; font-size: 16px; color: #1a1a1a; font-weight: 600;">'.$name.'</p>
										</td>
									</tr>
								</table>
								
								<!-- Email -->
								<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
									<tr>
										<td width="40" valign="top">
											<div style="width: 35px; height: 35px; background: linear-gradient(135deg, #4285f4 0%, #34a853 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
												<span style="color: white; font-size: 16px;">📧</span>
											</div>
										</td>
										<td valign="top" style="padding-left: 15px;">
											<p style="margin: 0 0 5px 0; font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.5px;">Email Address</p>
											<p style="margin: 0; font-size: 16px; color: #4285f4; font-weight: 600;">
												<a href="mailto:'.$emailHelp.'" style="color: #4285f4; text-decoration: none;">'.$emailHelp.'</a>
											</p>
										</td>
									</tr>
								</table>
								
								<!-- Phone -->
								<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
									<tr>
										<td width="40" valign="top">
											<div style="width: 35px; height: 35px; background: linear-gradient(135deg, #34a853 0%, #0f9d58 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
												<span style="color: white; font-size: 16px;">📱</span>
											</div>
										</td>
										<td valign="top" style="padding-left: 15px;">
											<p style="margin: 0 0 5px 0; font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.5px;">Phone Number</p>
											<p style="margin: 0; font-size: 16px; color: #1a1a1a; font-weight: 600;">
												<a href="tel:'.$phone.'" style="color: #34a853; text-decoration: none;">'.$phone.'</a>
											</p>
										</td>
									</tr>
								</table>
								
								<!-- Message -->
								<table width="100%" cellpadding="0" cellspacing="0" style="margin-top: 30px;">
									<tr>
										<td>
											<h3 style="margin: 0 0 15px 0; color: #1a1a1a; font-size: 16px; font-weight: 600; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px;">Message</h3>
											<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ff5e14;">
												<p style="margin: 0; color: #555; font-size: 15px; line-height: 1.6;">'.nl2br(htmlspecialchars($comments)).'</p>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- User Info Footer -->
						<tr>
							<td style="background-color: #f8f9fa; padding: 20px 30px; border-top: 1px solid #e9ecef;">
								<table width="100%" cellpadding="0" cellspacing="0">
									<tr>
										<td style="font-size: 12px; color: #888;">
											<strong>User IP:</strong> '.getHostByName(getHostName()).'
										</td>
										<td align="right" style="font-size: 12px; color: #888;">
											<strong>Submitted:</strong> '.date('d M Y').'
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<!-- Footer -->
						<tr>
							<td style="background-color: #1a1a1a; padding: 25px 30px; text-align: center;">
								<p style="margin: 0 0 10px 0; color: #ffffff; font-size: 14px; font-weight: 600;">Astrawin India Private Limited</p>
								<p style="margin: 0 0 15px 0; color: #999; font-size: 12px;">#232, 46th Street TVS Colony, Anna Nagar West Extn, Chennai - 600101</p>
								<p style="margin: 0; color: #999; font-size: 11px;">
									This is an automated notification from your website contact form.
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
	</html>
	';
	
	//Set up the email headers
    $headers    = "From: $name <$emailHelp>\r\n";
    $headers   .= "Reply-To: $emailHelp\r\n";
    $headers   .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers   .= "X-Mailer: PHP/".phpversion()."\r\n";
    $headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n"; 
   
	 if(@mail($to_email, "New Contact Form Submission - ".$name, $vpb_message_body, $headers))
		{
			$status='Success';
			//Displays the success message when email message is sent
			$output="Congrats ".$name.", your email message has been sent successfully! We will get back to you as soon as possible. Thanks.";
		} 
		else 
		{
			$status='error';
			 //Displays an error message when email sending fails
			$output="Sorry, your email could not be sent at the moment. Please try again or contact this website admin to report this error message if the problem persist. Thanks.";
		}	
}
else
{
	echo $name;
	$status='error';
	$output="please fill require fields";
}

echo json_encode(array('status'=> $status, 'msg'=>$output));
?>
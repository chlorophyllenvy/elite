<?php


// print_r($_REQUEST);
    if(@!stripos($_REQUEST['email'], "@")) {
            // echo 'derp';
			return http_response_code(404);
		} 
		
		@$date = date('l, M j - h:i:s A');
		@$emailMess = 'Hello Landen,<br />
		<p style="text-indent:25px;">Someone has tried to contact you through your web form.  Please find their details below:<br />
		Date Received: ' . $date .'<br />
		Name: ' . @$_REQUEST['name'] .'<br />
		Telephone Number: ' . @$_REQUEST['phone'] . '<br />
		Email Address: ' . @$_REQUEST['email'] . '<br />
		Comments: ' . @$_REQUEST['message'] . '

		';
		@$to = 'floorinstaller@gmail.com';
        // @$to = "chlorophyll.envy@gmail.com";
		@$subject = 'Message Submission From Your Website ';
		$message = $emailMess;
		        
		        
		$headers = 'From: Online_Web_Submission' . "\r\n" .
		    'Reply-To: '.$to."\r\n" .
		    'MIME-Version: 1.0' . "\r\n" .
		    'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		    $to .= ", chlorophyll.envy@gmail.com";
		    if(mail($to, $subject, $message, $headers)){
			echo true;
			// print_r($_REQUEST);
			} else {
				// echo "you fail";
                echo false;
            }
		

?>
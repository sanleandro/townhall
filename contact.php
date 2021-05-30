$response = '';
if (isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['subject'])) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$response = 'Email is not valid!';
	} else if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['message'])) {
		$response = 'Please complete all fields!';
	} else {
		$to      = 'aadhav.rajesh@gmail.com';
		$from    = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		$response = 'Message sent!';		
	}
}

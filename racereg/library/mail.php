<?php

namespace molly;

require_once("/home/kiimutmy/lib/classes/session.php");
use molly\PHPMailer;
use molly\Exception;
require '/home/kiimutmy/lib/classes/Exception.php';
require '/home/kiimutmy/lib/classes/PHPMailer.php';
require '/home/kiimutmy/lib/classes/SMTP.php';

class Mail extends Session {
	private $emailFromAddress = "info@thebanyanteam.com";
	private $emailFromAddressSecondary = "info.banyanmediagroup@gmail.com";
	private $emailAdminTo = "Banyan Team <info@thebanyanteam.com>";
	private $emailAdminSite = "https://thebanyanteam.com";
	private $emailAdminHost = "thebanyanteam.com";

	function __construct() { }

	public function sendCopy($record=array()) {
		if(!empty($record["email"])) {
			$mail = new PHPMailer(true);
			try {
				// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				$mail->isSMTP();
				$mail->Host = 'server.kii.mut.mybluehost.me';
				$mail->SMTPAuth = true;
				$mail->Username = 'info@thebanyanteam.com';
				$mail->Password = 'HwOiC;4siSTF';
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->Port = 465;
				$to = $this->emailFromAddress;
				$name = "Hokualele Admins";
				$user_name = $record["full_name"];
				$user_email = $record["email"];
				$user_phone = $record["phone"];
				$user_msg = $record["message"];
				$mail->setFrom($to, "Banyan Media Website");
				$mail->addReplyTo('noreply@'.$this->emailAdminHost, 'No-Reply');
				$mail->addAddress($to, $name);
				$mail->isHTML(true);
				$mail->Subject = 'Someone contacted us from the website';
				ob_start();
				include("/home/kiimutmy/views/email/banyan_website_contact.php");
				$message = ob_get_clean();
				$mail->Body = $message;
				if ($mail->send()) {
					return true;
					exit;
				} else {
					return false;
				}
			} catch (Exception $e) {
				echo "Message could not be sent.";
			}
		}
			
			
	}

	public function sendContactConfirm($record=array()) {
		if(!empty($record["email"])) {
			$mail = new PHPMailer(true);
			try {
				// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				$mail->isSMTP();
				$mail->Host = 'server.kii.mut.mybluehost.me';
				$mail->SMTPAuth = true;
				$mail->Username = 'info@thebanyanteam.com';
				$mail->Password = 'HwOiC;4siSTF';
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->Port = 465;
				$to = $record["email"];
				$name = $record["full_name"];
				$user_msg = $record["message"];
				$mail->setFrom($this->emailFromAddress, "Banyan Media");
				$mail->addAddress($to, $name);
				$mail->addReplyTo('noreply@'.$this->emailAdminHost, 'No-Reply');
				// $mail->addCC('cc@example.com');
				// $mail->addBCC('bcc@example.com');

				$mail->isHTML(true);
				$mail->Subject = 'We Received your Message!';
				ob_start();
				include("/home/kiimutmy/views/email/banyan_confirm_contact.php");
				$message = ob_get_clean();
				$mail->Body = $message;
				if ($mail->send()) {
					echo "here";
					return $this->sendCopy($record);
					exit;
				}
				return false;
			} catch (Exception $e) {
				echo "Message could not be sent.";
				// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		} else {
			echo "Message could not be sent.";
		}
	}

	public function sendTestEmail() {
		$mail = new PHPMailer(true);
		try {
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host = 'server.kii.mut.mybluehost.me';
			$mail->SMTPAuth = true;
			$mail->Username = 'info@thebanyanteam.com';
			$mail->Password = 'HwOiC;4siSTF';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = 465;
			$to = "mollyshewchuk@gmail.com";
			$mail->setFrom($this->emailFromAddress, "Banyan Media");
			$mail->addAddress($to, "Test");
			$mail->addReplyTo('noreply@'.$this->emailAdminHost, 'No-Reply');
			$mail->addCC('molly@thebanyanteam.com');

			$mail->isHTML(true);
			$mail->Subject = 'We Received your Message!';
			ob_start();
			include("/home/kiimutmy/views/email/test.php");
			$message = ob_get_clean();
			$mail->Body = $message;
			if ($mail->send()) {
				exit;
			}
			return false;
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}

?>

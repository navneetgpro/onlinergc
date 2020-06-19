<?php
class Mailer_model extends CI_Model{

      public function send_mail($mail,$config){
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;

            $mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting
            $mail->Port = '587';				//Sets the default SMTP server port
            $mail->SMTPAuth = true;				//Sets SMTP authentication. Utilizes the Username and Password variables
            $mail->Username = 'hacktusi@gmail.com';	//Sets SMTP username
            $mail->Password = '9696701078';		//Sets SMTP password
            $mail->SMTPSecure = 'tls';			//Sets connection prefix. Options are "", "ssl" or "tls"
            $mail->From = 'hacktusi@gmail.com';		//Sets the From email address for the message
            $mail->FromName = 'OberJobs';		//Sets the From name of the message
            $mail->AddAddress($config['mailto'], $config['toname']);	//Adds a "To" address
            $mail->WordWrap = 50;				//Sets word wrapping on the body of the message to a given number of characters
            $mail->IsHTML(true);				//Sets message type to HTML
            $mail->Subject = $config['mailsubject'];  //Sets the Subject of the message
            //An HTML or plain text message body
            $mail->Body = $config['bodytemp'];
            $mail->AltBody = '';
            return $mail->Send();
            //return true;
      }
}
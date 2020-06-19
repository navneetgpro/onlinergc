<?php
	class Mailer extends CI_Controller{

        public function __construct()
		{
            parent::__construct();
            $this->load->model('Mailer_model', 'mailer');
			$this->load->library("phpmailer_library");
		}

		public function index()
        {
            $baseu = base_url();
            $mail = $this->phpmailer_library->load();
            $tempkey = $this->generateRandomString();

            $data = Array(
                'logoimg' => $baseu."assets/img/logo1.png",
                'siteurl' => $baseu,
                'vrfurl' => $baseu."verifymail/v/".$tempkey
            );

            $body = $this->load->view('mailtemp/signup',$data,TRUE);
            
            $Mailconfig = Array(
                'mailsubject' => "Sign up verification",
                'mailto' => "development@czarsindia.com",
                'toname' => "NavneetGpro",
                'bodytemp' => $body
            );
            $this->common_model->partialResponse($outmsg);
            $this->mailer->send_mail($mail,$Mailconfig);
        }

        function generateRandomString($length = 35) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        function partialResponse()
        {
            $response=array();
            ignore_user_abort(true);
            ob_start();
            echo json_encode($response);
            header("Status: 200");
            header($_SERVER["SERVER_PROTOCOL"] . " 200 Ok");
            header("Content-Type: application/json");
            header('Content-Length: '.ob_get_length());
            ob_end_flush();
            ob_flush();
            flush();
        }
	}
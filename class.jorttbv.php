<?php
	/*
	*
	*	@File		jorttbv.class.php
	*	@Author		Extreemhost <admin@extreemhost.nl> (2017)
	*	@License	Berkeley Software Distribution License (BSD-License 2) http://www.opensource.org/licenses/bsd-license.php
	*
	*/

	class JorttBV_Client
	{
		protected $appname;
		protected $apptoken;
		protected $appurl = 'https://app.jortt.nl/api/';

		public function __construct($appname, $apptoken) {
			$this->appname = $appname;
			$this->apptoken = $apptoken;
		}

		public function request($string, $select) {
			$request = curl_init();
			$headers = array(
				'Content-Type: application/json',
				'Accept: application/json',
				'Authorization: Basic '.base64_encode($this->appname.':'.$this->apptoken)
			);
			$config = array(
				'APPNAME' => $this->appname,
				'APITOKEN' => $this->apptoken,
				'APIURL' => $this->appurl
			);
			$command = json_encode($string);
			curl_setopt($request, CURLOPT_URL, $config['APIURL'].$select);
			curl_setopt($request, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($request, CURLOPT_POST, true);
			curl_setopt($request, CURLOPT_POSTFIELDS, $command);
			curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($request, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($request, CURLOPT_HEADER, false);	
			curl_setopt($request, CURLOPT_USERPWD, base64_encode($config['APPNAME'].':'.$config['APITOKEN']));
			$result = curl_exec($request);
			if ($result == FALSE) {
				throw new Exception('<p>Curl failed: '.curl_error($request).'</p>');
			}
			// Close connection
			curl_close($request);
			//
			print $result;
		}
	}
<?php

class Model_security extends CI_Model
{
	function getSecurity()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('home');
		}
	}
}

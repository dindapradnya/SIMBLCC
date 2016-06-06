<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->flashdata('msg_error')){
	//pesan error
	echo "
		<div class='row'>
			<div class='col-md-12'>
				<div class='alert alert-danger alert-dismissible' role='alert'>
					<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					".$this->session->flashdata('msg_error')."
				</div>
			</div>
		</div>
	";
} else if($this->session->flashdata('msg_success')){
	//pesan sukses
	echo "
		<div class='row'>
			<div class='col-md-12'>
				<div class='alert alert-success alert-dismissible' role='alert'>
					<span class='glyphicon glyphicon-ok-sign' aria-hidden='true'></span>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					".$this->session->flashdata('msg_success')."
				</div>
			</div>
		</div>
	";
}
?>
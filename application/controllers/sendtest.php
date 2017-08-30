<?php


$to = "x2020x@yahoo.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: x2020x@yahoo.com" . "\r\n" .
    "CC: x2020x@yahoo.com";

mail($to,$subject,$txt,$headers);





$this->load->library('email');
$name = $this->input->post("fname");
$cemail = $this->input->post("email");
$pno = $this->input->post("phone");
$message = $this->input->post("message");
 ?>
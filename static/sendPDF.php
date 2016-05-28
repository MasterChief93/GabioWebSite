<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require('fpdf.php');

	$applicant_name = $_POST['applicant_name'];
	$applicant_phone_number = $_POST['applicant_phone_number'];
	$applicant_mobile_phone_number = $_POST['applicant_mobile_phone_number'];
	$patient_name = $_POST['patient_name'];
	$patient_address = $_POST['patient_address'];
	$patient_address_city = $_POST['patient_address_city'];
	$patient_address_stairs_num = $_POST['patient_address_stairs_num'];
	$lift_check = $_POST['lift_check'];
	$patient_age = $_POST['patient_age'];
	$patient_weight = $_POST['patient_weight'];
	$oxygen_check = $_POST['oxygen_check'];
	$wander_check = $_POST['wander_check'];
	$sit_check = $_POST['sit_check'];
	$supine_check = $_POST['supine_check'];
	$service_type = $_POST['service_type'];
	$service_date = $_POST['service_date'];
	$place_from = $_POST['place_from'];
	$place_to = $_POST['place_to'];
	$section = $_POST['section'];
	$additional_info = $_POST['additional_info'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Ciao FE!');
	$pdf_file = $pdf->Output('S', null, false);



	$mail = new PHPMailer();
	$mail->setFrom('no-reply@gabiowebsite.com', 'Comitato locale Gabio');
	$mail->addAddress('fede93.vagnoni@gmail.com', 'Federico Vagnoni');
	//$mail->addAddress('pastorini.claudio@gmail.com', 'Claudio Pastorini');
	$mail->Subject  = 'Richiesta servizio';
	$mail->Body     = 'Ciao ' . $applicant_name . '!!';
	$mail->addStringAttachment($pdf_file, 'richiesta.pdf');
	if(!$mail->send()) {
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} else {
	  echo 'Message has been sent.';
	}
?>
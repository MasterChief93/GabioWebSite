<?php
require 'PHPMailer/PHPMailerAutoload.php';
require('fpdm/fpdm.php');


$service_date = DateTime::createFromFormat('d/m/Y', $_POST['service_date']);
$service_hour = DateTime::createFromFormat('H:i', $_POST['service_hour']);


//applicant_phone_numbers

$fields = array(
	
	'applicant_phone_numbers'       => $_POST['applicant_phone_number'] . " / " . $_POST['applicant_mobile_phone_number'],
	'patient_name'                  => $_POST['patient_name'],
	'patient_address'               => $_POST['patient_address'],
	'applicant_name'                => $_POST['applicant_name'],
	'patient_address_stairs_num'    => $_POST['patient_address_stairs_num'],
	'lift_check'                    => $_POST['lift_check'],
	'patient_age'                   => $_POST['patient_age'],
	'patient_weight'                => $_POST['patient_weight'],
	'discharge'						=> (strcmp($_POST['service_type'],'discharge') == 0 ? 'X' : ''),
	'examination'					=> (strcmp($_POST['service_type'],'examination') == 0 ? 'X' : ''),
	'transfer'						=> (strcmp($_POST['service_type'],'transfer') == 0 ? 'X' : ''),
	'admission'						=> (strcmp($_POST['service_type'],'admission') == 0 ? 'X' : ''),
	'oxygen_check'                  => (strcmp($_POST['oxygen_check'],'on') == 0 ? 'X' : ''),
	'wander_check'                  => (strcmp($_POST['wander_check'],'on') == 0 ? 'X' : ''),
	'sit_check'                     => (strcmp($_POST['sit_check'],'on') == 0 ? 'X' : ''),
	'supine_check'                  => (strcmp($_POST['supine_check'],'on') == 0 ? 'X' : ''),
	'service_hour'					=> $service_hour->format('H'),
	'service_minutes'				=> $service_hour->format('i'),
	'service_date_day'              => $service_date->format('d'),
	'service_date_month'            => $service_date->format('m'),
	'service_date_year'             => $service_date->format('Y'),
	'receive_date_day'				=> date('d'),
 	'receive_date_month'			=> date('m'),
	'receive_date_year'				=> date('Y'),
	'place_from'                    => $_POST['place_from'],
	'place_to'                      => $_POST['place_to'],
	'section_from'					=> $_POST['section_from'],
	'section_to'                    => $_POST['section_to'],
	'additional_info'               => $_POST['additional_info'],
);


$pdf = new FPDM('Foglio_CRI_convertito.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf_file = $pdf->Output('richiesta.pdf', 'S');

$mail = new PHPMailer();
$mail->setFrom('no-reply@gabiowebsite.com', 'Richiesta servizio sito');
$mail->addAddress('cl.gabio@cri.it', 'Comitato Gabio');
//$mail->addAddress('pastorini.claudio@gmail.com', 'Claudio Pastorini');
$mail->Subject  = 'Richiesta servizio';
$mail->Body     = 'Nuovo servizio richiesto';
$mail->addStringAttachment($pdf_file, 'richiesta.pdf');
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
?>
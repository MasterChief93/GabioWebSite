<?php
require 'PHPMailer/PHPMailerAutoload.php';
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Ciao FE!');
$pdf_file = $pdf->Output('S', null, false);

$mail = new PHPMailer();
$mail->setFrom('no-reply@gabiowebsite.com', 'Comitato locale Gabio');
$mail->addAddress('fede93.vagnoni@gmail.com', 'Federico Vagnoni');
$mail->addAddress('pastorini.claudio@gmail.com', 'Claudio Pastorini');
$mail->Subject  = 'Prima email da Gabio Web Site';
$mail->Body     = 'Ciao ciao!!';
$mail->addStringAttachment($pdf_file, 'myfile.pdf');
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
?>
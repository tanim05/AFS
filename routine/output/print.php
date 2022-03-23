<?php








		if($_GET['pdf']= 'yes' ){
											
											$html=file_get_contents("http://localhost/RMS/output/student_pdf.php?");
											
											require_once __DIR__ . './../vendor/autoload.php';

											$mpdf = new \Mpdf\Mpdf();
											$mpdf = new \Mpdf\Mpdf([
													'default_font_size' => 11,
													'default_font' => 'solaimanlipi'
												]);
								
											//$mpdf->setFooter(' নগর কার্যালয়ঃ ফ্ল্যাটঃ এ-৬, প্লটঃ ২/৩, ব্লকঃ এ, ইকবাল রোড (মিরপুর রোড), মোহাম্মদ পুর, ঢাকা ১২০৭ ফোনঃ ০৯৬৬৬৭৭৫৫৩৩,ই-মেইলঃ info@bdu.ac.bd	Web: www.bdu.ac.bd');
											//$mpdf->setFooter('{PAGENO} of {nbpg}');
											$mpdf->WriteHTML($html );
											$mpdf->Output();
		}
	












?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body >



  <a href="http://localhost/RMS/output/student_pdf.php?type=1&&meetingId=1&&secondTypeID=&pdf=yes">PRINT PDF</a>


</body>
</html>

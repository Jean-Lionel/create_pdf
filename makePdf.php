/**
AUTHOR : JEAN LIONEL
https://mpdf.github.io/
*/
<?php

require_once __DIR__.'/vendor/autoload.php';

//grab the informations

$fname = $_POST['fname'];
$last_name = $_POST['lName'];
$email = $_POST['email'];
$phone = $_POST['fone'];
$message = $_POST['message'];

//declaration of class

$mpdf = new Mpdf\Mpdf();

//create data 

$data = '';

$data .= "<h1>VOS INDENTIFICATIONS</h1>";
$data .= "<br>Nom & Prenom : ".$fname.' - '.$last_name;
$data .= "<br>Email : ".$email;
$data .= "<br>Tel : ".$phone;

if($message){
	$data .= '<br><strong> Message </strong> <br>'.$message;
}

$mpdf->WriteHTML($data);

$mpdf->Output($fname.'.pdf','I');


/**



    Destination where to send the document. Use class constants from \Mpdf\Output\Destination for better readability and understandability

    Default: \Mpdf\Output\Destination::INLINE

    Values:
    \Mpdf\Output\Destination::INLINE, or "I"
        send the file inline to the browser. The plug-in is used if available. The name given by $filename is used when one selects the “Save as” option on the link generating the PDF.
    \Mpdf\Output\Destination::DOWNLOAD, or "D"
        send to the browser and force a file download with the name given by $filename.
    \Mpdf\Output\Destination::FILE, or "F"
        save to a local file with the name given by $filename (may include a path).
    \Mpdf\Output\Destination::STRING_RETURN, or "S"
        return the document as a string. $filename is ignored.
/
<?php
function mail_attachment($file, $filename, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
  $fp = fopen($file,"rb");
  $data = fread($fp,filesize($file));
  fclose($fp);
  $data = chunk_split(base64_encode($data));

  //header
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
  $headers = "From: ".$from_name." <".$from_mail.">";
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;" . " boundary=\"{$mime_boundary}\"";
  $header .= "Content-type:text/html; charset=iso-8859-1\r\n";
  $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

  //message
  $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-type:text/html; charset=\"UTF-8\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
  $message .= "--{$mime_boundary}\n";
  $message1 = "Content-Type: application/octet-stream; name=\"".basename($filename)."\"\n" .
  "Content-Description: ".basename($filename)."\n" .
  "Content-Disposition: attachment;\n" . " filename=\"".basename($filename)."\"; size=".filesize($file).";\n" .
  "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
  $message.=$message1;
  mail($mailto,$subject,$message,$headers);
}
?>
<?php
  include("dompdf/autoload.inc.php");
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();
  $data = json_decode($_POST['data']);
  //print_r($data->tab[1]->row[1]->selected[1]);die();
  $tr_first_bg = "style='background-color: #ccc;'";
  $td_style = "style='border-right:1px solid green;border-bottom:1px solid green;padding-left:10px'";
  $td_style_first = "style='border-right:1px solid green;border-left:1px solid green;border-bottom:1px solid green;padding-left:10px'";

  //message to user
  $emailBody = '<div style="FONT-SIZE: 12px; FONT-FAMILY: arial, sans-serif">';
  $emailBody = $emailBody . '<p align="left">Guten Tag '.$data->person->vorname.' '.$data->person->name.'!</p>
<p>Sie haben erfolgreich den Digital Readiness Check absolviert. Anbei erhalten Sie das Ergebnis. Daraus ergibt sich
ein gutes Bild der Bereitschaft zur Veränderung in ihrer Organisationseinheit, die Sie bewertet haben.</p>
<p>Gerne spreche ich mit Ihnen über die Details und mögliche nächste Schritte zur erfolgreichen digitalen
Transformation.</p>
<p>Mit transformationsfreundlichen Grüßen</p>
<p>Dr. Michael Groß<br /><br />_________________</p>
<p style="font-size: 12px; font-family: Calibri, sans-serif;" align="left">
<font style="font-size: 14px; font-family: Garamond, serif;">Groß &amp; Cie. GmbH</font><br />
Altkönigstraße 50 . 61462 Königstein<br />E-Mail: <a href="mailto:m.gross@gross-cie.com">m.gross@gross-cie.com</a>
. <a href="http://www.gross-cie.com">www.gross-cie.com</a><br />Telefon: 06174 936 116 . Telefax: 06174 936 111<br />Sitz der Gesellschaft: Königstein . Handelsregister: HRB 8147<br />Geschäftsführer: Ilona Groß, Dr. Michael Groß <br /> <br /><font style="font-size: 11px;">Diese E-Mail enthält vertrauliche und/oder rechtlich geschützte Informationen. Wenn Sie nicht der richtige Adressat sind oder diese E-Mail irrtümlich erhalten haben, informieren Sie bitte sofort den Absender und vernichten Sie diese Mail. Das unerlaubte Kopieren sowie die unbefugte Weitergabe dieser Mail ist nicht gestattet.<br /> <br />This e-mail may contain confidential and/or privileged information. If you are not the intended recipient (or have received this e-mail in error) please notify the sender immediately and destroy this e-mail. Any unauthorized copying, disclosure or distribution of the material in this e-mail is strictly forbidden.</font></p>';
  $emailBody  = $emailBody . '</div>';
  
  //message to the client
  $emailBody1 = '<div style="FONT-SIZE: 12px; FONT-FAMILY: arial, sans-serif">';
  $emailBody1 .= "you have a user with below information<br>";
  $emailBody1 .= "vorname:" . $data->person->vorname . "<br>";
  $emailBody1 .= "name:" . $data->person->name . "<br>";
  $emailBody1 .= "Unternehmen:" . $data->person->unternehmen . "<br>";
  $emailBody1 .= "email:" . $data->person->email . "<br>";
  $emailBody1 .= "telefon:" . $data->person->telephone . "<br>";
  $emailBody1 .= "</div>"; 
  

																								// 	Bjoern changed

    $answers = array(
        1=>"Stimmt gar nicht",
        2=>"Stimmt manchmal",
        3=>"Teils-teils",
        4=>"Stimmt häufig",
        5=>"Stimmt immer",
        6=>"Weiß nicht",
	);

    $headlines = array(
		1=>"Situation",
		2=>"Vernetzung",
		3=>"Offenheit",
		4=>"Partizipation",
		5=>"Agilität",
	);


  $pdf = '
  <center><img src="images/1x/logo.jpg"/></center>
  <br><br>
  <div style="font-size:11px">';
  for($i=1;$i<=count($data->tab)-1;$i++)
  {
    $row = $data->tab[$i]->row;
    $pdf = $pdf . "<h1>" .$headlines[$i] . "</h1>";													// 	Bjoern changed
    $pdf = $pdf . "<table cellspacing='0'>";

																								// 	Bjoern changed
/*
    $pdf = $pdf . "<tr ".$tr_first_bg.">
                            <td ".$td_style_first.">text</td>
                            <td ".$td_style.">Stimmt gar nicht</td>
                            <td ".$td_style.">Stimmt manchmal</td>
                            <td ".$td_style.">Teils-teils</td>
                            <td ".$td_style.">Stimmt häufig</td>
                            <td ".$td_style.">Stimmt immer</td>
                            <td ".$td_style.">Weiß nicht</td>
                          </tr>";
*/

     for($j=1;$j<=count($row)-1;$j++)
     {
        $selected = $row[$j]->selected;
        $pdf = $pdf ."<tr>";
        $pdf = $pdf . "<td ".$td_style_first.">".$row[$j]->content."</td>";

        for($k=1;$k<=count($selected)-1;$k++)
         if($selected[$k] == 'no')
          $pdf = $pdf; // . "<td ".$td_style.">No     </td>"; 									// 	Bjoern changed
         else
          $pdf = $pdf . "<td ".$td_style.">".$answers[$k]."</td>";								// 	Bjoern changed

        $pdf = $pdf . "</tr>";
     }

     $pdf = $pdf . "</table>";
     $pdf= $pdf ."<br>";
  }
  $pdf.= "</div>";
  //create pdf
  $dompdf->loadHtml($pdf);
  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'Horizontal');
  // Render the HTML as PDF
  $dompdf->render();
  $pdf_content = $dompdf->output();
  $file_location = "pdf/result.pdf";
  file_put_contents($file_location,$pdf_content);
  //send email with attach pdf
  $filename= "result.pdf";
  $mailto = $data->person->email;
  $from_name = "Grüßen";
  $from_email = "m.gross@gross-cie.com";
  $subject = "Digital Readiness Check: Ergebnis";
  mail_attachment($file_location,$filename,$mailto,$from_email,$from_name,$from_email,$subject,$emailBody);
  //send email to the client with attach pdf
  $from_name = "Grüßen";
  $from_email = "m.gross@gross-cie.com";
  $mailto = "vukynamkhtn@gmail.com";
  $subject = "Digital Readiness Check: Ergebniszz";
  mail_attachment($file_location,$filename,$mailto,$from_email,$from_name,$from_email,$subject,$emailBody1);
?>
<?php
if($_POST)
{
$nom = $_POST['name'];
$message = $_POST['massage'];
$email = $_POST['email'];

$to = "$email";
$seytoo = "seytoo@seytoo.com";
$subject = "Merci de votre message";
$text = "<p>$nom,</p><p>Nous avons bien re&ccedil;u le message que vous nous avez envoy&eacute; &agrave; travers <a href='https://www.seytoo.com'>SEYTOO.COM</a>. Nous en ferons suite dans les prochains 48 heures ouvrables.</p><p>Merci,</p>.<br /><p><a href='https://www.seytoo.com' target='_blank'><img src='https://www.seytoo.com/fr/img/seytoo.png' border='0'></a></b></p>";
 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$seytoo.">" . "\r\n";
//send message to us
$sent = mail($to,$subject,$text,$headers);

$to2 = "seytoo@seytoo.com";
$seytoo2 = "$email";
$subject2 = "Message de $nom via Seytoo";
$message2 = $message;
 
// Always set content-type when sending HTML email
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers2 .= "From: <".$seytoo2.">" . "\r\n";
//send message to us
$sent = mail($to2,$subject2,$message2,$headers2);
?><div class="hideMe"><div class="alertgreen" style="width:100%; display:inline-flex; justify-content: center; align-items:top; padding:10px;"><div style="width:100%; text-align:left;">Votre message nous a &eacute;t&eacute; bien parvenu. Nous en ferons suite dans les prochaines 48 heures.</div></div></div><?php
}

else {}
?>
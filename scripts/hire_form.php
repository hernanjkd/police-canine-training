<?php

$email = $_REQUEST['email'];
$name  = $_REQUEST['firstname'];
$last  = $_REQUEST['lastname'];
$tel   = $_REQUEST['telephone'];
$fax   = $_REQUEST['fax'];
$subj  = $_REQUEST['subject'];
$msg   = '';


$to = 'vit.singh@emctts.com';

$header  = "From: $name $last <$email>\r\n";
$header .= "Reply-To: $email \r\n";

$checkbox = array( lmcat, psckt, lmcot, pcpdt, se, cc );
foreach ($checkbox as $n) {
	$val = $_REQUEST[$n];
	if ($val != '')
		$subj .= " ($val)";
}

$msg .= "Telephone: $tel\r\n";
if ($fax != '')
	$msg .= "Fax: $fax \r\n";
$msg .= "\r\n" . $_REQUEST['comments'];


mail( $to, $subj, $msg, $header );

?>
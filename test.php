<?php
require_once "Mail.php"; 

$_mailbox        =   Mail::factory('smtp', array( 
  'host'         => 'mail.wealthmakers.com', 
  'auth'         =>  TRUE, 
  'port'         =>  587,
  'username'     => 'dispatcher@wealthmakers.com', 
  'password'     => 'paZZ!!Wrd', 
  'persist'      =>  FALSE)); 

$_headers        =   array( 
  'From'         => 'Ken <info@wealthmakers.com>', 
  'To'           => 'kenneth.bedwell@gmail.com', 
  'Subject'      => 'test', 
  'MIME-Version' => '1.0'    ); 

$_to_eml  =  $_headers['To']; 

echo "before";
$_mail    =  $_mailbox->send( $_to_eml, $_headers, $_body ); 
echo "after $_mail";
if    (PEAR::isError($_mail)) { 
  echo date( " Y-m-d H:i:s  ->  " ) . "email to {$_to_eml} failed, details : " . $_mail->getMessage() . "\n\n";  
} else  { 
  echo date( " Y-m-d H:i:s  ->  " ) . "email sent to {$_to_eml} !\n\n";    
} 

?>

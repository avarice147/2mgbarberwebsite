 <?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age", "3600");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Credentials", "true");
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require './PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

// if (
//   null !== ($_POST['message'] ?? null) &&
//   null !== ($_POST['name'] ?? null) &&
//   null !== ($_POST['email'] ?? null) &&
//   null !== ($_POST['subject'] ?? null) &&
//   null !== ($_POST['selectedService'] ?? null)
// ) {
  if(isset($_POST['name'], $_POST['selectedService'], $_POST['email']))
  {
  $message = $_POST['message'];
  $fname = $_POST['name'];
  $email = $_POST['email'];
  $selectedService = $_POST['selectedService'];
  $csubject = $_POST['subject'];
  }

  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'elysiumsolssmtp@gmail.com';      //SMTP username
    $mail->Password   = 'peozynikyvzupjby';
    // if (!empty($file)) {
    //   $mail->addAttachment($location, $file);
    // } //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('elysiumsolssmtp@gmail.com', 'no reply');
   // $mail->addAddress($email);
   $mail->addAddress('2mgabucan@gmail.com '); //Add a recipient
    // $mail->addBCC('aarif6264@gmail.com'); // Add a Bcc recipient

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Requested service - ' . $email;

    $mail->Body ='<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
  
    <style type="text/css">
      table,
      td {
        color: #000000;
      }
  
      a {
        color: #0000ee;
        text-decoration: underline;
      }
  
      @media only screen and (min-width: 570px) {
        .u-row {
          width: 550px !important;
        }
  
        .u-row .u-col {
          vertical-align: top;
        }
  
        .u-row .u-col-100 {
          width: 550px !important;
        }
      }
  
      @media (max-width: 570px) {
        .u-row-container {
          max-width: 100% !important;
          padding-left: 0px !important;
          padding-right: 0px !important;
        }
  
        .u-row .u-col {
          min-width: 320px !important;
          max-width: 100% !important;
          display: block !important;
        }
  
        .u-row {
          width: calc(100% - 40px) !important;
        }
  
        .u-col {
          width: 100% !important;
        }
  
        .u-col>div {
          margin: 0 auto;
        }
      }
  
      body {
        margin: 0;
        padding: 0;
      }
  
      table,
      tr,
      td {
        vertical-align: top;
        border-collapse: collapse;
      }
  
      p {
        margin: 0;
      }
  
      .ie-container table,
      .mso-container table {
        table-layout: fixed;
      }
  
      * {
        line-height: inherit;
      }
  
      a[x-apple-data-detectors="true"] {
        color: inherit !important;
        text-decoration: none !important;
      }
    </style>
  </head>
  
  <body class="clean-body" style="
        margin: 0;
        padding: 0;
        -webkit-text-size-adjust: 100%;
        background-color: #f7f7f7;
        color: #000000;
      ">
    <table style="
          border-collapse: collapse;
          table-layout: fixed;
          border-spacing: 0;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
          vertical-align: top;
          min-width: 320px;
          margin: 0 auto;
          background-color: #f7f7f7;
          width: 100%;
        " cellpadding="0" cellspacing="0">
      <tbody>
        <tr style="vertical-align: top">
          <td style="
                word-break: break-word;
                border-collapse: collapse !important;
                vertical-align: top;
              ">
            <div class="u-row-container" style="padding: 0px; background-color: transparent">
              <div class="u-row" style="
                    margin: 0 auto;
                    min-width: 320px;
                    max-width: 550px;
                    overflow-wrap: break-word;
                    word-wrap: break-word;
                    word-break: break-word;
                    background-color: #AF804D;
                  ">
                <div style="
                      border-collapse: collapse;
                      display: table;
                      width: 100%;
                      background-color: transparent;
                    ">
                  <div class="u-col u-col-100" style="
                        max-width: 320px;
                        min-width: 550px;
                        display: table-cell;
                        vertical-align: top;
                      ">
                    <div style="width: 100% !important">
                      <div style="
                            padding: 0px;
                            border-top: 0px solid transparent;
                            border-left: 0px solid transparent;
                            border-right: 0px solid transparent;
                            border-bottom: 0px solid transparent;
                          ">
                        <table style="font-family: arial, helvetica, sans-serif" role="presentation" cellpadding="0"
                          cellspacing="0" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td style="
                                    overflow-wrap: break-word;
                                    word-break: break-word;
                                    padding: 30px;
                                    font-family: arial, helvetica, sans-serif;
                                  " align="left">
                                <div style="
                                      color: #ffffff;
                                      line-height: 140%;
                                      text-align: center;
                                      word-wrap: break-word;
                                    ">
                                  <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 24px;
                                          line-height: 33.6px;
                                        ">Requested Service</span>
                                  </p>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="u-row-container" style="padding: 0px; background-color: transparent">
              <div class="u-row" style="
                    margin: 0 auto;
                    min-width: 320px;
                    max-width: 550px;
                    overflow-wrap: break-word;
                    word-wrap: break-word;
                    word-break: break-word;
                    background-color: #ffffff;
                  ">
                <div style="
                      border-collapse: collapse;
                      display: table;
                      width: 100%;
                      background-color: transparent;
                    ">
                  <div class="u-col u-col-100" style="
                        max-width: 320px;
                        min-width: 550px;
                        display: table-cell;
                        vertical-align: top;
                      ">
                    <div style="width: 100% !important">
                      <div style="
                            padding: 0px;
                            border-top: 0px solid transparent;
                            border-left: 0px solid transparent;
                            border-right: 0px solid transparent;
                            border-bottom: 0px solid transparent;
                          ">
                        <table style="font-family: arial, helvetica, sans-serif" role="presentation" cellpadding="0"
                          cellspacing="0" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td style="
                                    overflow-wrap: break-word;
                                    word-break: break-word;
                                    padding: 10px;
                                    font-family: arial, helvetica, sans-serif;
                                  " align="left">
                                <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                  style="
                                      border-collapse: collapse;
                                      table-layout: fixed;
                                      border-spacing: 0;
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      vertical-align: top;
                                      border-top: 1px solid #f1f1f1;
                                      -ms-text-size-adjust: 100%;
                                      -webkit-text-size-adjust: 100%;
                                    ">
                                  <tbody>
                                    <tr style="vertical-align: top">
                                      <td style="
                                            word-break: break-word;
                                            border-collapse: collapse !important;
                                            vertical-align: top;
                                            font-size: 0px;
                                            line-height: 0px;
                                            mso-line-height-rule: exactly;
                                            -ms-text-size-adjust: 100%;
                                            -webkit-text-size-adjust: 100%;
                                          ">
                                        <span>&#160;</span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="u-row-container" style="padding: 0px; background-color: transparent">
              <div class="u-row" style="
                    margin: 0 auto;
                    min-width: 320px;
                    max-width: 550px;
                    overflow-wrap: break-word;
                    word-wrap: break-word;
                    word-break: break-word;
                    background-color: lightgrey;
                  ">
                <div style="
                      border-collapse: collapse;
                      display: table;
                      width: 100%;
                      background-color: transparent;
                    ">
                  <div class="u-col u-col-100" style="
                        max-width: 320px;
                        min-width: 550px;
                        display: table-cell;
                        vertical-align: top;
                      ">
                    <div style="width: 100% !important">
                      <div style="
                            padding: 0px;
                            border-top: 0px solid transparent;
                            border-left: 0px solid transparent;
                            border-right: 0px solid transparent;
                            border-bottom: 0px solid transparent;
                          ">
                        <table style="font-family: arial, helvetica, sans-serif" role="presentation" cellpadding="0"
                          cellspacing="0" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td style="
                                    overflow-wrap: break-word;
                                    word-break: break-word;
                                    padding: 10px 15px;
                                    font-family: arial, helvetica, sans-serif;
                                  " align="left">
                                <div style="
                                      line-height: 140%;
                                      text-align: left;
                                      word-wrap: break-word;
                                    ">
  
                                  <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 16px;
                                          line-height:  30.4px;
                                        "><em><strong>Subject:  </strong></em>'.$csubject.'
                                     </span>
                                  </p>
                                
                                    <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 16px;
                                          line-height: 30.4px;
                                        "><em><strong>Name:  </strong></em>'.$fname.'</span>
                                  </p>
                                   <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 16px;
                                          line-height: 30.4px;
                                        "><em><strong>Email Address:  </strong></em>:'.$email.'</span>
                                  </p>
                                  <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 16px;
                                          line-height: 30.4px;
                                        "><em><strong>Service:  </strong></em>:'.$selectedService.'</span>
                                  </p>
                                  <p style="font-size: 14px; line-height: 140%">
                                    <span style="
                                          font-size: 16px;
                                          line-height: 30.4px;
                                        "><em><strong>Message:  </strong></em>'.$message.'</span>
                                  </p>
                                 
            
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
  </html>';
    $mail->send();

    echo "Message has been sent";

  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  
<?php

    require("mailer.php");
    $from = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
	$email = $_POST["email"];
    $phone = $_POST["phone"];
    $appointment_day= $_POST["appointment_day"];
    $appointment_time= $_POST["appointment_time"];
	$issue_details= $_POST["issue"];
     
    $PHPMailer = new PHPMailer();
    $emailcontent = '
    <!DOCTYPE html>
    <html>
    <head>
    <title>CHIROPRACTIC - Care for Back Pain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
        table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} /* Remove spacing between tables in Outlook 2007 and up */
        img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

        /* RESET STYLES */
        img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
        table{border-collapse: collapse !important;}
        body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width: 525px) {

            /* ALLOWS FOR FLUID TABLES */
            .wrapper {
              width: 100% !important;
                max-width: 100% !important;
            }

            /* ADJUSTS LAYOUT OF LOGO IMAGE */
            .logo img {
              margin: 0 auto !important;
            }

            /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
            .mobile-hide {
              display: none !important;
            }

            .img-max {
              max-width: 100% !important;
              width: 100% !important;
              height: auto !important;
            }

            /* FULL-WIDTH TABLES */
            .responsive-table {
              width: 100% !important;
            }

            /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */

            .padding-copy {
                padding: 10px 5% 10px 5% !important;
                text-align: center;
            }

            .section-padding {
              padding: 50px 15px 50px 15px !important;
            }

        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
    </head>
    <body style="margin: 0 !important; padding: 0 !important;">

    <!-- ONE COLUMN SECTION -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 15px;" class="section-padding">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
                <tr>
                <td align="center" valign="top" width="500">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <!-- COPY -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Name: '.$first_name.' '.$last_name.'</td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Email: '.$email.'</td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Phone number: '.$phone.' </td>
                                            </tr>
                                            
											<tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Appointment Day: '.$appointment_day.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Appointment Time: '.$appointment_time.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Neck or Back Issue Details: '.$issue_details.'
                                                </td>
                                            </tr>
                                             
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
        
    </table>

    </body>
    </html>

    ';
    $PHPMailer->From = $from;
    $PHPMailer->Name = $first_name;
    //change where to mail sent 
    $PHPMailer->AddAddress('support@cffunnelstemplates.com');
    $PHPMailer->Subject = "Chiropractic - Free Consultation Form Submission";
    $PHPMailer->MsgHTML($emailcontent);
    if ($PHPMailer->Send()) {
        //echo 'SEND';
        $success=true;
    } else {
        $success=false;
    }
    $json_data = array('success' => $success);
    echo json_encode($json_data);
    exit();

?>
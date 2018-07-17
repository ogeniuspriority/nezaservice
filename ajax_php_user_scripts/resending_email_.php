<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    //$waitingCode = $_POST['waitingCode'];
    $id = $_POST['id'];
    $waitingPagexCheckEmail = $_POST['waitingPagexCheckEmail'];
    $waitingPagexCheckEmail = addslashes($waitingPagexCheckEmail);
    $the_rnd_code = mt_rand(1000, 9999);

    $date = date("Y-m-d H:i:s");
    //-----------
    $sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET
    ogenius_nds_db_normal_users_activated=1,ogenius_nds_db_normal_users_regdate='{$date}',
            ogenius_nds_db_normal_users_activation_code='{$waitingPagexCheckEmail}'
     WHERE 
    ogenius_nds_db_normal_users_id='{$id}'  AND 
    ogenius_nds_db_normal_users_email='{$the_rnd_code}'  ";

    if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
        //---select all from Database--

        $to = $waitingPagexCheckEmail;
        $subject = "HTML email";

        $message = "
                             <html>
                             <head>
                             <title>NDS Registration</title>
                             </head>
                             <p>code is:$the_rnd_code</p>
                             <div style='text-align:center;'>The code is valid for 15 minutes.</br>
                             You can also use this link: </br>
                             <a href='http://www.nezaservice.com/waiting_pagex.php?userId=$id&theCode_xxx_0000=$the_rnd_code&sfsfsf=131313&theaccountType_xxx_0000=individxbnnmm' style='color:blue;text-decoration:none;font-size:18px;'>Click here to activate the account!</a>
                             </div>

                             </body>
                             </html>
                             ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <registry@nds.com>' . "\r\n";
        $headers .= 'Cc: info@ogeniuspriority.com' . "\r\n";

        mail($to, $subject, $message, $headers);
        //--------------

        echo "1000";

    } else {
        echo "Resend Third";
    }
}
?>
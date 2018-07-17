<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $waitingCode = $_POST['waitingCode'];
    $id = $_POST['id'];
    $waitingPagexCheckEmail = $_POST['waitingPagexCheckEmail'];
    $waitingPagexCheckEmail = addslashes($waitingPagexCheckEmail);

    $date = date("Y-m-d H:i:s");
    //-----------
    $wn = 0;
    $sqlNDS_user = "SELECT * FROM ogenius_nds_db_normal_users WHERE 
ogenius_nds_db_normal_users_id='{$id}'  AND 
    ogenius_nds_db_normal_users_activation_code='{$waitingCode}'  ";
    if ($queryNDS_user = $database -> query($sqlNDS_user)) {
        while ($resG = $database -> fetch_array($queryNDS_user)) {
            $wn++;
            //----check timer date stamp--
            $Date = date("Y-m-d H:i:s");
            $datetime1 = new DateTime($resG['ogenius_nds_db_normal_users_regdate']);

            $datetime2 = new DateTime($Date);
            $interval = $datetime1 -> diff($datetime2);
            $hours = $interval -> format('%h');
            $minutes = $interval -> format('%i');
            $seconds = $interval -> format('%s');
            //---check if the codes match--
            $code = $resG['ogenius_nds_db_normal_users_activation_code'];
            if ($minutes < 15 && $code == $waitingCode) {
                //---------
                $sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET
    ogenius_nds_db_normal_users_activated=1,ogenius_nds_db_normal_users_regdate='{$Date}',
        ogenius_nds_db_normal_users_email='{$waitingPagexCheckEmail}'
     WHERE 
    ogenius_nds_db_normal_users_id='{$id}'  AND 
    ogenius_nds_db_normal_users_activation_code='{$waitingCode}'  ";

                if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
                    //---select all from Database--
                    session_start();
                    $_SESSION["ogenius_nds_user_id_x2309999_990"] = $id;

                    echo "1000";

                } else {
                    echo "Resend Third";
                }
            } else {
                echo "Resend second" . $code . "=" . $theCode;
            }

        }

    } else {
        echo "No code Provided";
        exit();
    }
    if ($wn == 0) {
        echo "The code is not valid or expired check your email again or resend the email using the resend button!";
        exit();
    }
} else {
    echo "Mistake!";
    exit();
}
?>
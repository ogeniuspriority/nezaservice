<?php
require_once ("../../includes/conn/config.php");
?>
<?php
require_once ("../../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();

    $thisId = $_POST['thisId']; 
    $date = date("Y-m-d H:i:s");

    //-----------------

    $sql = "UPDATE ogenius_nds_appendix_sessions SET    ogenius_nds_appendix_sessions_status='7' WHERE
    ogenius_nds_appendix_sessions_id='{$thisId}'";
    if ($query = $database -> query($sql)) {
        //------------------------------Send the mail with the right attatchment--------------------------------------------------

        //---------------------------
        echo "1000";

        //--------------------------------------------------------------------------------
    } else {
        echo "User has not  been created! " . mysqli_error();
    }
}
?>
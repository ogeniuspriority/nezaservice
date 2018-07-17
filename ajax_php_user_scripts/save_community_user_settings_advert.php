<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();

    $common_user_settings_the_id = $_POST['common_user_settings_the_id'];
    $community_user_settings_advert_start_date = $_POST['community_user_settings_advert_start_date'];
    $community_user_settings_advert_finish_date = $_POST['community_user_settings_advert_finish_date'];
    $community_user_settings_advert_start_time = $_POST['community_user_settings_advert_start_time'];
    $community_user_settings_advert_finish_time = $_POST['community_user_settings_advert_finish_time'];
    $community_user_settings_advert_name = $_POST['community_user_settings_advert_name'];
    $community_user_settings_up_img_val = $_POST['community_user_settings_up_img_val'];
    //-----------
    $community_user_settings_advert_name = addslashes($community_user_settings_advert_name);
    $date = date("Y-m-d H:i:s");

    //------------
    //$community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);

    $sql_999 = "INSERT INTO  ogenius_nds_db_adverts_proposed(ogenius_nds_db_adverts_proposed_user_id,
                                    ogenius_nds_db_adverts_proposed_start_date,
                                    ogenius_nds_db_adverts_proposed_end_date,
                                        ogenius_nds_db_adverts_proposed_start_time,
                                    ogenius_nds_db_adverts_proposed_end_time,
                                    ogenius_nds_db_adverts_proposed_name,
                                        ogenius_nds_db_adverts_proposed_filename,
                                        ogenius_nds_db_adverts_proposed_regdate                                 
        )VALUES('{$common_user_settings_the_id}','{$community_user_settings_advert_start_date}'
        ,'{$community_user_settings_advert_finish_date}','{$community_user_settings_advert_start_time}'
        ,'{$community_user_settings_advert_finish_time}','{$community_user_settings_advert_name}'
         ,'{$community_user_settings_up_img_val}','{$date}'
       )";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>
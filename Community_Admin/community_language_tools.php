<?php
require_once 'includes/header.php';
?>
<body class="maincontent" style="background: white;">
    <h4 style="text-align: center">Language Settings</h4>
    <input type="hidden" id="language_settings_0_value" value="Set A New Language" />
    <div class="language_settings">
        <table class="language_header" style="margin-left: 30%;">
            <td class="language_header_not_taken">
            <div onclick="menuHandleThis(this)" id="setANewLanguage">
                Set A New Language
            </div></td>
            <td  class="language_header_not_taken">
            <div onclick="menuHandleThis(this)" id="CreatedLanguage">
                Created Languages
            </div></td>
        </table>
        <div id="newLanguageMenu">
            <h4 style="text-align: center;">------Set A New Language Menu-------</h4>
            <div>
                <form id="newLanguageForm">
                    <table style="margin-left: 10%">
                        <tr>
                            <td>
                            <input type="text" id="newLanguageForm_language_name" placeholder="Language name" style="width: 230px;height: 30px;font-size: 16px;border-radius: 5px;background:#cdcdcd;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <input type="file" onchange="upload_New_Language_settings()" id="newLanguageForm_language_file" placeholder="Language name" style="width: 230px;height: 30px;font-size: 16px;border-radius: 5px;background:#cdcdcd;" />
                            </td><td><--Language file</td>
                        </tr>
                        <tr>
                            <td>
                            <input type="file" onchange="upload_New_Language_settings_logo()" id="newLanguageForm_language_file_logo" placeholder="Language name" style="width: 230px;height: 30px;font-size: 16px;border-radius: 5px;background:#cdcdcd;" />
                            </td><td><--Logo Image name</td>
                            <td><img id="uploaded_logo_image" src="" style="width: 150px;height: 150px;" /></td>
                        </tr>
                        <tr>
                            <td><span id="newLanguageForm_messenger" style="color: blue;"></span>
                            <input type="hidden" id="uploaded_file_name" />
                            </td>
                        </tr>
                        <tr>
                            <td><span id="newLanguageForm_messenger_logo" style="color: blue;"></span>
                            <input type="hidden" id="uploaded_file_name_logo" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <input type="button" onclick="saveTheUploadedLanguageFile()" id="newLanguageForm_btn" value="Create New Language"  style="font-size: 16px;border-radius: 5px;background:#cdcdcd;padding: 5px;" />
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
        <div id="CreatedLanguageList">
            <h4 style="text-align: center;">------Created Languages List-------</h4>
            <div>
                <?php
																require_once ("../includes/conn/config.php");
                ?>
                <?php
																require_once ("../includes/classes/database.php");
                ?>
                <?php
$sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings ORDER BY ogenius_nds_languages_for_settings_id DESC";
if ($querylanguage_tools = $database -> query($sqllanguage_tools)) {
//---------------------
while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {

                ?>
                <table style="margin-left: 40%">
                    <tr>
                        <td>
                            <img src="../lan_flags/<?php echo "".$res_lan['ogenius_nds_languages_for_settings_img_logo']; ?>" style="width: 50px;height: 50px;border-radius: 4px;" />
                        </td>
                        <td><h4><?php echo "".$res_lan['ogenius_nds_languages_for_settings_name_of_language']; ?></h4></td>
                        <td>
                        <input type="button" id="<?php echo "".$res_lan['ogenius_nds_languages_for_settings_id']; ?>" onclick="removeThisLanguage(this)" value="Remove" style="margin-top:-10px;font-size: 16px;border-radius: 5px;background:#cdcdcd;padding: 5px;" />
                        </td>
                    </tr>
                </table>
                <?php
																}}
                ?>

            </div>
        </div>
    </div>

</body>
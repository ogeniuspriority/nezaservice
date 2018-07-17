<?php
require_once 'includes/header.php';
?>
<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>

<body style="background: white;">
    <h4 style="text-align: center;">Home Page Gallery:</h4>
    <div>
        <div style="float: left;width: 47%;">
            <h4 style="text-align: center;">Upload Image From Device:</h4>
            <div style="border-radius: 4px;border: 1px solid skyblue;">
                <form id="formGalleryUploadNdsHome">
                    <table>
                        <tr>
                            <td></td>
                            <td>
                            <input  id="formGalleryUploadNdsHome_Image_Caption" type="text" style="padding: 5px;" placeholder="Image Caption" />
                            </td>
                        </tr>
                        <tr>
                            <td>Image from device:</td>
                            <td>
                            <input onchange="upload_formGalleryUploadNdsHome()" id="formGalleryUploadNdsHome_img_file" type="file" style="padding: 5px;"  />
                            </td>
                        </tr>
                        <tr>
                            <td>Image from device:</td>
                            <td><img id="homGalleryPreviewImage" style="width: 200px;height: 200px;" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="formGalleryUploadNdsHome_msg"></div>
                            <input type="hidden" id="formGalleryUploadNdsHome_value" />
                            <input type="button" onclick="saveTheHomeImage()" value="Add picture to gallery" />
                            </td>
                        </tr>
                    </table>
                </form>

            </div>

        </div>
        <div style="float: left;width: 47%;">
            <h4 style="text-align: center;">All uploaded images:</h4>
            <div style="border-radius: 4px;border: 1px solid skyblue;overflow-y: scroll;height: 700px;" >
 <?php
                    require_once ("../includes/conn/config.php");
                    ?>
                    <?php
                    require_once ("../includes/classes/database.php");
                    ?>
                    <?php
$sql_home_gallery_img = "SELECT * FROM  ogenius_nds_db_home_page_gallery WHERE     ogenius_nds_db_home_page_gallery_active='1' ORDER BY     ogenius_nds_db_home_page_gallery_id DESC";
if ($query_home_gallery_img= $database -> query($sql_home_gallery_img)) {
//---------------------
while ($res_home_gallery_img = mysqli_fetch_array($query_home_gallery_img)) {

                    ?>
                    <table>
                        <tr>
                            <td><img src="../homePage_images/<?php echo "".$res_home_gallery_img['ogenius_nds_db_home_page_gallery_image']; ?>" style="width: 250px;height: 250px;border-radius: 8px;" /></td>
                        </tr>
                        <tr>
                            <td><div><?php echo "".$res_home_gallery_img['ogenius_nds_db_home_page_gallery_image_caption']; ?></div></td>
                        </tr>
                        <tr>
                            <td><input type="button" value="Delete" onclick="ndsDEleteHomeimgPic(this)" id="<?php echo "".$res_home_gallery_img['ogenius_nds_db_home_page_gallery_id']; ?>"  /></td>
                        </tr>
                    </table>
                      
                    <?php
                    }}
                    ?>
            </div>

        </div>
        <div style="clear: both;"></div>
    </div>

</body>


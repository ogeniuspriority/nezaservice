<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    require_once 'includes/header.php';
    ?>
    <?php
    require_once ("../includes/conn/config.php");
    ?>
    <?php
    require_once ("../includes/classes/database.php");
    ?>
    <body class="startcolcenter">
        <style type="text/css">
            select,
            option{
                color: black;

            }
        </style>
        <h1 class="page-header">Edit home headings</h1>
        <div class="container">
            <fieldset class="col-md-4">
                <legend>heading one</legend>

                <div>

                    <input class="form-control" id="heading1title" placeholder="enter heading title" />
                    <select class="form-control" id="heading1lan">
                        <option value="" selected="">Choose language</option>
                        <?php
                        $sql_upper_text = "SELECT * FROM ogenius_nds_languages_for_settings";
                        if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                            while ($row = mysqli_fetch_assoc($query_upper_text)) {
                                ?> 
                                <option value="<?php echo $row['ogenius_nds_languages_for_settings_name_of_language'] . "" ?>"> <?php echo $row['ogenius_nds_languages_for_settings_name_of_language'] . "" ?></option>
                                <?php
                            }
                        }
                        ?>



                    </select>
                    <textarea class="form-control" id="heading1text" placeholder="enter text"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading1()" value="Save heading 1" />
                </div>
            </fieldset>
            <fieldset class="col-md-4">
                <legend>heading two</legend>

                <div>

                    <input class="form-control" id="heading2title" placeholder="enter heading title" />
                    <select class="form-control"  id="heading2lan">
                        <option value="" selected="">Choose language</option>
                        <?php
                        $sql_upper_text = "SELECT * FROM ogenius_nds_languages_for_settings";
                        if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                            while ($row = mysqli_fetch_assoc($query_upper_text)) {
                                ?> 
                                <option value="<?php echo $row['ogenius_nds_languages_for_settings_name_of_language'] . "" ?>"> <?php echo $row ['ogenius_nds_languages_for_settings_name_of_language'] . "" ?></option>

                                <?php
                            }
                        }
                        ?>



                    </select>
                    <textarea class="form-control" id="heading2text" placeholder="enter text"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading2()" value="Save heading 2" />
                </div>
            </fieldset>
            <fieldset class="col-md-4">
                <legend>heading three</legend>

                <div>

                    <input class="form-control" id="heading3title" placeholder="Enter heading title" />
                    <select class="form-control"  id="heading3lan">
                        <option value="" selected="">Choose language</option>
                        <?php
                        $sql_upper_text = "SELECT * FROM ogenius_nds_languages_for_settings";
                        if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                            while ($row = mysqli_fetch_assoc($query_upper_text)) {
                                ?> 
                                <option value="<?php echo $row['ogenius_nds_languages_for_settings_name_of_language'] . "" ?>"> <?php echo $row ['ogenius_nds_languages_for_settings_name_of_language'] . "" ?></option>

                                <?php
                            }
                        }
                        ?>



                    </select>
                    <textarea class="form-control" id="heading3text" placeholder="Enter text"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading3()" value="Save heading 3" />
                </div>
            </fieldset>
        </div>
    </body>

</html>

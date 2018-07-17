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
        <h1 class="page-header">Edit home headings</h1>
        <fieldset>
            <legend>heading1</legend>

            <div class="col-md-4">
                <label>Heading 1 - English</label>
                <input class="form-control" id="heading1title_en" placeholder="enter heading title" />
                <textarea class="form-control" id="heading1text_en" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 1 - French</label>
                <input class="form-control" id="heading1title_fr" placeholder="enter heading title" />
                <textarea class="form-control" id="heading1text_fr" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 1 - Kinyarwanda</label>
                <input class="form-control" id="heading1title_kiny"  placeholder="enter heading title"/>
                <textarea class="form-control" id="heading1text_kiny" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-12">
                <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading1()" value="Save heading 1" />
            </div>
        </fieldset>
        <fieldset>
            <legend>heading2</legend>

            <div class="col-md-4">
                <label>Heading 2 - English</label>
                <input class="form-control" id="heading2title_en" placeholder="enter heading title" />
                <textarea class="form-control" id="heading2text_en" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 2 - French</label>
                <input class="form-control" id="heading2title_fr" placeholder="enter heading title" />
                <textarea class="form-control" id="heading2te_fr" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 2 - Kinyarwanda</label>
                <input class="form-control" id="heading2title_kiny"  placeholder="enter heading title"/>
                <textarea class="form-control" id="heading2text_kiny" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-12">
                <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading2()" value="Save heading 2" />
            </div>
        </fieldset>
        <fieldset>
            <legend>heading3</legend>

            <div class="col-md-4">
                <label>Heading 3 - English</label>
                <input class="form-control" id="heading3title_en" placeholder="enter heading title" />
                <textarea class="form-control" id="heading3text_en" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 3 - French</label>
                <input class="form-control" id="heading3title_fr" placeholder="enter heading title" />
                <textarea class="form-control" id="heading3te_fr" placeholder="enter text"></textarea>
            </div>
            <div class="col-md-4">
                <label>Heading 3 - Kinyarwanda</label>
                <input class="form-control" id="heading3title_kiny"  placeholder="enter heading title"/>
                <textarea class="form-control" id="heading3text_kiny" placeholder="enter text"></textarea>
            </div>

            <div class="col-md-12">
                <input type="button" class="form-control btn btn-primary" onclick="NDS_save_home_heading3()" value="Save heading 3" />
            </div>
        </fieldset>
    </body>

</html>

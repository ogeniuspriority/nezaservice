<body>
        <script src="jquery/jquery.js" type="text/javascript"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>

    <!-- Date picker -->
    <script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>

    <h4 style="margin-top: 400px;">shfisfb sfibs fnsjobfu sniofbsu </h4>
    <input  style="font-size: 14px;" type="text" id="dob2" />
    <input  style="font-size: 14px;" type="text" id="restricting" />

    <script type="text/javascript">
        $('#dob2').datepicker("option", "onSelect", function(dateText, inst) {
            var dob = $(this).datepicker('getDate');
            var age = GetAge(dob);
            if (age >= 16 && age < 18) {
                alert("The minimum age requirement for supplementary card applicant is 18 years old. For applicant aged 16 and 17, and are going overseas to study, please submit the letter of acceptance from the education institution.");
            }else{
                alert("Bullshit!");
            }
        });

        function GetAge(birthDate) {
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }


        $("#restricting").datepicker({
            yearRange : "-20:+0", // this is the option you're looking for
            showOn : "both",
            buttonImageOnly : true
        });

    </script>

</body>

</html>
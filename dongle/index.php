<?php
$DIR = __DIR__;
//echo $DIR;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href='bower_components/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

<style type="text/css">
        #results{
            height:100%;
            overflow:auto;
        }

</style>
<script type="text/javascript" src="jquery.min.js"></script>
<!--<script type="text/javascript" src="servidores.js"></script>-->
<script>
$(document).ready(function(){
        setInterval(function(){
                $("#results").load('devices.php')
    }, 1000);
});
</script>

<script type="text/javascript">
<!--
function restart(gsm) {

	var id = gsm.id

	$.post("restart.php",{ gsm: id});
	alert("Dongle "+id+" reiniciado com sucesso");
//	return false;
}
//-->
function mudagsm(md) {

        var id2 = md.id

        $.post("2g.php",{ gsm: id2});
        alert("Dongle "+id2+" aplicado em 2G com sucesso");
//      return false;
}
//-->
function mudawcdma(md2) {

        var id3 = md2.id

        $.post("3g.php",{ gsm: id3});
        alert("Dongle "+id3+" aplicado em 3G com sucesso");
//      return false;
}
//-->
function tempo(md3) {

        var id4 = md3.id

        $.post("zera_tempo.php",{ gsm: id4});
        alert("Tempo de chamada do Dongle "+id4+" reiniciado com sucesso!");
//      return false;
}
//-->

</script>


</head>

<body bgcolor='#c5c5c5'>
   <!-- topbar starts --> 
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Alternar navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"> </a>

            <!-- theme selector starts -->
        </div>
    </div>
    <!-- topbar ends -->

<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>Você precisa ter <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    ativado para usar esta pagina.</p>
            </div>
        </noscript>
<div class="col-md-4"></div><div class="col-md-4 center"><img  align="center" src="img/aztell20.png" /></div><div class="col-md-4"></div>

        <div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
            <div>
</div>

<div class="row">
<!--<div id="rel"></div>

            <div id="rel">
                <h4>Monitor:</h4>
            </div>-->
    <div class="box col-md-10 center">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-signal blue"></i> Status GSM</h2>

            </div>
            <div class="box-content">
                <div class="box-content">
		   <div class=" row">
<div align="center" id="results"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <hr>
      <footer class="row ">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">AzCall
		</a> 2016</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Alimentado por: <a
             target="_blank"   href="#">AzTell</a></p>
    </footer>
</div><!--/.fluid-container-->
<!-- external javascript -->


<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

<?php
    $this->load->view("/szokasos/header.php");
?>
</head>
<body>
<div id="templatemo_container_wrapper">
<div id="templatemo_container">
    <div id="templatemo_banner">
    <div id="site_title">
            <h1><a href="<?= base_url("index.php");?>">Faresz-web<span>web programozás</span></a></h1>
    </div>

        <div id="templatemo_menu"> <!-- head menüsáv -->
            <?php $this->load->view('contents/head_menu.php');?>
            
        </div><!-- head menüsáv vége-->
    </div>

    <div id="templatemo_content">
    	
        <div id="side_column">
            <?php $this->load->view('contents/lateral_menu.php');?>
        </div> <!-- end of side column -->
        
        <div id="main_column">
            <?php $this->load->view('contents/connect.php');?>
        <div class="cleaner"></div>
        </div> <!-- end of main column -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of content -->
<?php
    $this->load->view("/szokasos/footer.php");
?>


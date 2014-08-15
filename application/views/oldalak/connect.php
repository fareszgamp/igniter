<?php
    $this->load->helper('html');
    $this->load->view("/szokasos/header.php");
?>
    <div id="templatemo_content">
    	
        <div id="side_column"><!-- Ball menüsáv -->
        
        	<div class="side_column_box">
            
            	<h2><span></span>Menü</h2>
                
                <div class="side_column_box_content">
                	<div class="news_section">
                        <h3><a href="#">Etiam tempus tellus eget</a></h3>
                        <a href="#"><img class="image_wrapper" src="<?= base_url();?>assect/images/templatemo_image_04.jpg" alt="flower" /></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ipsum sem, ut lobortis dui.</p>
                  </div>
                        
                    <div class="news_section">
                        <h3><a href="#">Nam quis aliquet quam</a></h3>
                        <a href="#"><img class="image_wrapper" src="<?= base_url();?>assect/images/templatemo_image_03.jpg" alt="tiger" /></a>                        
                      <p>Sed pharetra neque vel mauris auctor ornare. Maecenas urna lorem, consectetur eget consectetur id.</p>
                  </div>
					
					<div class="button_01"><a href="#">View All</a></div>
                </div>
                
                <div class="bottom"></div>
            </div>
            
            <div class="side_column_box">
            
            	<h2><span></span>Newsletter</h2>
                
                <div class="side_column_box_content">

                    <form action="#" method="get">
                        <input type="text" value="Enter your email address..." name="q" size="10" class="inputfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        
                        <input type="submit" name="Search" value="Subscribe" alt="Search" class="submit_button" title="Search" />
                    </form>
                    
                    <div class="cleaner"></div>
                </div>
                
                <div class="bottom"></div>
            </div>
            
        
        </div> <!-- Ball menüsáv vége-->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            
                <h2><span></span>Üzenet</h2>
                
                <div class="main_column_section_content">
				
                <?= form_fieldset('Üzenet a szerkesztőnek');?>
                <?= form_open();?>
                <?= form_label('E-mail','','id="email"').'<br>';?>
                <?= form_input('email','','id="email" required').'<br>';?>
                <?= form_label('Üzenet','','id="message"').'<br>';?>
                <?= form_textarea('mesage','','id="message" required').'<br>';?>
                <?= form_submit('submit','Küldés');?>
                <?= form_reset('reset','Töröl');?>
				<?= form_fieldset_close();?>
                <?= form_close();?>

                </div>
              <div class="cleaner"></div>
                <div class="bottom"></div>
            </div>
            
        
        	
            <div class="cleaner"></div>
        </div> <!-- end of main column -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of content -->
<?php
    $this->load->view("/szokasos/footer.php");
?>


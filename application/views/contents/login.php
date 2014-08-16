<div id="main_column">

    <div class="main_column_section">       

        <h2><span></span>Belépés</h2>

        <div class="main_column_section_content">

        <?= validation_errors(); ?>
        <?= form_fieldset('Belépés');?>
        <?= form_open();?>
        <?= form_label('E-mail','','id="email"').'<br>';?>
        <?= form_input('email','','id="email" required').'<br>';?>
        <?= form_label('Jelszó','','id="password"').'<br>';?>
        <?= form_password('password','','id="password" required').'<br>';?>
        <?= form_label('Jelszó mégegyszer','','id="passconf"').'<br>';?>
        <?= form_password('passconf','','id="passconf" required').'<br>';?>
        <?= form_submit('submit','Belépés');?>
        <?= form_reset('reset','Töröl');?>
        <?= form_fieldset_close();?>
        <?= form_close();?>


        </div>
      <div class="cleaner"></div>
        <div class="bottom"></div>
    </div>



    <div class="cleaner"></div>
</div> <!-- end of main column -->

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

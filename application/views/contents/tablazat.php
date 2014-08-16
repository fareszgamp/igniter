<div id="main_column">

    <div class="main_column_section">       

        <h2><span></span>Táblázat</h2>

        <div class="main_column_section_content">
        <?php
            $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="5" cellspacing="5" class="mytable">' );

            $this->table->set_template($tmpl); 
            $data = array(
                         array('Name', 'Color', 'Size'),
                         array('Fred', 'Blue', 'Small'),
                         array('Mary', 'Red', 'Large'),
                         array('John', 'Green', 'Medium')
                         );

            echo $this->table->generate($data); 
        ?>
        </div>
      <div class="cleaner"></div>
       
    </div>



    <div class="cleaner"></div>
</div> <!-- end of main column -->

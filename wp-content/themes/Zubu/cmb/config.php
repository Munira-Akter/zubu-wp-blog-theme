<?php


    function custom_meta_box(){ 

        new_cmb2_box([
            'title' => 'Custom Box', 
            'id' => 'zubu_cm', 
            'object_types' => 'post', 

        ]);
    }

    add_action('cmb2_init' , 'custom_meta_box')

?>
<?php

$tabs_divs = '';

function single_group($atts, $content = null ) {
    global $tabs_divs;

    $tabs_divs = '';

    $output = '<div class="cont_navegation" id="navegationcont"><ul';
    $output.='>'.do_shortcode($content).'</ul></div>';
    $output.= '<div class="single_detalles">'.$tabs_divs.'</div>';

    return $output;  
}  

///////////content
function single($atts, $content = null) {  
    global $tabs_divs;
      ob_start();
    extract(shortcode_atts(array(  
        'id' => '',
        'title' => '', 
        'class' => '',
    ), $atts));  

    if(empty($id))
        $id = 'side-tab'.rand(100,999);

    $output = '
        <li>
            <a href="#'.$id.'" data="'.$id.'" class="'.$class.'">
               <span>
                  '.$title.'
               </span>
            </a>
        </li>
    ';
     
    $tabs_divs.= '<div class="secciont-tab '.strtolower($title).'_content" id="'.$id.'">'.  $content.'</div> ';
   
    return $output;
}

add_shortcode('conts', 'single_group');
add_shortcode('cont', 'single');

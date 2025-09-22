<?php 
 class Createpost {

    public function __construct(){
      add_shortcode( 'map', array( $this, 'mapaPost' ) );
      add_shortcode( 'gal', array( $this, 'galeriaPost' ) );
    }   
   public function mapaPost() { 
      ob_start();
         get_template_part('template/map');
         ob_get_contents();
      return  ob_get_clean();
   }   
   public function galeriaPost() { 
        ob_start();
        get_template_part('template/galeria');
        ob_get_contents();
        return  ob_get_clean();
    }
  
}
new Createpost();

?>
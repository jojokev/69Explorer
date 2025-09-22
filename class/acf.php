<?php


function my_custom_fields_metabox() {
  $current_screen = get_current_screen();
  if ($current_screen->post_type === 'tour') {
      add_meta_box('custom-fields-metabox', 'Campos personalizados', 'my_custom_fields', 'tour', 'normal', 'high');
  }
  if ($current_screen->post_type === 'page') {
      add_meta_box('custom-fields-metabox-page', 'Campos personalizados Pagina', 'my_custom_fields_page', 'page', 'normal', 'high');
  }
    
}
add_action( 'add_meta_boxes', 'my_custom_fields_metabox' );

function my_custom_fields($post) {
  $custom_field_lugares__visitar = get_post_meta( $post->ID, 'custom_field_lugares_visitar', true );
  $custom_field_grupo = get_post_meta( $post->ID, 'custom_field_grupo', true );
  $custom_field_altitud = get_post_meta( $post->ID, 'custom_field_altitud', true );
  $custom_field_dificultad = get_post_meta( $post->ID, 'custom_field_dificultad', true );
  $custom_field_estilo = get_post_meta( $post->ID, 'custom_field_estilo', true );
  $custom_field_precio = get_post_meta( $post->ID, 'custom_field_precio', true );
  $custom_field_lugares = get_post_meta( $post->ID, 'custom_field_lugares', true );

  wp_nonce_field( 'custom_fields_metabox', 'custom_fields_metabox_nonce' );?>
 <style>
  .content__cp
  {
    width: 100%;
    overflow:hidden
  }
  .content__cp div
  {
    border-top:1px solid #ddd;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding: 15px 0;
  }
  .content__cp strong
  {
    width:15%
  }
  .content__cp input
  {
    width: 85%;
    border-color: #ddd;
    height: 40px;
    font-size: 13px;
    outline: none;
  }
 </style>
  <div class="content__cp">

    <div>
      <strong>
        Duracion del viaje
      </strong>
      <input type="number"  value="<?php echo sanitize_text_field($custom_field_lugares__visitar);?>"  name="custom_field_lugares_visitar">
    </div>
    <div>
      <strong>
        Lugares a visitar
      </strong>
      <input type="text"  value="<?php echo sanitize_text_field($custom_field_lugares);?>"  name="custom_field_lugares">
    </div>
    <div>
      <strong>
        Grupo pasajeros
      </strong>
      <input type="text"  value="<?php echo sanitize_text_field($custom_field_grupo);?>"  name="custom_field_grupo">
    </div>
    <div>
      <strong>
        Altitud maxima tour
      </strong>
      <input type="text"  value="<?php echo sanitize_text_field($custom_field_altitud);?>"  name="custom_field_altitud">
    </div>
    <div>
      <strong>
        Dificultad tour
      </strong>
      <input type="text"  value="<?php echo sanitize_text_field($custom_field_dificultad);?>"  name="custom_field_dificultad">
    </div>
    <div>
      <strong>
       Estilo del tour
      </strong>
      <input type="text" type="text"  value="<?php echo sanitize_text_field($custom_field_estilo);?>"  name="custom_field_estilo">
    </div>
    <div>
      <strong>
       Precio del tour grupal
      </strong>
      <input type="text" type="text"  value="<?php echo sanitize_text_field($custom_field_precio);?>"  name="custom_field_precio">
    </div>
  </div>
<?php }
function my_custom_fields_page($post) {
  $custom_field_lugares_visitar = get_post_meta($post->ID, 'custom_field_lugares_visitar', true);
  $custom_field_titulo_menu = get_post_meta($post->ID, 'custom_field_titulo_menu', true);
  $custom_field_titulo_menu2 = get_post_meta($post->ID, 'custom_field_titulo_menu2', true);
  $custom_field_imagen_portada = get_post_meta($post->ID, 'custom_field_imagen_portada', true);
  $custom_field_contenido_editor = get_post_meta($post->ID, 'custom_field_contenido_editor', true);

  wp_nonce_field('custom_fields_metabox_page', 'custom_fields_metabox_nonce_page'); ?>
  <style>
    .content__cp
    {
      width: 100%;
      overflow:hidden
    }
    .cont_wp
    {
      border-top:1px solid #ddd;
      display:flex;
      align-items:center;
      padding: 15px 0;
    }
    .content__cp div select
    {
      border-color: #ddd;
      height: 40px;
      font-size: 13px;
      outline: none;
      width: 100%;
    }
    .content__cp strong
    {
      width:15%
    }
    .cont_wp input
    {
      border-color: #ddd;
      height: 40px;
      width: 81%
    }
    .cargar_imagen
    {
      color: #fff;
      border: #E91E3E;
      background-color: #E91E3E;
      margin-left: 15px;
      height: 40px;
      width: 150px;
      border-radius: 5px;
      outline: none;
      cursor: pointer;
    }
    .w-100{
      width: 100% !important
    }
    div#wp-custom_field_contenido_editor-wrap {
      width: 100%;
    }
  </style>
  <div class="content__cp">
      <div class="cont_wp" style="padding: 15px 0; border-bottom: 1px solid #ddd; margin-bottom: 15px;">
          <strong>Categoria</strong>
          <select name="custom_field_lugares_visitar" id="custom_field_lugares_visitar">
            <option value="">Seleccionar</option>
            <?php
              $categories = get_categories();
              foreach ($categories as $category) {
                $selected = ($custom_field_lugares_visitar == $category->term_id) ? 'selected' : '';
                echo '<option value="' . esc_attr($category->term_id) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
              }
            ?>
          </select>

      </div>
      <div class="cont_wp">
          <strong>Imagen portada</strong>
          <br>
          <input type="text" name="custom_field_imagen_portada" id="custom_field_imagen_portada" class="regular-text" value="<?php echo esc_url($custom_field_imagen_portada); ?>" />
          <button type="button" class="cargar_imagen" id="upload_image_button">Cargar Imagen</button>
      </div>
      <div class="cont_wp">
        <strong>
          Titulo menu 
        </strong>
        <input type="text"  class="w-100" value="<?php echo sanitize_text_field($custom_field_titulo_menu);?>"  name="custom_field_titulo_menu">
      </div> 
      <div class="cont_wp">
        <strong>
          Titulo menu 2
        </strong>
        <input type="text"  class="w-100" value="<?php echo sanitize_text_field($custom_field_titulo_menu2);?>"  name="custom_field_titulo_menu2">
      </div> 
      <div class="cont_wp" style="flex-direction: column;align-items: flex-start;">
        <strong style="border-bottom: 1px solid #ddd;padding-bottom : 20px ">
          Texto corto
        </strong>
        <?php        
          wp_editor($custom_field_contenido_editor, 'custom_field_contenido_editor', array(
              'textarea_name' => 'custom_field_contenido_editor',
              'textarea_rows' => 10,
          ));
        ?>
      </div> 
  </div>

  <script>
      jQuery(document).ready(function ($) {
          $('#upload_image_button').click(function () {
              var frame = wp.media({
                  title: 'Seleccione o Cargue una Imagen',
                  button: {
                      text: 'Usar esta imagen'
                  },
                  multiple: false
              });

              frame.on('select', function () {
                  var attachment = frame.state().get('selection').first().toJSON();
                  $('#custom_field_imagen_portada').val(attachment.url);
              });

              frame.open();
          });
      });
  </script>
<?php }

function my_custom_fields_save_data($post_id) {
  if ( ! isset( $_POST['custom_fields_metabox_nonce'] ) ) {
    return $post_id;
  }
  $nonce = $_POST['custom_fields_metabox_nonce'];
    if ( !wp_verify_nonce( $nonce, 'custom_fields_metabox' ) ) {
    return $post_id;
  }
  if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return $post_id;
  }
  if ( $_POST['post_type'] == 'page' ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
      return $post_id;
  }
   
  $old_custom_field_lugares__visitar = get_post_meta( $post_id, 'custom_field_lugares_visitar', true );
  $old_custom_field_grupo = get_post_meta( $post_id, 'custom_field_grupo', true );
  $old_custom_field_altitud = get_post_meta( $post_id, 'custom_field_altitud', true );
  $old_custom_field_dificultad = get_post_meta( $post_id, 'custom_field_dificultad', true );
  $old_custom_field_estilo = get_post_meta( $post_id, 'custom_field_estilo', true );
  $old_custom_field_precio = get_post_meta( $post_id, 'custom_field_precio', true );
  $old_custom_field_lugares = get_post_meta( $post_id, 'custom_field_lugares', true );

  $custom_field_lugares__visitar = sanitize_text_field( $_POST['custom_field_lugares_visitar'] );
  $custom_field_grupo= sanitize_text_field( $_POST['custom_field_grupo'] );
  $custom_field_altitud= sanitize_text_field( $_POST['custom_field_altitud'] );
  $custom_field_dificultad= sanitize_text_field( $_POST['custom_field_dificultad'] );
  $custom_field_estilo= sanitize_text_field( $_POST['custom_field_estilo'] );
  $custom_field_precio= sanitize_text_field( $_POST['custom_field_precio'] );
  $custom_field_lugares= sanitize_text_field( $_POST['custom_field_lugares'] );

  update_post_meta( $post_id, 'custom_field_lugares_visitar', $custom_field_lugares__visitar, $old_custom_field_lugares__visitar );
  update_post_meta( $post_id, 'custom_field_grupo', $custom_field_grupo, $old_custom_field_grupo );
  update_post_meta( $post_id, 'custom_field_altitud', $custom_field_altitud, $old_custom_field_altitud );
  update_post_meta( $post_id, 'custom_field_dificultad', $custom_field_dificultad, $old_custom_field_dificultad );
  update_post_meta( $post_id, 'custom_field_estilo', $custom_field_estilo, $old_custom_field_estilo );
  update_post_meta( $post_id, 'custom_field_precio', $custom_field_precio, $old_custom_field_precio );
  update_post_meta( $post_id, 'custom_field_lugares', $custom_field_lugares, $old_custom_field_lugares );
}
function my_custom_fields_save_data_page($post_id) {
  if (!isset($_POST['custom_fields_metabox_nonce_page']) || !wp_verify_nonce($_POST['custom_fields_metabox_nonce_page'], 'custom_fields_metabox_page')) {
      return $post_id;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
  }

  if ($_POST['post_type'] == 'page') {
      if (!current_user_can('edit_page', $post_id)) {
          return $post_id;
      }
  } else {
      if (!current_user_can('edit_post', $post_id)) {
          return $post_id;
      }
  }

  update_post_meta($post_id, 'custom_field_imagen_portada', sanitize_text_field($_POST['custom_field_imagen_portada']));
  update_post_meta($post_id, 'custom_field_titulo_menu', sanitize_text_field($_POST['custom_field_titulo_menu']));
  update_post_meta($post_id, 'custom_field_titulo_menu2', sanitize_text_field($_POST['custom_field_titulo_menu2']));

  if (isset($_POST['custom_field_contenido_editor'])) {
      update_post_meta($post_id, 'custom_field_contenido_editor', wp_kses_post($_POST['custom_field_contenido_editor']));
  }
}


add_action( 'save_post', 'my_custom_fields_save_data' );
add_action('save_post', 'my_custom_fields_save_data_page');
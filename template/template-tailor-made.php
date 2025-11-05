<?php
  // Template Name: Tailor Made
  // Template Post Type: page
  get_header(); 
?>

<main class="position-relative">
  <!-- Titulo Tailor made -->
  <section class="bg-section py-default position-relative">
      <div class="container text-center">
        <h1 class="text-center fs-1 fw-bold mb-5"><?php the_title(); ?></h1>

        <div class="row position-relative">
          <div class="col-4 position-relative">
            <span class="position-absolute start-50 top-10 w-50 border-2 border-bottom border-primary z-1"></span>
            <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 z-2 position-relative">1</span>
            <p class="m-0 mt-4 h6 fw-bold-600"><?php echo PearTheme::lang('Choose Your Destination','Elija su destino','选择您的目的地','Escolha o seu destino'); ?></p>
          </div>
          <div class="col-4 position-relative">
            <span class="position-absolute start-50 top-10 w-100 translate-middle-x border-2 border-bottom border-primary z-1"></span>
            <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 z-2 position-relative">2</span>
            <p class="m-0 mt-4 h6 fw-bold-600"><?php echo PearTheme::lang('Select your preferences','Seleccione sus preferencias','选择您的偏好设置','Selecione suas preferências'); ?></p>
          </div>
          <div class="col-4 position-relative">
            <span class="position-absolute start-0 top-10 w-50 border-2 border-bottom border-primary z-1"></span>
            <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 z-2 position-relative">3</span>
            <p class="m-0 mt-4 h6 fw-bold-600"><?php echo PearTheme::lang('Send us your data','Envíenos sus datos','请将您的数据发送给我们','Envie-nos seus dados'); ?></p>
          </div>
        </div>
      </div>
  </section>

  <!-- Forms Tailor Made -->
  <section class="py-default">
    <div class="container position-relative ">
      <form id="contact_form" class="row" data-action="<?php echo get_template_directory_uri()?>/inc/src/pear-email.php" action="#" method="post">
        <div class="col-12 col-lg-10 mx-auto">
          <!-- Text DEscription -->
          <article class="mb-45 text-center">
            <?php the_content(); ?>
          </article>

          <!-- Section 1: Choose Your Destination -->
          <div class="px-3 py-3 border rounded-3 mb-45" style="background-color: #FAFAFA;">
              <div class="mb-4 d-flex align-items-center">
                <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 z-2 position-relative mb-0">1</span>
                <h2 class="ps-2 mb-0 h5 fw-bold-600">
                  <?php echo PearTheme::lang('Choose Your Destination','Elija su destino','选择您的目的地','Escolha o seu destino'); ?>
                </h2>
              </div>
              <div class="row gy-3 gx-3">
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="machupicchu" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-machupicchu.webp" alt="Imagen de Machupicchu" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Machupicchu</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Machupicchu" name="destinos[]" id="machupicchu" class="form-check-input" checked>
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="inca_trail_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-inca-trail.webp" alt="Imagen de Inca Trail" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Inca Trail Trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Inca trail trek" name="destinos[]" id="inca_trail_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="salkantay_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-salkantay.webp" alt="Imagen de Salkantay Trek" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Salkantay trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Salkantay trek" name="destinos[]" id="salkantay_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="lares_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-lares-trek.webp" alt="Imagen de Lares Trek" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Lares Trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Lares trek" name="destinos[]" id="lares_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="huchuy_qosqo_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-huchuy-qosqo.webp" alt="Imagen de Huchuy Qosqo Trek" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Huchuy Qosqo Trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Huchuy qosqo trek" name="destinos[]" id="huchuy_qosqo_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="choquequirao_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-choquequirao.webp" alt="Imagen de Choquequirao Trek" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Choquequirao Trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Choquequirao trek" name="destinos[]" id="choquequirao_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="rainbow_mountain" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-rainbown-mountain.webp" alt="Imagen de Rainbow Mountain" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Rainbow Mountain</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Rainbow mountain" name="destinos[]" id="rainbow_mountain" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="sacred_valley" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-sacred-valley.webp" alt="Imagen de Sacred Valley" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Sacred Valley</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Sacred valley" name="destinos[]" id="sacred_valley" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="city_tour_cusco" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-city-cusco.webp" alt="Imagen de City Tour Cusco" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">City Tour Cusco</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="City Tour Cusco" name="destinos[]" id="city_tour_cusco" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="ausangate_trek" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-ausangate-trek.webp" alt="Imagen de Ausangate Trek" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Ausangate Trek</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Ausangate trek" name="destinos[]" id="ausangate_trek" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="humantay_lake" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-humantay-lake.webp" alt="Imagen de Humantay Lake" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Humantay Lake</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Humantay lake" name="destinos[]" id="humantay_lake" class="form-check-input">
                    </div>
                  </label>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <label for="qeswachaka" class="d-flex align-items-center bg-white border rounded-3 overflow-hidden position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/destinos/img-queswachaqua.webp" alt="Imagen de Qeswachaka" class="wx-100 hx-90 object-fit-cover">
                    <span class="p-2 fs-6 fw-bold-600">Qeswachaka</span>
                    <div class="position-absolute top-0 end-0 p-2 d-flex">
                      <input type="checkbox" value="Qeswachaka" name="destinos[]" id="qeswachaka" class="form-check-input">
                    </div>
                  </label>
                </div>
              </div>
          </div>

          <!-- Section 2: Select your preferences -->
          <div class="px-3 py-3 border rounded-3 mb-45" style="background-color: #FAFAFA;">
              <div class="mb-4 d-flex align-items-center">
                <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 z-2 position-relative mb-0">2</span>
                <h2 class="ps-2 mb-0 h5 fw-bold-600">
                  <?php echo PearTheme::lang('Select your preferences','Seleccione sus preferencias','选择您的偏好设置','Selecione suas preferências'); ?>
                </h2>
              </div>
              <div class="row gx-3 gy-3">
                <div class="col-12 col-lg-6">
                  <label for="date_trip" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Departure Date?','¿Fecha de salida?','出发日期？','Data de partida?'); ?></label>
                  <input type="text" name="date_trip" id="date_trip" class="form-control flatpickr-input <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh','datebirthday') ?>" required>
                </div>
                <div class="col-12 col-lg-6">
                  <label for="duration" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Duration','Duración','持续时间','Duração'); ?> <span class="fs-85 text-opaco"><?php echo PearTheme::lang('(the number of day)','(el número de días)','（天数）','(o número de dias)'); ?></span></label>
                  <input type="number" name="duration" id="duration" class="form-control" min="1" value="1" step="1">
                </div>
                <div class="col-12 col-lg-6">
                  <p class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Type Tours','Tipo de Tour','类型之旅','Tipo de passeios'); ?></p>
                  <div class="d-flex">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type_tour" id="type_tour1" value="Private Tours" checked>
                      <label class="form-check-label" for="type_tour1"><?php echo PearTheme::lang('Private Tours','Visitas privadas','私人定制游','Excursões privadas'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type_tour" id="type_tour2" value="Small Group">
                      <label class="form-check-label" for="type_tour2"><?php echo PearTheme::lang('Small Group','Grupo pequeño','小团体','Grupo pequeno'); ?></label>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <p class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Accommodations','Alojamiento','住宿','Alojamentos'); ?></p>
                  <div class="d-flex">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type_hotel" id="accomodation1" value="Hotels 3*" checked>
                      <label class="form-check-label" for="accomodation1">3* <?php echo PearTheme::lang('Hotels','Hoteles','酒店','Hotéis'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type_hotel" id="accomodation2" value="Hotels 4*">
                      <label class="form-check-label" for="accomodation2">4* <?php echo PearTheme::lang('Hotels','Hoteles','酒店','Hotéis'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type_hotel" id="accomodation3" value="Hotels 5*">
                      <label class="form-check-label" for="accomodation3">5* <?php echo PearTheme::lang('Hotels','Hoteles','酒店','Hotéis'); ?></label>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                  <label for="Adult" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Adults','Adultos','成年人','Adultos'); ?></label>
                  <input type="number" name="Adult" id="Adult" class="form-control" min="1" value="1" step="1">
                </div>
                <div class="col-6 col-lg-4">
                  <label for="Children" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Children','Niños','儿童','Crianças'); ?> <span class="fs-85 text-opaco">(3-11 <?php echo PearTheme::lang('age','edad','年龄','idade'); ?>)</span></label>
                  <input type="number" name="Children" id="Children" class="form-control" min="0" value="0" step="1">
                </div>
                <div class="col-6 col-lg-4">
                  <label for="Infants" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Infants','Bebés','婴儿','Bebês'); ?> <span class="fs-85 text-opaco">(0-2 <?php echo PearTheme::lang('age','edad','年龄','idade'); ?>)</span></label>
                  <input type="number" name="Infants" id="Infants" class="form-control" min="0" value="0" step="1">
                </div>
                <div class="col-12">
                  <label for="Special_requirement" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Special requirement','Requisito especial','特殊要求','Requisito especial'); ?></label>
                  <textarea name="Special_requirement" id="Special_requirement" class="form-control"></textarea>
                </div>
              </div>
          </div>

          <!-- Section 3: Send us your data -->
          <div class="px-3 py-3 border rounded-3 mb-45 position-relative" style="background-color: #FAFAFA;">
              <div class="mb-4 d-flex align-items-center">
                <span class="bg-primary rounded-circle text-white px-3 py-2 fw-bold-600 h5 position-relative mb-0">3</span>
                <h2 class="ps-2 mb-0 h5 fw-bold-600">
                  <?php echo PearTheme::lang('Send us your data','Envíenos sus datos','请将您的数据发送给我们','Envie-nos seus dados'); ?>
                </h2>
              </div>
              <div class="mb-4 row gx-3 gy-3">
                <div class="col-12 col-lg-6 d-flex flex-column">
                  <label for="fullname" class="fs-6 fw-bold-600 mb-2 flex-grow-1 flex-shrink-1"><span class="text-primary">*</span><?php echo PearTheme::lang('Full Name','Nombre completo','全名','Nome completo'); ?></label>
                  <input type="text" name="fullname" id="fullname" class="form-control" placeholder="<?php echo PearTheme::lang('First and Last Name','Nombres y Apellidos','名字和姓氏','Nome e Sobrenome'); ?>" required>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column">
                  <label for="number_phone" class="fs-6 fw-bold-600 mb-2 flex-grow-1 flex-shrink-1"><?php echo PearTheme::lang('Number Phone','Número de teléfono','电话号码','Número de telefone'); ?> <span class="fs-85 text-opaco"><?php echo PearTheme::lang('(We will only call you in case of email problems)','(Solo le llamaremos en caso de problemas con el correo electrónico).','（我们仅在邮件出现问题时才会致电您）','(Só entraremos em contato caso haja problemas com o e-mail)'); ?></span></label>
                  <input type="text" name="number_phone" id="number_phone" class="form-control" placeholder="<?php echo PearTheme::lang('Include country code','Incluya el código de país','包括国家代码','Incluir código do país'); ?>">
                </div>
                <div class="col-12 col-lg-6">
                  <label for="email" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Email','Correo electrónico','电子邮件','E-mail'); ?></label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo PearTheme::lang('Your email address','Tu dirección de correo electrónico','您的电子邮件地址','Seu endereço de e-mail'); ?>" required>
                </div>
                <div class="col-12 col-lg-6">
                  <label for="country" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Country','País','国家','País'); ?></label>
                  <select name="country" class="form-select" id="country" required>
                    <option value="">country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                        and Saba</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean
                        Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic
                    </option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, Democratic Republic of the Congo">Congo,
                        Democratic Republic of the Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curacao">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                    </option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories
                    </option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                        Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                        State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                    </option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic
                        People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kosovo">Kosovo</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic
                        Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia,
                        the Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated
                        States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands
                    </option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory,
                        Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin">Saint Martin</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                    </option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                        Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sint Maarten">Sint Maarten</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and the South Sandwich Islands">South
                        Georgia and the South Sandwich Islands</option>
                    <option value="South Sudan">South Sudan</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China
                    </option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic
                        of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                    </option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States" selected>United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor
                        Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="subject" class="fs-6 fw-bold-600 mb-2"><?php echo PearTheme::lang('Subject','Asunto','主题','Assunto'); ?></label>
                  <input name="subject" id="subject" class="form-control" required>
              </div>
              <!-- Submit -->
              <button type="submit" class="home-page__buttom1 loandig"><?php echo PearTheme::lang('Submit Form','Enviar formulario','提交表单','Enviar formulário'); ?></button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>

<!--  Why Choose home -->
<div class="bg-section py-default position-relative">
  <?php get_template_part('/template/why-us','/why-us') ?>
</div>
<!-- Fin Why Choose home -->

<!-- Recommended Tours -->
<section class="position-relative py-5">
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase"> <?php echo PearTheme::lang('Similar tours that may interest you','Tours similares que te pueden interesar','您可能感兴趣的类似旅游','Passeios semelhantes que podem lhe interessar') ?></h3>
            <p>  <?php echo PearTheme::lang('Explore Related Tours: Discover More with 69 Explorer','Explorar tours relacionados: Descubra más con 69 Explorer','探索相关旅游：与 69 Explorer 一起探索更多','Explore passeios relacionados: Descubra mais com o 69 Explorer') ?> </p>
        </div>
        <!-- row tours -->
        <div class="row gy-3 mt-3">
            <?php
                $toursofperu = get_posts([
                    'post_type' => 'tour',
                    'numberposts' => 5,
                    'order' => 'desc',
                    'orderby' => 'rand',
                    'ignore_sticky_posts' => 0,
                    'cat'=>array( 58 ),
                ]);

                foreach ($toursofperu as $post) :
                    $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                    $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                    $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                    $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                    $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
            ?>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                    <div class="position-relative w-100 rounded-3 mtn-50 mb-3 hx-250 overflow-hidden">
                        <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                    </div>
                    <div class="p-2">
                        <div class="border-bottom pb-4 mb-4">
                            <h3 class="fw-bold h5"><?php the_title(); ?></h3>
                            <div class="d-flex mb-2">
                                <span class="me-2 fs-85 text-dark-emphasis">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                      <g clip-path="url(#clip0_157_115)">
                                        <path d="M8.038 3.44395C8.87441 3.44395 9.55234 2.76576 9.55234 1.9296C9.55234 1.09298 8.87441 0.415039 8.038 0.415039C7.20138 0.415039 6.52344 1.09298 6.52344 1.9296C6.52344 2.76579 7.20138 3.44395 8.038 3.44395Z" fill="#E91E3E" fill-opacity="0.5"/>
                                        <path d="M11.3271 12.8593L10.6269 9.15953L10.3154 5.88016C10.1135 3.7055 8.00621 3.86138 6.97756 4.86888L5.26815 6.62172L3.66552 7.14075L3.35027 5.35106C3.31574 5.15553 3.12915 5.02475 2.93359 5.05903C2.73781 5.09353 2.60706 5.28016 2.64177 5.47594L2.9744 7.36469L2.9324 7.37831C2.62112 7.49285 2.45424 7.83091 2.55259 8.14778L2.56034 8.17197C2.64649 8.44991 2.91127 8.62503 3.19321 8.60791L4.50684 16.0679C4.54137 16.2634 4.72774 16.3942 4.92352 16.3596C5.11909 16.3251 5.24981 16.1388 5.21531 15.943L3.89746 8.45813L5.32706 8.13419C5.66087 8.05719 5.97799 7.91963 6.26181 7.72831L7.19306 7.10225L7.52193 9.60203C7.54587 9.78538 7.33012 10.5563 7.28106 10.7352L5.87824 15.4906C5.77165 15.8742 5.99587 16.2721 6.37943 16.3803L6.40593 16.3878C6.76862 16.4899 7.14912 16.2974 7.28106 15.9446L9.17215 11.3067L9.67359 13.414C9.74352 13.5535 9.83602 13.6798 9.94727 13.7887L12.1809 16.1601C12.4452 16.4183 12.8633 16.4298 13.141 16.1864L13.1746 16.1575C13.3166 16.0329 13.4032 15.8566 13.4145 15.6678C13.4257 15.4789 13.3612 15.2934 13.2346 15.153L11.3271 12.8593Z" fill="#E91E3E" fill-opacity="0.5"/>
                                        <path d="M12.5993 8.90293C12.854 8.87993 13.0892 8.75668 13.2526 8.56C13.4165 8.36328 13.4954 8.10975 13.4717 7.85506L13.2618 5.58343C13.213 5.05478 12.7451 4.66509 12.2162 4.71275L11.0493 4.81815L11.4364 9.00787L12.5993 8.90293Z" fill="#E91E3E" fill-opacity="0.5"/>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_157_115">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.415039)"/>
                                        </clipPath>
                                      </defs>
                                    </svg>
                                    <?php echo $dificulty ?>
                                </span>
                                <span class="me-2 fs-85 text-dark-emphasis">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                        <path d="M10.6667 9.74835V11.215L11.7333 11.8817M10.6667 1.74835V4.41502M14 5.41502V4.41502C14 4.0614 13.8595 3.72226 13.6095 3.47221C13.3594 3.22216 13.0203 3.08169 12.6667 3.08169H3.33333C2.97971 3.08169 2.64057 3.22216 2.39052 3.47221C2.14048 3.72226 2 4.0614 2 4.41502V13.7484C2 14.102 2.14048 14.4411 2.39052 14.6912C2.64057 14.9412 2.97971 15.0817 3.33333 15.0817H5.66667M2 7.08169H5.33333M5.33333 1.74835V4.41502M14.6667 11.0817C14.6667 13.2908 12.8758 15.0817 10.6667 15.0817C8.45753 15.0817 6.66667 13.2908 6.66667 11.0817C6.66667 8.87255 8.45753 7.08169 10.6667 7.08169C12.8758 7.08169 14.6667 8.87255 14.6667 11.0817Z" stroke="#E91E3E" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <?php echo PearTheme::days($dias)?>
                                </span>
                            </div>
                            <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                <?php
                                    $description = get_field('description');
                                    $description = preg_replace('/<(h2|h3)\b[^>]*>.*?<\/\1>/is', '', $description);
                                    echo $description;
                                ?>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fs-85 text-dark-emphasis"><?php echo PearTheme::lang('Price from','Precio desde','价格  起','Preço a partir de') ?>:</span>
                                <p class="mb-0 h5 fw-bold text-primary">$<?php echo $precio ?> <span class="fs-85 text-dark-emphasis">/ <?php echo PearTheme::lang('per person','por persona','每人','por pessoa') ?></span></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary bg-white fw-bold-500 rounded-3 text-primary py-2 px-3 white-space-nowrap">
                                <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 8.41511L8.86043 5.27405L9.55656 4.55615L14.0518 8.91511L9.55656 13.274L8.86043 12.5562L12.0996 9.41511H2.3335V8.41511H12.0996Z" fill="#E91E3E"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php  endforeach;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- End Recommended Tours -->

<!-- Reviews -->
<div class="bg-section py-default position-relative">
    <?php get_template_part('/template/reviews','reviews') ?>
</div>
<!-- Fin Reviews -->

<div id="root"></div>

<?php
  get_footer(); 
?>
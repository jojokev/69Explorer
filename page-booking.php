<?php
// template name:page booking
// Template Post Type: page
get_header();
$uuid = isset($_REQUEST['uuid'])? $_REQUEST['uuid']: 0;
$dateStar = isset($_REQUEST['date'])? $_REQUEST['date']: null;
$travellers = isset($_REQUEST['travellers'])? $_REQUEST['travellers']: 02;
// $categories = pll_get_terms( array(
//     'taxonomy' => 'categoria',
//     'post_type' => 'tour',
//     'hide_empty' => false,
//     ) );

//     print_r($categories);
?>

<section>

    <div class="container-xxl py-5 mb-5">
        <div class="py-3">
            <h1 class="fw-bold fs-4 text-center text-uppercase"><?php the_title(); ?></h1>
            <p>
                <?php echo PearTheme::lang('Thank you for choosing us! We are pleased to confirm your reservation and are excited to create a memorable experience for you. To ensure this, complete our BOOKING FORM with your precise information. If you have questions or need assistance, do not hesitate to contact us. We are here to help you!','¡Gracias por elegirnos! Nos complace confirmar su reserva y nos entusiasma crear una experiencia memorable para usted. Para garantizarlo, complete nuestro FORMULARIO DE RESERVA con su información precisa. Si tiene preguntas o necesita ayuda, no dude en contactarnos. ¡Estamos aquí para ayudarlo!','感谢您选择我们！我们很高兴确认您的预订，并很高兴为您创造难忘的体验。为确保这一点，请填写我们的预订表并提供您的准确信息。如果您有疑问或需要帮助，请随时与我们联系。我们随时为您提供帮助！​​旅游信息','Obrigado por nos escolher! Temos o prazer de confirmar sua reserva e estamos ansiosos para criar uma experiência memorável para você. Para garantir isso, preencha nosso FORMULÁRIO DE RESERVA com suas informações precisas. Se você tiver dúvidas ou precisar de ajuda, não hesite em entrar em contato conosco. Estamos aqui para ajudá-lo!')?>
            </p>
        </div>
        <div class="row gy-5">
            <div class="col-md-8">
                <form action="#" data-action="<?php echo get_template_directory_uri()?>/inc/src/pear-email.php"
                    id="fromBooking">
                    <!-- card tour info -->
                    <div class="card border-1 rounded-0">
                        <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                            <h2 class="fw-bold fs-6 mb-0 text-primary"><?php echo PearTheme::lang('TOUR INFORMATION','INFORMACIÓN TURÍSTICA','旅游信息','INFORMAÇÕES SOBRE A EXCURSÃO') ?></h2>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                              
                                <div class="col-md-12"><label for="tours" class="form-label fw-bold">
                                <?php echo PearTheme::lang('Which Tour(s)/Trek(s) are you booking?','¿Qué viaje(s)/excursión(es) va a reservar?','您想预订哪些旅游/徒步旅行？','Que excursão(ões)/caminhada(s) você está reservando?') ?>
                                    </label>
                                    <div>
                                        <select class="form-select rounded-0 fs-small letter-spacing-1 fw-500"
                                            name="tour" aria-label="Default select example"
                                            <?php echo $uuid?'readonly':null ?>>
                                            <?php 
                                          $categories = get_terms(array(
                                            'taxonomy' => 'category',
                                            // 'post_type' => 'tour',
                                            'lang' => pll_current_language()
                                        ));
                                        // print_r($categoria);
                                        // Loop through each category
                                        foreach ($categories as $category) {
                                            // Set up the query arguments
                                            $argss = array(
                                                // 'lang' =>pll_current_language(),
                                                'post_type' => 'tour',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'category',
                                                        'field' => 'term_id',
                                                        'terms' => $category->term_id,
                                                    ),
                                                ),
                                            );
                                        
   
                                        
                                            // Perform the query
                                            $query = new WP_Query($argss);
                                              
                                                if ($query->have_posts()) {
                                                  $options = '<optgroup label="----- ' . strtoupper($category->name) . ' -----">';
                                                  echo $options;
                                              
                                                  while ($query->have_posts()) {
                                                    $query->the_post();
                                                    $selected = ($uuid == get_the_ID()) ? 'selected ' : '';
                                              
                                                    $option = '<option id="item-' . get_the_ID() . '" ' . $selected . ' value="' . get_the_title() . '">';
                                                    $option .= get_the_title();
                                                    $option .= '</option>';
                                              
                                                    echo $option;
                                                  }
                                              
                                                  $options .= '</optgroup>';
                                                }
                                              
                                                wp_reset_postdata();
                                              }
                                              
                                    ?>
                                        </select>

                                    </div>
                                    <div style="display: none;">
                                        <small class="d-block mb-2 fs-small text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="tours" class="form-label fw-bold"><?php echo PearTheme::lang('Booking a group or private service?','¿Reserva para un grupo o un servicio privado?','预订团体服务还是私人服务？','Reservando um serviço para grupos ou particular?') ?>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="typeService"
                                            id="inlineRadio1" value="Group">
                                        <label class="form-check-label" ><?php echo PearTheme::lang('Group service','Servicio de grupo','集团服务','Serviço em grupo') ?></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="typeService"
                                            id="inlineRadio2" value="Private"><label class="form-check-label"
                                            ><?php echo PearTheme::lang('Private Service','Servicio privado','私人服务','Serviço privado') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="tours" class="form-label fw-bold"><?php echo PearTheme::lang('Start date','Fecha de inicio','开始日期','Data de início') ?></label>
                                        <input type="text" value="<?php echo $dateStar ?>" name="dateStart" required=""
                                            id="datebooking" class="form-control rounded-0 flatpickr-input <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh','datebirthday') ?>"
                                             spellcheck="false" data-ms-editor="true" data-date="<?php echo $dateStar ?>" 
>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="tours" class="form-label">
                                            <span class="fw-bold"><?php echo PearTheme::lang('Alternative Date','Fecha alternativa','备选日期','Data alternativa') ?></span><small>(<?php echo PearTheme::lang('Optional','Opcional','选修课','Opcional') ?>)</small>
                                        </label>
                                        <input type="text" name="alternativeDate" 
                                            id="datebooking" class="form-control rounded-0 flatpickr-input <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh','datebirthday') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card passenger infomations 2-->
                    <div class="card border-1 mt-2 rounded-0" id="wrapper-travellers-cards">
                        <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                            <h2 class="fw-bold fs-6 mb-0 text-primary"><?php echo PearTheme::lang('PASSENGER INFORMATION','INFORMACIÓN DEL PASAJERO','乘客须知','INFORMAÇÕES SOBRE PASSAGEIROS') ?></h2>
                        </div>
                        
                        <div class="card-body" id-base="item-travellers-card-" id="item-travellers-card-0">
                            <div class="row mb-3 pb-3 border-bottom border-primary">
                                <div class="col-11 fw-bold" id="title-traveller"><?php echo PearTheme::lang('PASSENGER','PASAJERO','乘客','PASSAGEIRO') ?> 1</div>
                                <div class="col-1 d-flex justify-content-end"><button class=" btn-close buttonFormSearch bg-danger" id-base="close-traveller-" id="close-traveller-0" id-form="0"></button></div>
                            </div>
                            <div class="row gy-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('Full Name','Nombre completo','姓名','Nome completo') ?></label>
                                    <input type="text" class="form-control rounded-0" base-name="travellers-name-" name="travellers-name-0" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('Email','Email','电子邮件','E-mail') ?></label>
                                    <input type="email" class="form-control rounded-0" base-name="travellers-email-" name="travellers-email-0" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('Country','País','国家','País') ?></label>
                                    <input type="text" class="form-control rounded-0" base-name="travellers-country-" name="travellers-country-0" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('doc. type','doc. Tipo','身份证件类型','tipo de documento') ?></label>
                                    <select type="text" class="form-control rounded-0" base-name="travellers-doc-type-" name="travellers-doc-type-0" required>
                                        <option value="Passport" selected><?php echo PearTheme::lang('Passport','Pasaporte','护照','Passaporte') ?></option>
                                        <option value="DNI"><?php echo PearTheme::lang('DNI / ID','DNI / ID','身份证','DNI / ID') ?></option>
                                        <option value="Driver Licence"><?php echo PearTheme::lang('Driver Licence','Permiso de conducir','驾照','Carteira de habilitação') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('Passport Number','Número de pasaporte','护照号码','Número do passaporte') ?></label>
                                    <input type="text" class="form-control rounded-0" base-name="travellers-doc-" name="travellers-doc-0" required>         
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold"><?php echo PearTheme::lang('Date of Birth','Fecha de nacimiento','出生日期','Data de nascimento') ?></label>
                                    <input type="text" class="form-control rounded-0 <?php echo PearTheme::lang('datebirthday2','datebirthday2','datebirthdayZh2','datebirthday2') ?>" id="datebirthday" base-name="travellers-birth-" name="travellers-birth-0" required>         
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold w-100"><?php echo PearTheme::lang('Gender','Género','性别','Gênero') ?></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                            id="inlineRadio1" value="Male" checked>
                                        <label class="form-check-label" ><?php echo PearTheme::lang('Male','Hombre','男性','Masculino') ?></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-geneder-" name="travellers-geneder-0"
                                            id="inlineRadio2" value="Female">
                                        <label class="form-check-label" ><?php echo PearTheme::lang('Female','Mujer','女性','Mulher') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold w-100"><?php echo PearTheme::lang('Are you a student?','¿Es usted estudiante?','你是学生吗？','Você é estudante?') ?></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                            id="inlineRadio1" value="Student">
                                        <label class="form-check-label" ><?php echo PearTheme::lang('Yes','Si','是的','Sim') ?></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-student-" name="travellers-student-0"
                                            id="inlineRadio2" value="No Student" checked>
                                        <label class="form-check-label" ><?php echo PearTheme::lang('No','No','不','Não') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold w-100"><?php echo PearTheme::lang('Food Restrictions / Allergies?','¿Restricciones alimentarias / Alergias?','食物限制/过敏？','Restrições alimentares/alergias?') ?></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                            id="inlineRadio1" value="Yes_Allergies">
                                        <label class="form-check-label" ><?php echo PearTheme::lang('Yes','Si','是的','Sim') ?></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" base-name="travellers-restrictions-" name="travellers-restrictions-0"
                                            id="inlineRadio2" value="No_Allergies" checked>
                                        <label class="form-check-label" ><?php echo PearTheme::lang('No','No','不','Não') ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end my-3">
                        <button id="add-traveler" class="btn btn-primary">
                            <i class="bi bi-person-plus-fill"></i> <?php echo PearTheme::lang('PASSENGER','PASAJERO','乘客','PASSAGEIRO') ?> 
                        </button>
                    </div>


                    <!-- card contact main-->
                    <div class="card border-1 mt-2 rounded-0">
                        <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                            <h2 class="fw-bolder fs-6 mb-0 text-primary"><?php echo PearTheme::lang('CONTACT INFORMATION','INFORMACIÓN DE CONTACTO','联系信息','INFORMAÇÕES DE CONTATO') ?></h2>
                            <p class="mb-0 text-muted mt-1"><?php echo PearTheme::lang('What is the email address of the person for the main Point Of Contact (POC) in your group?','¿Cuál es la dirección de correo electrónico de la persona de contacto principal de su grupo?','你们团体中主要联络点 (POC) 人员的电子邮件地址是什么？','Qual é o endereço de e-mail da pessoa responsável pelo ponto de contato principal (POC) do seu grupo?') ?></p>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-4"><label for="ctraveles" class="form-label"><?php echo PearTheme::lang('Traveler','Viajero','访客','Viajante') ?></label>
                                    <input class="form-control rounded-0" name="name" type="text"
                                         required="" spellcheck="false"
                                        data-ms-editor="true">
                                </div>
                                <div class="col-md-4"><label for="ctraveles" class="form-label"><?php echo PearTheme::lang('Email','Email','电子邮件','E-mail') ?></label>
                                    <input class="form-control rounded-0" name="email" type="email"
                                         required="">
                                </div>
                                <div class="col-md-4"><label for="phonecotact" name="phone"
                                        class="form-label"><?php echo PearTheme::lang('Phone','Teléfono','电话','Telefone') ?></label>
                                    <input class="form-control rounded-0" type="text" name="phone" id="phonecotact"
                                        required=""  spellcheck="false"
                                        data-ms-editor="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card othe informations -->
                    <div class="card mt-2 rounded-0">
                        <div class="card-header m-0 px-2 py-3 bg-white border-bottom-dotted">
                            <h2 class="fw-bold fs-6 mb-0 text-primary text-uppercase fs-sm-9"><?php echo PearTheme::lang('Additional information','Información complementaria','附加信息','Informações adicionais') ?>
                            </h2>
                        </div>
                        <div class="card-body px-2">
                            <div class="row gy-3">
                                <div class="col-md-12"><label for="information"
                                        class="form-label fs-sm-9 fw-bold"><?php echo PearTheme::lang('Please add any other information you want 69explorer Peru to be aware of.of.','Añade cualquier otra información que desees que 69explorer Perú conozca.','请添加您希望 69explorer Peru 了解的任何其他信息。','Adicione qualquer outra informação que deseje que a 69explorer Peru tenha conhecimento.') ?> </label>
                                    <textarea class="form-control rounded-0" id="information" required=""
                                        spellcheck="false" data-ms-editor="true"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="typeroom" class="form-label fs-sm-9 fw-bold"><?php echo PearTheme::lang('Type Room?','¿Tipo de habitación?','房型？','Tipo de quarto?') ?> <small class="text-muted">(<?php echo PearTheme::lang('Optional','Opcional','选修课','Opcional') ?>)</small></label><select
                                        name="typeRoom" id="typeroom" class="form-select rounded-0 mb-3">
                                        <option value=""><?php echo PearTheme::lang('Select room type','Seleccione el tipo de habitación','选择您的房间','Selecione o tipo de quarto') ?></option>
                                        <option value="Single - Room"><?php echo PearTheme::lang('Single - Room','Habitación individual','单人间','Quarto Individual') ?></option>
                                        <option value="Double bed Room"><?php echo PearTheme::lang('Double bed Room','Habitación doble','双人房','Quarto com cama de casal') ?></option>
                                        <option value="Matrimonial Room"><?php echo PearTheme::lang('Matrimonial Room','Habitación matrimonial','婚姻房','Quarto Matrimonial') ?></option>
                                    </select>
                                    <textarea class="form-control rounded-0 mt-1" name="typeRoomInformation"
                                        id="hotellocation" 
                                        spellcheck="false" data-ms-editor="true"></textarea>
                                </div>
                                <div class="col-md-12"><label for="hotellocation" class="form-label fs-sm-9 fw-bold"><?php echo PearTheme::lang('If you have already booked your hotel in Cusco, can you please provide the name and address of the hotel for pick up?','Si ya ha reservado su hotel en Cusco, ¿podría facilitarnos el nombre y la dirección del hotel para la recogida?','如果您已经预订了库斯科的酒店，请问可以提供酒店名称和地址以便接送吗？','Se você já reservou seu hotel em Cusco, poderia nos informar o nome e o endereço do hotel para que possamos buscá-lo?') ?></label>
                                    <textarea class="form-control rounded-0" name="hotelLocation" id="hotellocation"
                                        required="" spellcheck="false" data-ms-editor="true"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="emergency" class="form-label fs-sm-9 fw-bold"><?php echo PearTheme::lang('Please fill in names and phone numbers for two emergency contacts who will not be with you on the tour or trek','Indique los nombres y números de teléfono de dos personas de contacto en caso de emergencia que no vayan a acompañarle en la excursión o el viaje.','请填写两位不会与您一起参加旅行或徒步旅行的紧急联系人的姓名和电话号码','Preencha os nomes e números de telefone de duas pessoas de contato para emergências que não estarão com você na excursão ou caminhada.') ?></label>
                                    <input class="form-control rounded-0" name="emergencyNumber" type="text"
                                        id="emergency" required="" spellcheck="false" data-ms-editor="true">
                                </div>
                                <div class="col-md-12"><label for="aboutsam" class="form-label fs-sm-9 fw-bold"><?php echo PearTheme::lang('How did you hear about 69explorer Peru?','¿Cómo se enteró de 69explorer Perú?','您是如何了解 69explorer Peru 的？','Como você ficou sabendo da 69explorer Peru?') ?></label><input class="form-control rounded-0"
                                        type="text" id="aboutsam" name="how_they_found" required="" spellcheck="false"
                                        data-ms-editor="true">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            required=""><label class="form-check-label fw-bold"
                                            for="flexCheckDefault"><?php echo PearTheme::lang('By checking the box, you agree to 69explorer Peru','Al marcar la casilla, aceptas que 69explorer Perú','勾选此框即表示您同意 69explorer Peru','Ao marcar a caixa, você concorda com o 69explorer Peru.') ?>
                                            <a href="https://69explorer.com/terms-and-conditions/" target="_blank"
                                                class="text-primary"><?php echo PearTheme::lang('Terms and Conditions','Términos y condiciones','条款和条件','Termos e Condições') ?></a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 text-center mt-1">
                        <button type="submit"
                            class="btn btn-dark rounded-0 px-5 text-uppercase loadbooking position-relative fw-bold"><?php echo PearTheme::lang('Send Form','Enviar formulario','发送表单','Enviar formulário') ?></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <aside class="position-sticky sticky-top" style="top:1rem;">
                    <div class="card rounded-0 border-0 shadow-sm">
                        <div class="card-header text-center bg-primary text-white py-3 mb-0 border-0">
                            <span class="py-1"><?php echo PearTheme::lang('QUESTIONS?','¿PREGUNTAS?','问题？','DÚVIDAS?') ?></span>
                        </div>
                        <div class="card-body">
                            <div class="py-3">
                                <h3 class="fw-bold"><?php echo PearTheme::lang("We're here to help",'Estamos aquí para ayudar','我们随时为您提供帮助','Estamos aqui para ajudar') ?></h3>
                            </div>
                            <div>
                                <span>
                                    <?php echo PearTheme::lang('See your reservation FAQ for answers to common questions. Use our chat system for any additional questions.','Consulte las preguntas más frecuentes sobre su reserva. Utilice nuestro sistema de chat para cualquier pregunta adicional.','请参阅预订常见问题解答，了解常见问题的答案。如有任何其他问题，请使用我们的聊天系统。','Consulte as perguntas frequentes sobre reservas para obter respostas a perguntas comuns. Use nosso sistema de chat para quaisquer perguntas adicionais.') ?>
                                </span>
                                <br>
                                <a rel="nofollow" 
                                    href="https://api.whatsapp.com/send?phone=+51992126224&amp;text=Hello from web site 69explorer!"
                                    class="fw-bold text-decoration-none btn bg-light  mt-2"
                                    target="_blank">
                                   <span><i class="bi bi-whatsapp"></i></span> +51
                                    992126224
                                </a>
                                <a rel="nofollow" 
                                    href="tel:+51992126224"
                                    class="fw-bold text-decoration-none btn bg-light  mt-2"
                                    target="_blank">
                                   <span><i class="bi bi-telephone-fill"></i></span> +51
                                    992126224
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
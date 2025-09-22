<?php
/*Template Name: plantilla About Us*/
get_header();
?>

<section class="page_about_img">
    <img src="https://69explorer.com/wp-content/uploads/2024/03/69-explorer-peru.webp" alt="">
    <div class="text_about">
        <h1><?php the_title(); ?></h1>
        <ul>
            <li>
                <a href="<?php echo home_url( '/' ); ?>">
                    <?php echo PearTheme::lang('Home','Inicio','首页','Página inicial')?>
                </a>
            </li>
            <span>-</span>
            <li>
                <?php the_title(); ?>
            </li>
        </ul>
    </div>
</section>
<div class="container-xl">
    <div class="content_about">
        <div class="item_about">
            <span>
                <?php echo PearTheme::lang('ARE YOU READY TO TRAVEL','¿ESTÁS LISTO PARA VIAJAR?','你准备好出发了吗？','VOCÊ ESTÁ PRONTO PARA VIAJAR?')?>

            </span>
            <h2>
                <?php echo PearTheme::lang('Unforgettable journeys with 69 Explorer','Viajes inolvidables con 69 Explorer','与69 Explorer共度的难忘旅程','Viagens inesquecíveis com o 69 Explorer')?>
            </h2>
            <p>
                <?php echo PearTheme::lang('Welcome to 69 Explorer, a premier tour operator based in the heart of Cusco, Peru. A company born and nurtured in the lap of the Andes, we specialize in creating unforgettable travel experiences in one of the world’s most enchanting destinations.','Bienvenido a 69 Explorer, un operador turístico de primer nivel con sede en el corazón de Cusco, Perú. Una empresa nacida y formada en el regazo de los Andes, nos especializamos en crear experiencias de viaje inolvidables en uno de los destinos más encantadores del mundo.','欢迎来到69 Explorer，我们是位于秘鲁库斯科市中心的顶级旅游运营商。这家公司诞生并成长于安第斯山脉的怀抱，专注于在世界上最迷人的目的地之一打造难忘的旅行体验。','Bem-vindo ao 69 Explorer, um operador turístico de primeira linha com sede no coração de Cusco, Peru. Uma empresa nascida e criada no colo dos Andes, nos especializamos em criar experiências de viagem inesquecíveis em um dos destinos mais encantadores do mundo.')?>
            </p>
            <h3>
                <?php echo PearTheme::lang('Our Story','Nuestra historia','我们的故事','Nossa história')?>
            </h3>
            <p>
                <?php echo PearTheme::lang('Founded by a local team of passionate explorers, 69 Explorer began as a small venture with a big dream: to share the magic of Cusco and its surrounding wonders with the world.','Fundada por un equipo local de exploradores apasionados, 69 Explorer comenzó como una pequeña empresa con un gran sueño: compartir la magia de Cusco y las maravillas que lo rodean con el mundo.','由一群充满激情的本地探险者创立，69 Explorer最初只是一个怀揣宏大梦想的小型创业项目：向全世界分享库斯科及其周边奇观的魅力。','Fundado por uma equipe local de exploradores apaixonados, o 69 Explorer começou como um pequeno empreendimento com um grande sonho: compartilhar a magia de Cusco e suas maravilhas ao redor com o mundo.')?>
            </p>
            <p>
                <?php echo PearTheme::lang('Over the years, we have grown into a trusted name in travel, known for our personalized service, expert guidance, and deep love for Peruvian culture.','A lo largo de los años, nos hemos convertido en un nombre confiable en viajes, conocido por nuestro servicio personalizado, orientación experta y profundo amor por la cultura peruana.','多年来，我们已发展成为旅游业中值得信赖的品牌，以个性化服务、专业指导以及对秘鲁文化的深厚热爱而闻名。','Ao longo dos anos, nos tornamos um nome confiável em viagens, conhecidos por nosso serviço personalizado, orientação especializada e profundo amor pela cultura peruana.')?>
            </p>
            <div>
                <strong>
                    <?php echo PearTheme::lang('Experience','Experiencia','体验','Experiência')?>
                </strong>
                <span>95%</span>
            </div>
            <div class="progress">
                <div class=""></div>
            </div>
        </div>
        <div class="item_about">
            <div class="gallery_about">
                <?php echo wp_get_attachment_image(707,'full'); ?>
                <?php echo wp_get_attachment_image(474,'full'); ?>
                <?php echo wp_get_attachment_image(475,'full'); ?>
                <?php echo wp_get_attachment_image(731,'full'); ?>
            </div>
        </div>

    </div>
</div>
<div class="local_experience">
    <div class="content_about">
        <div class="item_about">
            <?php echo wp_get_attachment_image(818,'full'); ?>
        </div>
        <div class="item_about">
            <div class="texto_about">
                <div>
                    <h2>
                        <?php echo PearTheme::lang('What We Offer','Lo que ofrecemos','我们的服务','O que nós oferecemos')?>
                    </h2>
                    <h3>
                        <?php echo PearTheme::lang('Local Expertise','Experiencia local','本地专业知识','Experiência local')?>
                    </h3>
                    <p>
                        <?php echo PearTheme::lang('All of our local guides have degrees in tourism and a minimum of 2 years experience. They all speak English and Spanish and many also speak Quechua, the native language of Peru.','Todos nuestros guías locales tienen títulos en turismo y un mínimo de 2 años de experiencia. Todos hablan inglés y español y muchos también hablan quechua, la lengua nativa del Perú.','我们所有的本地导游均持有旅游专业学位，并具备至少两年的从业经验。他们均能使用英语和西班牙语交流，其中许多人还精通秘鲁原住民语言克丘亚语。','Todos os nossos guias locais são formados em turismo e têm no mínimo 2 anos de experiência. Todos falam inglês e espanhol e muitos também falam quíchua, a língua nativa do Peru.')?>
                    </p>
                    <p>
                        <?php echo PearTheme::lang('A Quechua speaking guide allows you to connect more deeply with your surroundings and the remote locals, who often only speak Spanish. It also allows them a deeper understanding of the history and legends that help to weave the fabric of the rich cultures of Peru, and share them with you.','Un guía que habla quechua le permitirá conectarse más profundamente con su entorno y con los lugareños remotos, que a menudo solo hablan español. También les permite una comprensión más profunda de la historia y las leyendas que ayudan a tejer el tejido de las ricas culturas del Perú y compartirlas con usted.','一位通晓克丘亚语的向导能助您更深入地融入周遭环境，并与通常只讲西班牙语的偏远地区居民建立联系。这亦能让他们更深刻地理解那些构筑秘鲁丰富文化底蕴的历史与传说，并将这些珍贵文化瑰宝与您分享。','Um guia que fala quíchua permite que você se conecte mais profundamente com o ambiente ao seu redor e com os habitantes locais remotos, que muitas vezes só falam espanhol. Também lhes permite uma compreensão mais profunda da história e das lendas que ajudam a tecer a estrutura das ricas culturas do Peru e compartilhá-las com você.')?>
                    </p>
                    <p>
                        <?php echo PearTheme::lang('Oftentimes, a guide can either ensure the holiday of a lifetime or can spoil a trip with their mistakes. That’s why at 69 Explorer we have a rigorous training program and unlike most companies, our guides are not freelance- they work with us, and only us, full time.','A menudo, un guía puede garantizar las vacaciones de su vida o arruinar un viaje con sus errores. Es por eso que en 69 Explorer tenemos un riguroso programa de capacitación y, a diferencia de la mayoría de las empresas, nuestros guías no son independientes: trabajan con nosotros, y solo con nosotros, a tiempo completo.','向导往往能成就一次毕生难忘的旅程，也可能因失误而毁掉整个旅行。正因如此，69 Explorer 实施严格的培训计划，与多数公司不同，我们的向导并非自由职业者——他们全职为我们工作，且仅与我们合作。','Muitas vezes, um guia pode garantir as férias da sua vida ou estragar uma viagem com seus erros. É por isso que na 69 Explorer temos um programa de formação rigoroso e, ao contrário da maioria das empresas, os nossos guias não são freelancers – trabalham connosco, e apenas connosco, a tempo inteiro.')?>
                    </p>
                    <p>
                        <?php echo PearTheme::lang('This means that they can enjoy the benefits of full-time employment with things such as healthcare, pension funds and regular payment, while you can expect a guide who knows the routes, the team, and the insider information on every trip.','Esto significa que pueden disfrutar de los beneficios de un empleo de tiempo completo en aspectos como atención médica, fondos de pensiones y pagos regulares, mientras que usted puede esperar un guía que conoce las rutas, el equipo y la información privilegiada de cada viaje.','这意味着他们既能享受全职雇员的福利待遇——包括医疗保障、养老金计划和固定薪酬——您又能获得一位熟悉路线、了解团队且掌握每次行程内幕信息的向导。','Isso significa que eles podem aproveitar os benefícios do emprego em tempo integral, como cuidados de saúde, fundos de pensão e pagamentos regulares, enquanto você pode esperar um guia que conheça as rotas, a equipe e as informações privilegiadas de cada viagem.')?>
                    </p>
                    <p>
                        <?php echo PearTheme::lang('In order to guarantee your comfort and safety, each of our guides are highly trained in all aspects of the trip, including responding to emergencies. Each guide undergoes annual training in guiding and first aid, and carries specialized equipment on journeys to ensure travelers safety: from emergency oxygen to satellite phones.','Para garantizar su comodidad y seguridad, cada uno de nuestros guías está altamente capacitado en todos los aspectos del viaje, incluida la respuesta a emergencias. Cada guía recibe una formación anual en orientación y primeros auxilios, y lleva equipo especializado en los viajes para garantizar la seguridad de los viajeros: desde oxígeno de emergencia hasta teléfonos satelitales.','为确保您的舒适与安全，每位向导均接受过全方位的严格培训，包括应对突发状况的能力。所有向导每年都参加向导技能与急救培训，并在旅途中配备专业装备以保障旅客安全：从应急氧气瓶到卫星电话一应俱全。','Para garantir seu conforto e segurança, cada um de nossos guias é altamente treinado em todos os aspectos da viagem, inclusive no atendimento a emergências. Cada guia passa por treinamento anual em orientação e primeiros socorros, e carrega equipamentos especializados nas viagens para garantir a segurança dos viajantes: desde oxigênio de emergência até telefones via satélite.')?>
                    </p>
                    <p>
                        <?php echo PearTheme::lang('More than just our guides, our whole team is ready and set to ensure that you can enjoy the best trip possible. From our dedicated team of office staff waiting to fix any qualms and answer every question you may have, to our impressive team of chefs, ready to fix you deliciously decadent Peruvian meals along the trail.','Más que solo nuestros guías, todo nuestro equipo está listo y preparado para garantizar que puedas disfrutar del mejor viaje posible. Desde nuestro dedicado equipo de personal de oficina que espera solucionar cualquier problema y responder todas las preguntas que pueda tener, hasta nuestro impresionante equipo de chefs, listos para prepararle deliciosas y deliciosas comidas peruanas a lo largo del camino.','我们不仅有专业向导，整个团队都已整装待发，确保您享受最完美的旅程。从随时为您排忧解难、解答疑问的专职办公室团队，到沿途为您烹制美味奢华秘鲁佳肴的顶级厨师团队，我们都已准备就绪。','Mais do que nossos guias, toda a nossa equipe está pronta e preparada para garantir que você aproveite a melhor viagem possível. Desde nossa equipe dedicada de funcionários de escritório esperando para resolver quaisquer dúvidas e responder a todas as perguntas que você possa ter, até nossa impressionante equipe de chefs, prontos para preparar suas deliciosas refeições peruanas ao longo da trilha.')?>
                    </p>
                </div>
                <button type="button"><i class="h3 bi bi-arrow-right-circle-fill"></i></button>
            </div>
        </div>
    </div>
</div>
<script>
    const btn_about = document.querySelector('.texto_about button');
    const aboutContent = document.querySelector('.local_experience');

    let currentLanguage = "en"; 
    const originalTextEn = `<i class="h3 bi bi-arrow-left-circle-fill"></i>`;
    const newTextEn = `<i class="h3 bi bi-arrow-right-circle-fill"></i>`;
    const originalTextEs = `<i class="h3 bi bi-arrow-left-circle-fill"></i>`;
    const newTextEs = `<i class="h3 bi bi-arrow-right-circle-fill"></i>`;
    btn_about.addEventListener("click", function() {
        aboutContent.classList.toggle('active');
        if (currentLanguage === "en") {
            if (btn_about.innerHTML === originalTextEn) {
                btn_about.innerHTML = newTextEn;
            } else {
                btn_about.innerHTML = originalTextEn;
            }
        } else if (currentLanguage === "es") {
            if (btn_about.innerHTML === originalTextEs) {
                btn_about.innerHTML = newTextEs;
            } else {
                btn_about.innerHTML = originalTextEs;
            }
        }
    });
    
</script>
<div class="review">
    <h2>
        <?php echo PearTheme::lang('What do our customers say','Qué dicen nuestros clientes','我们的客户怎么说','O que nossos clientes dizem')?>
    </h2>
    <div class="content_review">
        <div class="item_review">
            <div class="header_review">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/ec/3d/default-avatar-2020-1.jpg?w=100&h=-1&s=1" alt="">
                <div>
                    <strong>Mamali B</strong>
                    <ul>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                    </ul>
                </div>
            </div>
            <div class="text_review">
                <strong>Amazing Travel Experience</strong>
                <span>Mar 2024 • Friends</span>
                <p>
                    Walking the streets of Cusco and learning about its history is a truly wonderful experience. You can see the blend of Incan and colonial architecture. Jhony was an amazing tour guide! He was very knowledgeable and spoke great English! We really liked it.
                </p>
            </div>
        </div>
        <div class="item_review">
            <div class="header_review">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/e7/7b/default-avatar-2020-56.jpg?w=100&h=-1&s=1" alt="">
                <div>
                    <strong>Juan Manuel G</strong>
                    <ul>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                    </ul>
                </div>
            </div>
            <div class="text_review">
                <strong>Rainbow mt</strong>
                <span>Mar 2024 • Friends</span>
                <p>
                    Excellent service and highly recommended for hiking to the Rainbow Mountain. Our guide Jose did a great job.
                </p>
            </div>
        </div>
        <div class="item_review">
            <div class="header_review">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/ec/3d/default-avatar-2020-1.jpg?w=100&h=-1&s=1" alt="">
                <div>
                    <strong>Happiness518</strong>
                    <ul>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                    </ul>
                </div>
            </div>
            <div class="text_review">
                <strong>4 Day Inca Trail absolutely outstanding</strong>
                <span>Mar 2024 • Friends</span>
                <p>
                    Inca trail trip was truly an amazing experience. The whole 4 day Inca Trail was amazing from start to finish, simply extraordinary. The whole trip was expertly organized, and Jhony was outstanding every step of the way. He shared lots of valuable information and showed me things I'll always remember. The sights you see are truly unique and you can't experience them just by visiting Machu Picchu. I highly recommend this hike.
                </p>
            </div>
        </div>
    </div>
    <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_black">
        <?php echo PearTheme::lang('SEE MORE REVIEWS','VER MÁS OPINIONES','查看更多评论','VEJA MAIS AVALIAÇÕES')?>
    </a>
</div>
<div class="container-xl">
    <div class="content_about" style="padding-bottom: 4rem;">
        <div class="item_about">
            <h2>
                <?php echo PearTheme::lang('Adventure Awaits','La aventura espera','冒险正等待着你','Aventura espera')?>
            </h2>
            <p>
                <?php echo PearTheme::lang('Peru is ripe for the picking in all kinds of adventure, whether you are an adrenaline junky or a culture enthusiast, there is something to enchant and enthrall you hidden amongst the streets of Cusco and deep into the crevices of the Sacred Valley.','Perú está listo para vivir todo tipo de aventuras, ya sea que seas un adicto a la adrenalina o un entusiasta de la cultura, hay algo que te encantará y cautivará escondido entre las calles de Cusco y en lo profundo de las grietas del Valle Sagrado.','秘鲁正等待着各种冒险者的到来，无论你是追求刺激的冒险家还是热衷文化的探索者，库斯科的街巷深处与圣谷的幽谷之中，都隐藏着足以令你心醉神迷的奇观。','O Peru está pronto para ser escolhido em todos os tipos de aventura, seja você um viciado em adrenalina ou um entusiasta da cultura, há algo para encantá-lo e encantá-lo escondido entre as ruas de Cusco e nas profundezas do Vale Sagrado.')?>
            </p>
            <p>
                <?php echo PearTheme::lang('At 69 Explorer, we know the city and the valley like the back of our hand, and we know that there is something for everyone. Whether your idea of a fantastic afternoon is rafting down a river or pottering around museums for hours, we have got you covered.','En 69 Explorer conocemos la ciudad y el valle como la palma de nuestra mano, y sabemos que hay algo para todos los gustos. Ya sea que su idea de una tarde fantástica sea hacer rafting por un río o pasear por museos durante horas, lo tenemos cubierto.','在69号探险者，我们对这座城市和山谷了如指掌，深知这里总有适合每个人的精彩。无论您向往的是乘皮艇顺流而下的惊险午后，还是在博物馆里悠闲漫步数小时的惬意时光，我们都能为您完美呈现。','No 69 Explorer conhecemos a cidade e o vale como a palma da nossa mão e sabemos que há algo para todos. Quer a sua ideia de uma tarde fantástica seja fazer rafting em um rio ou passear por museus por horas, nós temos o que você precisa.')?>
            </p>
            <p>
                <?php echo PearTheme::lang('We are dedicated to showcasing the very best of this wonderful country- and the very best varies from person to person. Our travel experts are trained to help you to identify which trip suits your needs and wants the best, so get in contact with us and make sure you’re doing what actually suits you, instead of what everyone else is doing.','Nos dedicamos a mostrar lo mejor de este maravilloso país, y lo mejor varía de persona a persona. Nuestros expertos en viajes están capacitados para ayudarlo a identificar qué viaje se adapta mejor a sus necesidades y deseos, así que contáctenos y asegúrese de hacer lo que realmente le conviene, en lugar de lo que hacen los demás.','我们致力于展现这个美妙国度的精粹——而所谓精粹因人而异。我们的旅行专家经过专业培训，能助您精准匹配最契合个人需求与偏好的行程。请即刻联系我们，确保您选择的旅程真正属于自己，而非随波逐流。','Estamos empenhados em mostrar o que há de melhor neste país maravilhoso - e o melhor varia de pessoa para pessoa. Nossos especialistas em viagens são treinados para ajudá-lo a identificar qual viagem atende melhor às suas necessidades e desejos, então entre em contato conosco e certifique-se de que está fazendo o que realmente combina com você, em vez do que todo mundo está fazendo.')?>
            </p>
        </div>
        <div class="item_about">
            <div class="item_img_about">
                <?php echo wp_get_attachment_image(827,'full'); ?>
            </div>
        </div>

    </div>
</div>
<div class="container-xl">
    <div class="about_wp">
        <?php the_content();?>
    </div>
</div>


<?php
get_footer();
?>
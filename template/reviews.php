<?php 
        $getreviewstripadvisor =[
            [
              'name'=> 'jessica b',
              'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/df/2b/default-avatar-2020-39.jpg?w=100&h=-1&s=1',
              'date'=>'Apr 2024 ',
               'text'=> '<p>Excellent 1-day hike to the Rainbow Mountain with 69 explorer! The entire organization was impeccable and everything went according to plan.</p>
                <p>Highly recommended.</p>'
               
            ],
            [
                'name'=> 'Andrew Ian D',
                'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/f4/d0/default-avatar-2020-33.jpg?w=100&h=-1&s=1',
                'date'=>'Jul 2024',
                'text'=> 'We had the best experience hiking the 2 day Inca Trail to Machu Picchu with 69 Explorer Peru! Our guide Jhony was perfect.'
                 
            ],
            [
                'name'=> 'RyanNfromAthensUSA',
                'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/e8/ea/default-avatar-2020-63.jpg?w=100&h=-1&s=1',
                'date'=>'Jul 2024',
                 'text'=> 'Thanks to Cristian and Jaier, we had an unforgettable experience on our Rainbow Mountain tour and are having the time or our lives in Peru. In spite of cloudy and snowy conditions, Cristian’s patience and wisdom made our time at Rainbow Mountain simply magical.'
                 
              ]
            ];

            $getreviewsGoogle =[
                [
                  'name'=>'Sintia Páuccar vilca',
                  'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/df/2b/default-avatar-2020-39.jpg?w=100&h=-1&s=1',
                  'date'=>'Julio 2024 ',
                   'text'=> 'Amazing experience. I did the 4d 3N test with my boyfriend. The 69 explorer team was excellent. The guides Andre and Carlos were very patient and kind and encouraged us all the time.'
                   
                ],
                [
                    'name'=>'Fany Jacinto',
                    'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/f4/d0/default-avatar-2020-33.jpg?w=100&h=-1&s=1',
                    'date'=>'Jul 2024',
                     'text'=> 'Excellent service, highly recommended. The service and the guide are first class. If you had to return to Cusco, I would not hesitate to take the service again with this highly recommended company.'
                     
                ],
                [
                    'name'=>'ROBERT COLEMN HOOD',
                    'image'=>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/f6/e8/ea/default-avatar-2020-63.jpg?w=100&h=-1&s=1',
                    'date'=>'Jul 2024',
                    'text'=> 'Thank you for the fantastic experience!'
                  ]
                ];
     ?>
  <section class="py-5 <?php echo isset($args['class']) ? $args['class'] : ''; ?>">

        <div class="container-xxl">
            <div class="row gy-3  ">
                <div class="col-md-6">
                    <div class="position-relative p-0 pt-lg-3 px-lg-4">
                        <h3 class="fw-bold text-uppercase h3"><?php echo PearTheme::lang('HAPPY TRAVELERS','VIAJEROS FELICES','快乐旅行者','VIAJANTES FELIZES') ?></h3>
                        <p> <?php echo PearTheme::lang('At 69 Explorer, we take pride in our reviews. We believe they are a true reflection of our business and help us improve our services performance. We encourage all customers to leave a review, whether it is positive or negative . We take feedback seriously, as it helps us grow and improve as a business. We are thankful with all of our customers who have taken the time to leave a review.','En 69 Explorer, nos enorgullecemos de nuestras reseñas. Creemos que son un fiel reflejo de nuestro negocio y nos ayudan a mejorar el rendimiento de nuestros servicios. Animamos a todos los clientes a que dejen una reseña, ya sea positiva o negativa. Nos tomamos muy en serio los comentarios, ya que nos ayudan a crecer y mejorar como empresa. Agradecemos a todos nuestros clientes que se han tomado la molestia de dejar una reseña.','在69 Explorer，我们以客户评价为荣。我们相信这些评价真实反映了我们的业务状况，并有助于提升服务表现。我们鼓励所有客户留下评价，无论褒贬。我们认真对待每条反馈，因为这能推动企业成长与进步。衷心感谢所有抽出时间留下评价的客户。','Na 69 Explorer, temos orgulho das nossas avaliações. Acreditamos que elas são um reflexo fiel do nosso negócio e nos ajudam a melhorar o desempenho dos nossos serviços. Incentivamos todos os clientes a deixar uma avaliação, seja ela positiva ou negativa. Levamos os comentários a sério, pois eles nos ajudam a crescer e melhorar como empresa. Agradecemos a todos os nossos clientes que dedicaram seu tempo para deixar uma avaliação.') ?> </p>
                        <div class="py-3 d-flex align-items-center">
                            <div class="div">
                                <svg width="150" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 3354.111 713.496" enable-background="new 0 0 3354.111 713.496"
                                    xml:space="preserve">
                                    <script xmlns="" />
                                    <g>
                                        <path
                                            d="M3335.258,476.767c-10.404,0-18.854,8.45-18.854,18.854c0,10.404,8.449,18.854,18.854,18.854   c10.402,0,18.854-8.45,18.854-18.854C3354.111,485.217,3345.66,476.767,3335.258,476.767z M3335.258,511.485   c-8.77,0-15.865-7.136-15.865-15.864c0-8.77,7.135-15.864,15.865-15.864c8.77,0,15.904,7.135,15.904,15.864   C3351.162,504.35,3344.027,511.485,3335.258,511.485z M3341.396,492.392c0-3.428-2.432-5.461-6.02-5.461h-6.02v17.18h2.949v-6.218   h3.229l3.109,6.218h3.189l-3.428-6.855C3340.24,496.418,3341.396,494.743,3341.396,492.392z M3335.258,495.222h-2.91v-5.699h2.91   c1.992,0,3.188,0.996,3.188,2.83C3338.445,494.226,3337.211,495.222,3335.258,495.222z M1063.508,285.956v-45.6h-69.914v271.288   h69.914V348.976c0-29.457,18.894-43.927,48.351-43.927h38.266v-64.692h-32.686C1091.849,240.356,1069.607,253.709,1063.508,285.956   z M1215.615,133.053c-23.916,0-42.252,18.894-42.252,42.81c0,23.358,18.336,42.252,42.252,42.252s42.252-18.894,42.252-42.252   C1257.866,151.946,1239.531,133.053,1215.615,133.053z M1180.737,511.645h69.756V240.356h-69.756V511.645z M1582.766,376   c0,77.448-62.779,140.229-140.228,140.229c-31.251,0-59.591-10.244-82.312-27.544v102.601h-69.755V240.356h69.755v22.959   c22.721-17.299,51.061-27.543,82.312-27.543C1519.987,235.772,1582.766,298.552,1582.766,376z M1512.573,376   c0-42.052-34.12-76.173-76.173-76.173s-76.173,34.121-76.173,76.173c0,42.053,34.121,76.173,76.173,76.173   C1478.453,452.173,1512.573,418.093,1512.573,376z M2795.152,352.204l-40.697-11.161c-26.785-6.976-37.189-15.187-37.189-29.337   c0-13.792,14.668-23.438,35.635-23.438c19.971,0,35.635,13.074,35.635,29.815v1.554h64.295v-1.554   c0-49.228-40.139-82.312-99.93-82.312c-59.191,0-102.201,33.044-102.201,78.604c0,35.436,23.477,62.142,64.453,73.223   l38.984,10.643c29.615,8.211,40.617,17.3,40.617,33.603c0,17.18-15.904,28.739-39.582,28.739   c-24.674,0-41.295-15.626-41.295-38.824v-1.555h-68.24v1.555c0,55.645,44.803,94.548,108.979,94.548   c61.822,0,106.705-37.986,106.705-90.283C2861.32,400.354,2849.84,366.793,2795.152,352.204z M1830.219,240.356h69.754v271.288   h-69.754v-22.96c-22.721,17.3-51.062,27.544-82.312,27.544c-77.447,0-140.227-62.78-140.227-140.229s62.78-140.228,140.227-140.228   c31.25,0,59.592,10.244,82.312,27.543V240.356z M1830.219,376L1830.219,376c0-42.092-34.121-76.173-76.174-76.173   s-76.172,34.121-76.172,76.173c0,42.053,34.119,76.173,76.172,76.173C1796.137,452.173,1830.219,418.093,1830.219,376z    M2151.85,143.815h69.756v367.869h-69.756v-22.96c-22.721,17.3-51.061,27.544-82.311,27.544   c-77.449,0-140.229-62.78-140.229-140.229s62.779-140.228,140.229-140.228c31.25,0,59.59,10.244,82.311,27.543V143.815z    M2151.85,376c0-42.052-34.121-76.173-76.174-76.173c-42.051,0-76.172,34.121-76.172,76.173c0,42.053,34.08,76.173,76.172,76.173   C2117.729,452.173,2151.85,418.093,2151.85,376z M2545.469,511.645h69.754V240.356h-69.754V511.645z M2580.346,133.053   c-23.916,0-42.252,18.894-42.252,42.81c0,23.358,18.336,42.252,42.252,42.252s42.252-18.894,42.252-42.252   C2622.598,151.946,2604.262,133.053,2580.346,133.053z M3162.822,376c0,77.448-62.779,140.229-140.229,140.229   c-77.447,0-140.227-62.78-140.227-140.229s62.779-140.228,140.227-140.228C3100.043,235.772,3162.822,298.552,3162.822,376z    M3098.768,376c0-42.052-34.121-76.173-76.174-76.173s-76.172,34.121-76.172,76.173c0,42.053,34.08,76.173,76.172,76.173   C3064.646,452.173,3098.768,418.093,3098.768,376z M1027.793,143.815H760.212v62.222h99.053v305.607h69.516V206.037h99.053v-62.222   H1027.793z M2381.006,437.345l-62.062-196.988h-73.264l93.074,271.288h83.945l93.631-271.288h-73.264L2381.006,437.345z    M3265.023,285.956v-45.6h-69.914v271.288h69.914V348.976c0-29.457,18.895-43.927,48.35-43.927h38.266v-64.692h-32.684   C3293.363,240.356,3271.162,253.709,3265.023,285.956z" />
                                        <circle fill="#34E0A1" cx="356.749" cy="356.748" r="356.748" />
                                        <path
                                            d="M577.095,287.152l43.049-46.836h-95.465c-47.792-32.646-105.51-51.659-167.931-51.659   c-62.342,0-119.899,19.054-167.612,51.659H93.432l43.049,46.836c-26.387,24.075-42.929,58.754-42.929,97.259   c0,72.665,58.914,131.578,131.579,131.578c34.519,0,65.968-13.313,89.446-35.077l42.172,45.919l42.172-45.879   c23.478,21.764,54.887,35.037,89.406,35.037c72.665,0,131.658-58.913,131.658-131.578   C620.024,345.866,603.483,311.188,577.095,287.152z M225.17,473.458c-49.188,0-89.047-39.859-89.047-89.047   s39.86-89.048,89.047-89.048c49.187,0,89.047,39.86,89.047,89.048S274.357,473.458,225.17,473.458z M356.788,381.82   c0-58.595-42.61-108.898-98.853-130.383c30.413-12.716,63.776-19.771,98.813-19.771s68.439,7.055,98.853,19.771   C399.399,272.962,356.788,323.226,356.788,381.82z M488.367,473.458c-49.188,0-89.048-39.859-89.048-89.047   s39.86-89.048,89.048-89.048s89.047,39.86,89.047,89.048S537.554,473.458,488.367,473.458z M488.367,337.694   c-25.79,0-46.677,20.887-46.677,46.677c0,25.789,20.887,46.676,46.677,46.676c25.789,0,46.676-20.887,46.676-46.676   C535.042,358.621,514.156,337.694,488.367,337.694z M271.846,384.411c0,25.789-20.887,46.676-46.676,46.676   s-46.676-20.887-46.676-46.676c0-25.79,20.887-46.677,46.676-46.677C250.959,337.694,271.846,358.621,271.846,384.411z" />
                                    </g>
                                    <script xmlns="" />
                                </svg>
                            </div>
                            <div class="ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 92" width="100">
                                    <script xmlns="" />
                                    <path fill="#EA4335"
                                        d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z" />
                                    <path fill="#FBBC05"
                                        d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z" />
                                    <path fill="#4285F4"
                                        d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z" />
                                    <path fill="#34A853" d="M225 3v65h-9.5V3h9.5z" />
                                    <path fill="#EA4335"
                                        d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z" />
                                    <path fill="#4285F4"
                                        d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z" />
                                    <script xmlns="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active bg-transparent fw-bold text-dark" id="pills-triadvisor-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-triadvisor" type="button" role="tab"
                                aria-controls="pills-triadvisor" aria-selected="true">Tripadvisor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-transparent fw-bold text-dark" id="pills-google-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-google" type="button" role="tab"
                                aria-controls="pills-google" aria-selected="false">Google</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- content tabs tripadvisor -->
                        <div class="tab-pane fade show active" id="pills-triadvisor" role="tabpanel"
                            aria-labelledby="pills-triadvisor-tab" tabindex="0">
                            <div class="swiper sliderReviews">
                                <div class="swiper-wrapper">
                                    <?php foreach ($getreviewstripadvisor as $review =>$valueReviews): ?>
                                    <div class="swiper-slide">
                                        <div class="position-relative border  shadow-sm  rounded p-1 p-md-2 p-lg-4">
                                            <div class="d-flex justify-content-between px-3 pt-3">
                                                <div class="foto  d-flex align-items-center">
                                                    <div>
                                                        <div class="rounded-circle overflow-hidden"
                                                            style="width: 3rem;">
                                                            <img class="w-100 h-100"
                                                                src="<?php echo $valueReviews['image'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span
                                                            class="d-block fs-6 fw-bold"><?php echo $valueReviews['name'] ?></span>
                                                        <span
                                                            class="fw-normal  text-muted fs-sm letter-spacing-2"><em><?php echo $valueReviews['date'] ?></em></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img width="30"
                                                        src="https://cdn.trustindex.io/assets/platform/Tripadvisor/icon.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="px-2 py-1">
                                                <div class="rating fs-sm-9 mt-1 ms-3">
                                                    <span style="color:#11ad87;">
                                                        <i class="bi bi-circle-fill"></i>
                                                        <i class="bi bi-circle-fill"></i>
                                                        <i class="bi bi-circle-fill"></i>
                                                        <i class="bi bi-circle-fill"></i>
                                                        <i class="bi bi-circle-fill"></i>
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-justify text-muted mt-2 px-2 overflow-auto custom-scroll">
                                                    <p class=""><?php echo $valueReviews['text'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <br>
                                <div class="custom-controls-reviews mt-3 controls-relative d-flex justify-content-between  align-items-center">
                                    <div class="ms-3"> 
                                        <a rel="nofollow" href="https://www.tripadvisor.com/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" class="btn btn-primary text-white" target="_blank"><?php echo PearTheme::lang('View All Reviews','Ver todas las opiniones','查看所有评论','Ver todas as avaliações') ?> <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- content   tabs gogle  -->
                        <div class="tab-pane fade" id="pills-google" role="tabpanel"
                            aria-labelledby="pills-google-tab" tabindex="0">
                            <div class="swiper sliderReviews">
                                <div class="swiper-wrapper">
                                    <?php foreach ($getreviewsGoogle as $review =>$valueReviews): ?>
                                    <div class="swiper-slide">
                                        <div class="position-relative border  shadow-sm  rounded p-1 p-md-2 p-lg-4">
                                            <div class="d-flex justify-content-between px-3 pt-3">
                                                <div class="foto  d-flex align-items-center">
                                                    <div>
                                                        <div class="rounded-circle overflow-hidden"
                                                            style="width: 3rem;">
                                                            <img class="w-100 h-100"
                                                                src="<?php echo $valueReviews['image'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span
                                                            class="d-block fs-6 fw-bold"><?php echo $valueReviews['name'] ?></span>
                                                        <span
                                                            class="fw-normal  text-muted fs-sm letter-spacing-2"><em><?php echo $valueReviews['date'] ?></em></span>
                                                    </div>
                                                </div>
                                                <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="-3 0 262 262" preserveAspectRatio="xMidYMid"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"/><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"/><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"/><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"/></svg>
                                                </div>
                                            </div>
                                            <div class="px-2 py-1">
                                                <div class="rating fs-sm-9 mt-1 ms-3">
                                                <span style="color:#ffc112;">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-justify text-muted mt-2 px-2 overflow-auto custom-scroll">
                                                    <p class=""><?php echo $valueReviews['text'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <br>
                                <div class="custom-controls-reviews mt-3 controls-relative d-flex justify-content-between  align-items-center">
                                    <div class="ms-3"> 
                                        <a rel="nofollow" href="https://www.google.com/maps/place/69+Explorer+Peru/@-13.518026,-71.9871426,15.75z/data=!4m8!3m7!1s0x916dd7fcf410e2fd:0x885bcee450e34120!8m2!3d-13.5175839!4d-71.9804445!9m1!1b1!16s%2Fg%2F11vy8sj0dq?entry=ttu" class="btn btn-primary" target="_blank"> <?php echo PearTheme::lang('View All Reviews','Ver todas las opiniones','查看所有评论','Ver todas as avaliações') ?>  <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                    <div class="d-flex">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
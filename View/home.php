<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Public/css/style.css">

    <!-- SCRIPT -->

    <script src="../Public/js/swiper.js" defer></script>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Dogma</title>
</head>
<body>
    <header class="header_user">
        <nav>
            <div class="img_container_logo">
                <a href="../View/home.php"><img src="../Public/img/D-removebg-preview.png" alt=""></a>
            </div>
            <ul>
                <li>
                    <a href="#serviços">Serviços</a>
                </li>
                <li>
                    <a href="#sobre">Sobre Nós</a>
                </li>
                <li>
                    <a href="#avaliações">Avaliações</a>
                </li>
                <li>
                    <a href="#contato">Contato</a>
                </li>
            </ul>
            <div class="container_btn_consulta">
                <a href="../View/cadastro.php" class="btn_consulta">+ Consulta</a>
            </div>

        </nav>
    </header>
    <main>
        <section class="banner_cont">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="../Public/img/1.png" alt=""></div>
                  <div class="swiper-slide"><img src="../Public/img/2.png" alt=""></div>
                  <div class="swiper-slide"><img src="../Public/img/3.png" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </section>
        <section id="serviços" class="serviços">
            <div class="title_default_cont">
                <h3>Para Eles</h3>
            </div>
            <div class="container_card_service">
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Consulta Clínica Geral</div>
                    <div class="body_service">Avaliação de saúde e diagnósticos iniciais.</div>
                </div>
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-syringe"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Vacinação</div>
                    <div class="body_service">Aplicação de vacinas essenciais e complementares.</div>
                </div>
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-shower"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Banho e Tosa</div>
                    <div class="body_service">Cuidados com higiene e estética.</div>
                </div>
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-dog"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Castração</div>
                    <div class="body_service">Procedimentos de esterilização com suporte pós-operatório.</div>
                </div>
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-bone"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Adestramento</div>
                    <div class="body_service">Treinamento para correção de comportamento e obediência.</div>
                </div>
                <div class="card_service">
                    <div class="img_service">
                        <i class="fa-solid fa-stethoscope"></i>
                        <div class="shape_service"></div>
                    </div>
                    <div class="title_service_card">Exames Laboratoriais</div>
                    <div class="body_service">Hemogramas, exames de urina, fezes e bioquímicos.</div>
                </div>
            </div>

        </section>
        <section id="sobre" class="sobre_vet">
            <div class="title_default_cont">
                <h3>Sobre Nós</h3>
            </div>
            <div class="conatiner_sobre_body">
                <div class="sobre_left">
                    <img src="../Public/img/Web search-pana.png" alt="">
                </div>
                <div class="sobre_right">
                    <div class="sobre_title">Lorem ipsum dolor sit, amet consectetur.</div>
                    <div class="text_sobre">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis rem aliquid harum expedita a sequi, delectus, molestiae, quae enim libero pariatur. Pariatur ipsum ullam perspiciatis qui laudantium dolorem corporis accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi, voluptatibus ratione assumenda explicabo similique facere cum natus est aliquid maxime iure, laborum minima harum. Eligendi adipisci fugit corrupti consequatur.</div>
                    <div class="sobre_btn">
                        <a href="">Agende</a>
                    </div>
    
                </div>
            </div>
        </section>
        <section id="avaliações" class="Avaliação">
            <div class="title_default_cont">
                <h3>Avaliação</h3>
            </div>
            <div class="container_ava_body">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="card_ava">
                            <div class="container_img_ava">
                                <img src="../Public/img/Photo by Dapo Abideen on Pexels.jfif" alt="">
                            </div>
                            <div class="name_ava">João da Silva</div>
                            <div class="text_ava">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, minus necessitatibus, est voluptate sapiente animi aliquam pariatur labore nam esse soluta id porro repudiandae vitae. Saepe itaque accusantium quos assumenda!</div>
                            <div class="container_star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>

                            </div>
                            
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card_ava">
                            <div class="container_img_ava">
                                <img src="../Public/img/Photo by Dapo Abideen on Pexels.jfif" alt="">
                            </div>
                            <div class="name_ava">João da Silva</div>
                            <div class="text_ava">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, minus necessitatibus, est voluptate sapiente animi aliquam pariatur labore nam esse soluta id porro repudiandae vitae. Saepe itaque accusantium quos assumenda!</div>
                            <div class="container_star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>

                            </div>
                            
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card_ava">
                            <div class="container_img_ava">
                                <img src="../Public/img/Photo by Dapo Abideen on Pexels.jfif" alt="">
                            </div>
                            <div class="name_ava">João da Silva</div>
                            <div class="text_ava">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, minus necessitatibus, est voluptate sapiente animi aliquam pariatur labore nam esse soluta id porro repudiandae vitae. Saepe itaque accusantium quos assumenda!</div>
                            <div class="container_star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>

                            </div>
                            
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </section>
        <section id="contato" class="contato">
            <div class="contato_body">
                <div class="title_contato">Caso tenha alguma dúvida sobre o cuidado do seu pet, não hesite em entrar em contato conosco!</div>
                <div class="container_btn_contato">
                    <button class="btn_contato open-modal" data-modal="modal-1">Telefone <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </section>
        <dialog id="modal-1">
            <div class="modal_header">
              <button class="close-modal" data-modal="modal-1"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal_body">
              <h5 class="title_modal_zap">Entre em contato!</h5>
              <div class="text_modal_zap">Segue o nosso número de telefone para qualquer dúvida sobre nosso atendimento.</div>
              <div class="conatiner_item_modal_link_zap">
                <div class="item_modal_link_zap">
                  <i class="fa-solid fa-phone"></i>
                  <a href="#">67 991924837</a>
                </div>
              </div>  
            </div>
          </dialog>
          <script src="../Public/js/modal.js"></script>
    </main>
    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="">Sobre Nós</a></li>
                        <li><a href="">Politica de Cookies</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Categorias</h4>
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Serviços</a></li>
                        <li><a href="">Avaliação</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-col contato-footer">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-whatsapp"></i><p>(67) 992934537</p></a></li>
                        <li><a href=""><i class="fa-solid fa-phone"></i><p>(67) 992934537</p></a></li>
                        <li><a href=""><i class="fa-regular fa-envelope"></i><p>contato@dogma.com</p></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Redes Sociais</h4>
                    <div class="link-social-media">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
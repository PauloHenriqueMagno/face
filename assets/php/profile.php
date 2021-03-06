<!DOCTYPE HTML> 
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Paulo Henrique Magno">
        <meta name="viewport" content="width=device-width, incial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./assets/css/face.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <header class="main_header">
            
            <div class="header_background_image">
                <img src="./assets/images/user.png" alt="Usuario" class="header_user">
                <button class="header_user_camera mobile_hidden">
                <img src="./assets/images/camera.png" alt="Mudar imagem de usuario">
                </button>
                <button class="header_background_button"><img src="./assets/images/camera.png"><span class="mobile_hidden">Editar foto de capa</span></button>
            </div>

            <div class="container">
                <h1 class="header_user_name user_name" id="user_name"></h1>
                <p class="header_user_biografia"><a href="#">Adicionar biografia</a></p>
            </div>

        </header>
        <main class="main_main">
            <div id="main_stick-menu_container">
                <div class="container">
                    <nav class="main_stick-menu">
                           
                        <ul class="main_stick_menu_left">
                            <li class="mobile_hidden">
                                <input class="hidden" type="radio" id="pub" name="menu" alt="Publicações">
                                <button><label for="pub">Publicações</label></button>
                            </li>
                            <li class="mobile_hidden">
                                <input class="hidden" type="radio" id="sobre" name="menu" alt="Sobre">
                                <button><label for="sobre">Sobre</label></button>
                            </li>
                            <li class="mobile_hidden">
                                <input class="hidden" type="radio" id="amigos" name="menu" alt="Amigos">
                                <button><label for="amigos">Amigos</label></button>
                                <div class="friends">
                                    <p>Você não tem amigos <img src="./assets/images/sadface.png" alt="sad face"></p>
                                </div>
                            </li>
                            <li class="mobile_hidden">
                                <input class="hidden" type="radio" id="fotos" name="menu" alt="Fotos">
                                <button><label for="fotos">Fotos</label></button>
                            </li>
                            <li>
                                <button id="more">Mais</button>
                                <nav class="hidden" id="more-menu">
                                    <ul>
                                    <li class="mobile_show"><button>Publicações</button></li>
                                    <li class="mobile_show"><button>Sobre</button></li>
                                    <li class="mobile_show"><button>Amigos</button></li>
                                    <li class="mobile_show"><button>Fotos</button></li>
                                    <li><button>Arquivo de stories</button></li>
                                    <li><button>Vídeos</button></li>
                                    <li><button>Check-ins</button></li>
                                    <li><button>Esportes</button></li>
                                    <li><button>Música</button></li>
                                    <li><button>Cinemas</button></li>
                                    <li><button>Programas de TV</button></li>
                                    <li><button>Livros</button></li>
                                    <li><button>Aplicativos e jogos</button></li>
                                    <li><button>Curtidas</button></li>
                                    <li><button>Eventos</button></li>
                                    <li><button>Perguntas</button></li>
                                    <li><button>Avaliações feitas</button></li>
                                    <li><button>Grupos</button></li>
                                    <li><button>Gerenciar seções</button></li>
                                    </ul>        
                                </nav>
                            </li>
                        </ul>

                        <ul class="main_stick_menu_right">
                            <li><button><img src="./assets/images/mais.png">Adicionar ao story</button></li>
                            <li><button id="button_change_profile_info"><img src="./assets/images/lapis.png">Editar nome</button></li>
                            <li><button>...</button></li>
                        </ul>

                    </nav>
                </div>
            </div>

            <div class="container flex">

            <aside class="main_content_aside flex">

                <section class="presentation flex main_aside">
                    <h2>Apresentação</h2>
                    <ul>
                        <li><img src="./assets/images/house.png"><p>Mora em <strong>São Paulo</strong></p></li>
                        <li><img src="./assets/images/gps.png"><p>De <strong>São Paulo</strong></p></li>
                        <li><img src="./assets/images/heart.png"><p>Em um relacionamento sério com <strong>Programação</strong></p></li>
                    </ul>
                    <button>Editar detalhes</button>
                    <button>Adicionar hobbies</button>
                    <button>Adicionar destaques</button>
                </section>

                <section class="main_content_aside_section main_aside">
                    <header class="flex">
                        <h2>Fotos</h2>
                        <button>Ver todas as fotos</button>
                    </header>
                    <main class="pictures_grid grid">
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    <figure class="aside_figure">
                        <img src="./assets/images/duck.jpg" alt="foto de pato de borracha">
                        <figcaption class="hidden">Pato</figcaption>
                    </figure>
                    </main>
                </section>
                <section class="main_content_aside_section main_aside friends_section">
                    <header class="flex_column">
                        <div class="flex"><h2>Amigos</h2>
                        <button>Ver todos os amigos</button></div>
                        <p>8 amigos</p>
                    </header>
                    <main class="pictures_grid grid">
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Erwin Smith</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Eren Yeager</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Marco Bodt</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Reiner Braun</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Mikasa</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Sasha Braus</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Jean Kirstein</figcaption>
                        </figure>
                        <figure class="aside_figure">
                            <img src="./assets/images/user.png" alt="user">
                            <figcaption>Ymir</figcaption>
                        </figure>
                    </main>
                </section>

            </aside>

            <div class="main_content" id="publications">
                <section class="main_content_post_send">
                    <div class="main_content_post_send_input flex">
                        <img src="./assets/images/user.png" alt="Usuário">
                        <button id="button_post_content">No que você está pensando?</button>
                    </div>
                    <div class="main_content_post_send_buttons flex">
                        <button>
                            <img src="./assets/images/video_camera_red.png" alt="camera">
                            Video ao vivo
                        </button>
                        <button>
                            <img src="./assets/images/photos.png" alt="fotos">
                            Foto/video
                        </button>
                        <button>
                            <img src="./assets/images/flag_blue.png" alt="bandeira">
                            Acontecimento
                        </button>
                    </div>
                </section>
            </div>

            </div>
            </div>
        </main>
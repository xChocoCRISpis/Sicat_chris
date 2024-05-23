<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> <!-- Incluye los estilos de la sidebar -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="icon_menu">
            <i class="fas fa-bars" id="btn_open"></i>
            <h2>SICAT</h2>
        </div>
    </header>

    <div class="menu_side" id="menu_side">
        <div class="name_page">
            <i class="fas fa-pen-nib"></i>
            <h4>SICAT</h4>
        </div>
        <div class="options_menu">
            <a href="{{ route('inicio') }}" class="selected">
                <div class="option">
                    <i class="fas fa-house" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="{{ route('VerAlumnos') }}">
                <div class="option">
                    <i class="fas fa-people-robbery" title="Actividades"></i>
                    <h4>Actividades</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fas fa-pen-to-square" title="Eventos"></i>
                    <h4>Eventos</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fab fa-gitter" title="Indicadores"></i>
                    <h4>Indicadores</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fab fa-leanpub" title="Reportes"></i>
                    <h4>Reportes</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fas fa-person-shelter" title="Perfil"></i>
                    <h4>Perfil</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fas fa-person-walking-arrow-right" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>
        </div>
    </div>

    <main>
        <section>
            <div class="container-form">
                <div class="actividad">
                    <h2>Actividades</h2>
                    <div class="depor">
                        <a href="#"><h1>Actividades Deportivas</h1></a>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima eius, nostrum sunt fugiat ratione quis ducimus illum minus sapiente fugit laudantium nemo praesentium unde illo adipisci, temporibus, laboriosam voluptatibus excepturi. Modi atque placeat delectus sit necessitatibus sapiente! Possimus repellat expedita alias deleniti aut tenetur assumenda quos porro minima, error a?</p>
                        <div class="slider-frame">
                            <ul>
                                <li><img src="img/dep_bk.jpg" alt=""></li>
                                <li><img src="img/dep_fb.jpg" alt=""></li>
                                <li><img src="img/dep_tk.jpg" alt=""></li>
                                <li><img src="img/dep_vb.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cult">
                        <a href="#"><h1>Actividades Culturales</h1></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae odio atque corrupti odit ullam nostrum ducimus quidem minima alias est dicta culpa labore eum qui omnis veniam facere fugit dolores, quod quam dolorum voluptate. Voluptas consequuntur id delectus, dignissimos pariatur dolorum sit iusto obcaecati. Quas laudantium neque qui officia sit!</p>
                        <div class="slider-frame">
                            <ul>
                                <li><img src="img/cul_bg.jpg" alt=""></li>
                                <li><img src="img/cul_dan.jpg" alt=""></li>
                                <li><img src="img/cul_dz.jpg" alt=""></li>
                                <li><img src="" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
    </main>

    <script src="js/script.js"></script>
    <script>
        document.getElementById('btn_open').addEventListener('click', function() {
            const menuSide = document.getElementById('menu_side');
            const mainContent = document.querySelector('main');
            menuSide.classList.toggle('active');
            if (menuSide.classList.contains('active')) {
                mainContent.style.marginLeft = '250px';
            } else {
                mainContent.style.marginLeft = '0';
            }
        });
    </script>
</body>
</html>

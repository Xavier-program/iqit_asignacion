<!-- Encabezado -->
<header class="d-flex align-items-center px-3 fixed-top mb-5">
    
    <nav class="contenedor-nav">
        <div class="back">

            <div class="menu container">

                <a href="#" class="logo"> <img class="logo"  src="{{ asset('imagenes/logoinegibco.png')}}" alt=""></a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <i class="fa-solid fa-bars" class="menu-icono"></i>

                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="/inicioSesion"><i class="fa-regular fa-user"></i></a></li>
                        @auth
                        <li class="dropdown">
                            <a class="link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->email}}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/logout"> Cerrar sesión</a></li>
                            </ul>

                        </li>
                        @endauth
                        
                    </ul>
                </nav>

            </div>

        </div>

    </nav>
    
</header>
<div class="mb-5">
    &nbsp;
</div>
<div class="mb-5">
    &nbsp;
</div>
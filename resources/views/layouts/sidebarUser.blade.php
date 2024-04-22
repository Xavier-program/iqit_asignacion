
<div class="sidebar">
    <div class="top">
        <i class="fa-solid fa-bars" id="btn"></i>
    </div>
    <div class="user">
        <div>
           
        </div>
    </div>
    <ul class="mx-0 px-0">
        <!-- Home -->
        <li>
            <a href="{{ url ('/users') }}">
                <i class="fa-solid fa-house iconos"></i>
                <span class="nav-item">Inicio</span>
            </a>
            <span class="tooltip">Inicio</span>
        </li>
        <!-- Descargar formularios -->
        <li>
            <a href="{{ url('usuario/'.$usuario->id.'/descargar') }}">
                <i class="fa-solid fa-download iconos"></i>
                <span class="nav-item">Descargar formularios</span>
            </a>
            <span class="tooltip">Descargar formularios</span>
        </li>
        <!-- Subir formularios -->
        <li>
            <a href="{{ url('usuario/'.$usuario->id) }}">
                <i class="fa-solid fa-upload iconos"></i>
                <span class="nav-item">Subir formularios</span>
            </a>
            <span class="tooltip">Subir formularios</span>
        </li>


    </ul>
</div>


<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');   
    btn.onclick = function() {
        sidebar.classList.toggle('active');
    };
</script>
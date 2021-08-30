<header id="header" class="sticky-top">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark font-italic">
        <div class="container">
            <!--brand-->
            <a href="{{ route('home') }}" class="navbar-brand">
                <!--logo-->
                <h2 class="font-italic">
                    Activity
                    <span class="badge badge-primary shadow">Online</span>
                </h2>
            </a>

            <!--nav button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navlinks">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--nav Links-->
            <div class="collapse navbar-collapse justify-content-end" id="navlinks">
                <ul class="navbar-nav text-center">
                    <!--home-->
                    <li class="nav-item " aria-current="page">

                        <a href="{{ route('home') }}" class="nav-link"  >
                            <i class="fas fa-tachometer-alt"></i>
                            Inicio</a>

                    </li>

                    <li class="nav-item ml-1">
                        <a href="{{ route('cursos.index') }}" class="nav-link" >
                            <i class="fas fa-book"></i>
                            Cursos</a>
                    </li>



                    <li class="nav-item ml-1">
                        <a href="{{route('alumnos.index')}}" class="nav-link">
                            <i class="fas fa-user-friends"></i>
                            Alumnos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--nav end-->
</header>

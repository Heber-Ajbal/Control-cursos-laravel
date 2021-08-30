@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
<main>
    <!--banner-->
    <article id="banner" class="jumbotron jumbotron-fluid">
        <div class="font-italic pl-4 mt-4 text-light">
            <h1 class="display-1 font-italic">
                Activity
                <span class="badge badge-primary shadow">Online</span>
            </h1>

            <p class="lead mt-5">
                La calidad nunca es un accidente, siempre es resultado de un esfuerzo de la inteligencia (John Ruskiin)
            </p>
        </div>
    </article>
    <!--banner end-->

    <div class="container mt-4">


        <div class="row justify-content-center font-italic mt-4">

            <div class="col-md-4">
                <!--product card-->
                <article class="card text-center font-italic mb-4">
                    <!--product image-->
                    <img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/870D/production/_111437543_197389d9-800f-4763-8654-aa30c04220e4.png"
                        alt="image" class="card-img-top">
                    <div class="card-body">
                        <!--product name-->
                        <h5 class="card-title">
                            Cursos
                        </h5>

                        <h6 class="card-text mb-3">
                             Podra ver y crear nuevos cursos
                        </h6>

                        <!--more info button-->
                        <a href="{{route('cursos.index')}}" class="btn btn-success mb-2">

                            <i class="fa fas fa-eye" aria-hidden="true"></i>
                            ver
                        </a>

                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <!--product card-->
                <article class="card text-center font-italic mb-4">
                    <!--product image-->
                    <img src="https://www.unir.net/wp-content/uploads/2020/09/iStock-846054638.jpg" alt="image"
                        class="card-img-top">
                    <div class="card-body">
                        <!--product name-->
                        <h5 class="card-title">
                            Alumnos
                        </h5>
                        <!--product rating-->

                        <!--product category-->

                        <!--product price-->
                        <h6 class="card-text mb-3">
                            Podra visualizar a los alumnos registrados
                        </h6>

                        <!--more info button-->
                        <a href="{{route('alumnos.index')}}" class="btn btn-success mb-2">
                            <i class="fa fas fa-eye" aria-hidden="true"></i>
                            Ver
                        </a>
                        <!--add to cart button-->

                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection




<style>
    #banner {
        background:
            url("http://canalcatorce.tv/img/vod/thumbnails/943.jpeg") no-repeat;
        background-size: cover;
        height: 400px;
        background-position: 0 0;
    }

    @media screen and (max-width:768px) {

        #banner {
            background-size: cover;
            height: 300px;
            background-position: right bottom;
        }

        #banner h1 {
            font-size: 3.2rem !important;
        }

        #banner p {
            padding: 0.5rem;
            text-align: center;
        }

    }


    h5.card-title {
        line-height: 1.6rem;
    }


    #footer a {
        padding: 0.8rem;
    }

</style>

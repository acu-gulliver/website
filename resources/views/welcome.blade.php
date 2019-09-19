@extends('layouts.public')


@section('content')
    <main id="main_container">
        <section id="novita_evidenza">
            <article>
                <div class="novita-foto">
                    <!--SliderHomepage-->
                    <div id="slider" class="slider-size">
                        <script type="text/javascript">
                            $('#slider').vegas({
                                slides: [
                                    {src: "static/img/sliderhome/1.jpg"},
                                    {src: "static/img/sliderhome/2.jpg"},
                                    {src: "static/img/sliderhome/3.jpg"},
                                    {src: "static/img/sliderhome/4.jpg"},
                                    {src: "static/img/sliderhome/5.jpg"},
                                    {src: "static/img/sliderhome/6.jpg"},
                                    {src: "static/img/sliderhome/7.jpg"},
                                    {src: "static/img/sliderhome/8.jpg"},
                                    {src: "static/img/sliderhome/9.jpg"}
                                ],

                            });
                        </script>
                    </div>
                    <!--SliderHomepage-->
                </div>

                <div class="novita-testo">
                    <div class="container">
                        <div class="row">
                            @foreach($primaPagina as $post)
                                <div class="col-md-6">

                                    <h2><a href="{{url('/primapagina/'.$post->post_name)}}"
                                           title="{{$post->title}}">
                                            {{$post->post_title}}
                                        </a></h2>
                                    <p>{!! substr(strip_tags($post->content),0,255) !!}</p>
                                    <a href="{{url('/primapagina//')}}" title="Vai alla pagina: Tutte le novità" class="tutte">Tutte
                                        le
                                        novità
                                        <svg class="icon">
                                            <use xlink:href="static/img/ponmetroca.svg#ca-arrow_forward"></use>
                                        </svg>
                                    </a>
                                </div>

                        </div>
                        <br>
                        <br>
                        <br>
                        @endforeach
                    </div>
                </div>
            </article>
        </section>
        <section id="novita">
            <div class="container">
                <div class="mt-88n">
                    <div class="row row-eq-height">

                        @forelse($posts as $post)
                            <div class="col-md-3">
                                <article class="scheda scheda-round">
                                    <div class="scheda-icona-small">
                                        <a href="{{url('/'.$post->taxonomies->first()->slug)}}" title="Vai alla pagina: Giunta e Consiglio">
                                            <i class="fa fa-newspaper-o"></i>
                                            {{$post->taxonomies->first()->name}}
                                        </a>
                                    </div>
                                    <div class="scheda-testo-small">
                                        <h4><a href="{{url('/'.$post->taxonomies->first()->slug."/".$post->post_name)}}"
                                               title="Vai alla pagina: Giunta comunale">{{$post->post_title}}</a></h4>
                                        <p>{!! substr(strip_tags($post->content),0,255) !!}</p>
                                    </div>
                                    <div class="scheda-footer">
                                        <a href="{{url('/'.$post->taxonomies->first()->slug)}}" title="Vai alla pagina: {{$post->taxonomies->first()->name}}"
                                           class="tutte">Tutte le news in {{$post->taxonomies->first()->name}}
                                            <svg class="icon">
                                                <use xlink:href="static/img/ponmetroca.svg#ca-arrow_forward"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @empty
                        @endforelse
                        <div class="fb-page" data-href="https://www.facebook.com/ACUGulliverSU/?ref=br_rs" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ACUGulliverSU/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ACUGulliverSU/?ref=br_rs">Acu Gulliver Sinistra Universitaria</a></blockquote></div>
                    </div>
                </div>
            </div>
        </section>


        <section id="argomenti_evidenza">
            <div class="widget">
                <div class="argomenti-foto">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="titolosezione">
                                    Ultime Notizie
                                </h2>
                            </div>
                        </div>
                    </div>
                    <section id="siti_tematici">
                        <div class="container">
                            <div class="widget">
                                <div class="row row-eq-height">
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito ateneo-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-university"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/ateneo')}}"
                                                   title="Vai alla sezione Ateneo">
                                                    <strong>Ateneo</strong><br>
                                                    <!-- Inserire il link alle news dell'ateneo-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito ingegneria-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-cogs"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/ingegneria')}}"
                                                   title="Vai alla sezione Ingegneria">
                                                    <strong>Ingegneria</strong><br>
                                                    <!-- Inserire il link alle news ingegneria-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito economia-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-bar-chart"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/economia')}}"
                                                   title="Vai alla sezione Economia">
                                                    <strong>Economia</strong><br>
                                                    <!-- Inserire il link alle news economia-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito medicina-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-medkit"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/medicina')}}"
                                                   title="Vai alla sezione Medicina">
                                                    <strong>Medicina</strong><br>
                                                    <!-- Inserire il link alle news medicina-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito scienze-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-flask"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/scienze')}}"
                                                   title="Vai alla sezione Scienze">
                                                    <strong>Scienze</strong><br>
                                                    <!-- Inserire il link alle news scienze-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb16">
                                        <div class="scheda-sito agraria-bar">
                                            <div class="icona-sito">
                                                <i class="fa fa-2x fa-tree"></i>
                                            </div>
                                            <p>
                                                <a href="{{url('/agraria')}}"
                                                   title="Vai alla sezione Agraria">
                                                    <strong>Agraria</strong><br>
                                                    <!-- Inserire il link alle news agraria-->
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>


        <section id="calendario">  <!--spostata sezione calendario-->
            <div class="container">
                <div class="row">
                    <div id="calendar-container" class="col-lg-8 col-md-8 mb16">
                        <div id="calendar-title">
                            <span class="orange">Gulliver</span> <span class="e2">NextEvents</span>
                        </div>
                        <div id="calendar-list">

                        </div>
                        <a id="calendar-button" class="orange" href="https://calendar.google.com/calendar?cid=bnJibmdza3NybDEycGswZDg2aWszOTVsbmtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">Salva il calendario!</a>
                        <p class="e2" id="calendar-description">Salvando il calendario nel tuo account google ti verranno notificate tutte le attività, gli scioperi, le feste e le manifestazioni</p>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

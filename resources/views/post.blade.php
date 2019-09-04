@extends('layouts.public')

@section('content')
    <main id="main_container">

        <section id="briciole">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-9 col-md-12">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}"
                                                               title="Vai alla pagina: Home">Home</a><span
                                            class="separator">/</span></li>
                                <li class="breadcrumb-item" style="text-transform: capitalize"><a href="{{url('/'.$category)}}"
                                                               title="Vai alla pagina: {{$category}}">{{$category}}</a><span
                                            class="separator"></span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-8">
                        <div class="titolo-sezione">
                            <h1 style="font-size: 1.555rem;line-height: 1.428;font-weight: 600;">
                                {{$post->post_title}}
                            </h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="articolo-dettaglio-testo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 linetop pt8">
                        <div class="articolo-paragrafi">
                            <br>
                            <div class="row">
                                <div class="offset-md-1 col-md-10 testolungo">
                                    <p>
                                        {!! $post->content !!}
                                    </p>
                                    <br>
                                    <p>Condividi sui social</p>
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <br>
    <br>
    <br>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5b09af45bed0ae"></script>
    @endsection

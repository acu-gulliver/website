@extends('layouts.public')

@section('content')
    <main id="main_container">

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
                            <br>
                            <br>
                            <div class="row">
                                <div class="offset-md-1 col-md-10 testolungo">
                                    <p>
                                        {!! $post->content !!}
                                    </p>

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
@endsection
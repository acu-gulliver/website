@extends('layouts.public')

@section('content')
    <main id="main_container">


        <section id="sezioni-notizie" class="pt64">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titolosezione"><h3>Ultime notizie in:
                                <strong style="text-transform: capitalize;">{{$current_category}} </strong></h3></div>
                    </div>
                </div>
                <div class="row row-eq-height">
                    @forelse($posts as $post)
                        <div class="col-md-4" style="padding-bottom: 30px;">
                            <article class="scheda scheda-round scheda-news">
                                <div class="scheda-testo mt32">
                                    <h4><a href="{{url('/'.$post->taxonomies->first()->slug."/".$post->post_name)}}"
                                           title="Vai alla pagina: Elenco dei canditati per il collegio sindacale del CTM">
                                            {{$post->post_title}}
                                        </a></h4>
                                    <p>{!! substr(strip_tags($post->content),0,255) !!}</p>
                                </div>
                            </article>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-md-12 veditutti text-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

@section('js')
    <script>
        $(".pagination").addClass('justify-content-center');
    </script>
@endsection
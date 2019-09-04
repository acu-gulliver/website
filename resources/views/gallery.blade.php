@extends('layouts.public')

@section('css')
    <link href="{{asset('static/css/gallerystyle.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')



    <div class="widget">
    <div class="container-left" >
        <div id="foto" class="container-left-section">
            <script type="text/javascript"  >
                $('#foto').vegas({
                    timer: false,
                    shuffle: true,
                    slides: [
                        @forelse($media as $file)
                        { src: "{{wp_asset($file)}}" },
                        @empty
                        { src: "static/img/sliderhome/1.jpg" },
                        { src: "static/img/sliderhome/2.jpg" },
                        { src: "static/img/sliderhome/3.jpg" }
                        @endforelse
                    ],
                    overlay:'static/img/overlay-vegas.png',

                });
            </script>
        </div>
    </div>

    <div class="container-right" >
        <div id="eventi" class="container-right-section">
            <script type="text/javascript"  >
                $('#eventi').vegas({
                    timer: false,
                    shuffle: true,
                    delay: 5005,
                    slides: [
                        { src: "static/img/sliderhome/4.jpg" },
                        { src: "static/img/sliderhome/5.jpg" },
                        { src: "static/img/sliderhome/6.jpg" }
                    ],
                    overlay:'static/img/overlay-vegas.png',

                });
            </script>
        </div>
    </div>

    <div class="container-video">
        <div id="video" class="container-video-section">
            <script type="text/javascript"  >
                $('#video').vegas({
                    timer: false,
                    shuffle: true,
                    delay: 5010,
                    slides: [
                        { src: "static/img/sliderhome/7.jpg" },
                        { src: "static/img/sliderhome/8.jpg" },
                        { src: "static/img/sliderhome/9.jpg" }
                    ],
                    overlay:'static/img/overlay-vegas.png',

                });
            </script>
        </div>
    </div>
    </div>
    <!--Inclusione slider javascript-->
    <script src="http://zeptojs.com/zepto.min.js"></script>
    <!--Inclusione slider javascript-->
    <!--Script Galleria-->
    <!--Script Galleria-->
@endsection

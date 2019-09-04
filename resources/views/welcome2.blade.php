<html>
<head>
    <title>Test gulliver</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <h2>GULLIVER LARAVEL + WORDPRESS BRIDGE</h2>
        <br>
        <br>
    </div>
    <div class="row">
            <div class="col-md-8">
                @forelse($posts as $post)
                    <br>
                    <div class="row">
                        <h3>{{$post->post_title}}</h3>
                        <p>{!! substr(strip_tags($post->content),0,255) !!}
                            <br>
                            <a href="{{url('/post',$post->ID)}}">Continua a leggere...</a>
                            </p>
                    </div>
                    <br>

                @empty
                    <h3>NESSUN POST TROVATO</h3>
                @endforelse
            </div>
            <div class="col-md-4">
                <ul>
                    @forelse($categories as $category)
                        <li><a href="{{url("/",$category->term->slug)}}">{{$category->term->name}}</a></li>
                    @empty
                        <li>NESSUNA CATEGORIA TROVATA</li>
                    @endforelse
                </ul>
            </div>
    </div>
    <div class="row">
        {{$posts->links()}}
    </div>
</div>
</body>
</html>

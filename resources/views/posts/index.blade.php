<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @foreach ($posts as $post)
                <p>
                  {{ $post->title }}<br>
                  {{ $post->content }}<br>
                  Created at {{ $post->created_at}} -- {{ $post->info_waktu}}<br>
                  <!-- atribut info_waktu akan dibuatkan accesor di file Model Post -->
                  <!-- Rumus get+nama_atribut+Attribute maka menjadi getInfoWaktuAttribute -->
                  Updated at {{ $post->updated_at}}
                </p>
                @endforeach
            </div>
            <!-- Untuk menambahkan Pagination pada View -->
            {{$posts->links()}}
        </div>
    </body>
</html>

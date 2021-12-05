<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }
    header {
        background-color: black;
        padding: 30px;
        text-align: center;
        font-size: 35px;
        color: white;
    }
    iframe {
        float: left;
        width: 30%;
        height: 300px; 
        background: #ccc;
        padding: 20px;
        
    }
    section iframe {
        list-style-type: none;
        padding: 0;
    }

    article {
        float: left;
        padding: 50px;
        width: 70%;
        color: white;
        height: 300px;
    }
    section::after {
        content: "";
        display: table;
        clear: both;
    }
    </style>

</head>
<body>
    <header>
        <h2>Mini YouTube</h2>
    </header>
    
    <section>
        @foreach($videos as $video)
        <iframe width="835" height="470" src="https://www.youtube.com/embed/kqtD5dpn9C8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
            <article>    
            <h1>
                <a href="/videos/{{$video->id}}">
                    {{ $video->title }}
                </a>
            </h1>
            <p>{{ $video->name }}</p>
            <p>{{ $video->body }}</p>
            <small>{{ $video->view }}</small>
        </article>

        @endforeach

    </section>
    

</body>
</html>
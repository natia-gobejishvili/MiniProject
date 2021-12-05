<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
        color: white;
    }
    </style>

</head>
<body>
    <div >
    <div style="padding: 20px; margin-top: 50px;">
    <iframe width="1216" height="684" src="https://www.youtube.com/embed/kqtD5dpn9C8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div style="padding: 20px; margin-top: 50px;">
        <h1> {{ $video->title }}</h1>
        <p> {{ $video->meta_description }}</p>
        <p>{{ $video->name }}</p>
        <p> {{ $video->body }}</p>
        <small>{{ $video->view }}</small>
    </div>

    </div>

</body>
</html>
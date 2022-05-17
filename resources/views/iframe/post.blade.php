<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,height=device-height">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>{{ $post->title }}</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <style>
        main {
            display: -webkit-flex;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <main id="canvas"></main>
</body>

<!-- p5js -->
<script src="https://cdn.jsdelivr.net/npm/p5@1.1.9/lib/p5.js"></script>
<script src="{{ $post->file_url }}"></script>

</html>
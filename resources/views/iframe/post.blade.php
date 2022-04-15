<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/iframe.css') }}" rel="stylesheet">

</head>

<body>
    <main id="canvas"></main>
</body>

<!-- p5js -->
<script src="https://cdn.jsdelivr.net/npm/p5@1.1.9/lib/p5.js"></script>
<!-- <script src="{{ $post->file_url }}"></script> -->
<script src="/js/test.js"></script>
<script>
    console.log(document.body.clientWidth);
    console.log(document.body.clientHeight);
</script>

</html>
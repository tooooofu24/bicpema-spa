<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>BICPEMA</title>

    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:title" content="BICPEMA" />
    <meta property="og:description" content="実験実行サイト" />
    <meta property="og:image" content="{{ asset('images/top-page.jpg') }}" />
    <meta property="og:site_name" content="BICPEMA" />
    <meta property="og:locale" content="ja_JP" />

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main-view></main-view>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

</body>

</html>
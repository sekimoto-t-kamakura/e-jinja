<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    {{-- リセットCSS --}}
    <link href="{{ asset('css/reset.css') }}"rel="stylesheet" type="text/css">
    {{-- 共通のCSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- 各ページごとのCSS --}}
    <link rel="stylesheet" href="@yield('stylesheet')">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header">
        <a href="/">
            <img class="header__logo" src="{{ asset('img/logo.svg') }}" alt="いい神社のロゴ">
        </a>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <ul class="footer__lists">
            <li class="footer__list">
                <a class="footer__link" href="{{ route('footer-inquiry') }}">
                    お問い合わせ
                </a>
            </li>
            <li class="footer__list footer__second-list">
                <a class="footer__link" href="{{ route('footer-privacyPolicy') }}">
                    プライバシーポリシー
                </a>
            </li>
            <li class="footer__list">
                <a class="footer__link" href="{{ route('footer-termsOfService') }}">
                    利用規約
                </a>
            </li>
        </ul>
        <img class="footer__logo" src="{{ asset('img/logo.svg') }}" alt="いい神社のロゴ">
    </footer>
    <script>
        @yield('script-body')
    </script>
    <script src="@yield('script')"></script>
</body>

</html>

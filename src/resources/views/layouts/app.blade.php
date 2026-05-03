<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-left">
                <a href="/login" class="header__inner-logo">
                    <img src="{{ asset('images/logo.svg') }}" alt="ロゴ" class="logo-img">
                </a>
            </div>
            <div class="header__inner-right">
                <!-- あとでauthで囲む -->
                <!-- １ 通常ユーザーナビ ロール処理-->

                <!-- ２ 管理者用ナビ ロール処理-->

                <!-- １ ２ 共通   ログアウト -->
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <!-- この後に yeild scripts -->

    <footer>
    </footer>
</body>
</html>
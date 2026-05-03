<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
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
                @auth
                @if (!request()->is('login', 'register', 'admin/login')) 
                    @if (Auth::user()->role === 'admin')
                    <a href="/admin/attendances" class="nav-link">勤怠一覧</a>
                    <a href="/admin/users/" class="nav-link">スタッフ一覧</a>
                    <a href="/admin/requests/" class="nav-link">申請一覧</a>
                    @elseif (Auth::user()->role === 'employee')
                    <a href="/attendance" class="nav-link">勤怠</a>
                    <a href="/attendance/list" class="nav-link">勤怠一覧</a>
                    <a href="/stamp-correction-request/list" class="nav-link">申請</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link logout-btn">ログアウト</button>
                    </form>                
                @endif
                @endauth 
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
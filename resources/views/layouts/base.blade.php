  <!-- 設定 -->
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/shipin.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shipout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/translate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('css/list.css') }}">
        <link rel="stylesheet" href="{{ asset('css/transport.css') }}">
        <link rel="stylesheet" href="{{ asset('css/location.css') }}">
        <link rel="stylesheet" href="{{ asset('css/response/base.css') }}" media="screen and (max-width:480px)">


        
        
        <title>aaa</title>
    </head>
    
    <header>
        <div class="header-name">
            <nav class="login-username">
              <p class="welcome">ようこそ！{{$users->name}}さん</p>
            </nav>
        </div>
        <div class=header-auth>
            <!-- <p>権限:{{$users->workers}}</p> -->
        </div>
        <div class=header-logout>

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>



<!-- サイドメニュー書き込み -->
    <main>  
        <article> 
            <h1 class="side-menu-container">
                <p class="side-menu">Menu</p>
            </h1>
            <form class=sidemenu-container>
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./shipin'" >入庫登録</button>
            </form> 

            <form action="./shipout.blade.php">
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./shipout'">出庫引当</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./transport'">在庫移動</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./list'">指示書出力</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./location'">ロケーション登録</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='/auth/register'">ユーザー登録</button>
            </form> 

        </article>
        @yield('content')
    </main>

    <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
        
    
        
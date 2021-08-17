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
        <title>aaa</title>
    </head>
    
    <header>
        <div class="header-name">
            <p>名前</p>
        </div>
        <div class=header-auth>
            <p>権限〇〇</p>
        </div>
        <div class=header-logout>
            <p>ログアウト</p>
        </div>
    </header>
<!-- サイドメニュー書き込み -->
    <main>  
        <article> 
            <form class=sidemenu-container>
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./shipin'" >入庫登録</button>
            </form> 

            <form action="./shipout.blade.php">
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./shipout'">出庫引当</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./translate'">在庫移動</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./list'">指示書出力</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./location'">ロケーション登録</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container" onclick="location.href='./register'">ユーザー登録</button>
            </form> 

        </article>
        @yield('content')
    </main>
        
    
        
  <!-- 設定 -->
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/shipin.css') }}">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <title>aaa</title>
    </head>
 <!-- ヘッダー書き込み -->
    <header>
        <div class="header-name">
            <p>〇〇さん</p>
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
            <form action="/shipin" class=sidemenu-container>
                <button type="button"　name="入庫登録"　class="menu-container">入庫登録</button>
            </form> 

            <form action="/shipout" >
                <button type="button"　name="入庫登録"　class="menu-container">出庫引当</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container">在庫移動</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container">指示書出力</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container">ロケーション登録</button>
            </form> 

            <form action="" >
                <button type="button"　name="入庫登録"　class="menu-container">ユーザー登録</button>
            </form> 

        </article>
        @yield('content')
    </main>
        
   
        
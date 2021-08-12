<!-- @include("header") -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/shipin') }}">
    <title>@yield('title')</title>
</head>
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

<main>
    @yield('main')
</main>
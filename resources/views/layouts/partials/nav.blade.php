<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/forumApple/public">Форум Apple</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

            @if( ! $currentUser )

                <li>{!! link_to_route('get_login', 'Авторизоваться') !!}</li>           
                <li>{!! link_to_route('get_register', 'Регистрация') !!}</li>

            @else

                <li><a>Добро пожаловать, {{ $currentUser->name }}</a></li>
                <li>{!! link_to_route('get_post', 'Задать вопрос') !!}</li>
                <li>{!! link_to_route('get_logout', 'Выйти') !!}</li>
            @endif

        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
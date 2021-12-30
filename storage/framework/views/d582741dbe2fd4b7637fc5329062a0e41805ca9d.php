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

            <?php if( ! $currentUser ): ?>

                <li><?php echo link_to_route('get_login', 'Авторизоваться'); ?></li>           
                <li><?php echo link_to_route('get_register', 'Регистрация'); ?></li>

            <?php else: ?>

                <li><a>Добро пожаловать, <?php echo e($currentUser->name); ?></a></li>
                <li><?php echo link_to_route('get_post', 'Задать вопрос'); ?></li>
                <li><?php echo link_to_route('get_logout', 'Выйти'); ?></li>
            <?php endif; ?>

        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav><?php /**PATH C:\xampp\htdocs\forumApple\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>
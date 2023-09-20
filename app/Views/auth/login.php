<?=$this->extend('layouts/auth')?>

<?=$this->section('content')?>
    <h1>Login.</h1>

    <?=form_open('auth/login', ['method' => 'post'])?>
    <?=csrf_field()?>

    <?=form_label('Username:', 'username')?>
    <?=validation_show_error('username')?>
    <?=form_input('username', old('username'))?>

    <?=form_label('Password:', 'password')?>
    <?=validation_show_error('password')?>
    <?=form_input('password')?>

    <hr/>

    <?=form_submit('login_submit', 'Login');?>

    <?=form_close()?>
<?=$this->endSection()?>
<?=$this->extend('layouts/auth')?>

<?=$this->section('content')?>
    <h1>Register.</h1>

    <?=form_open('auth/register', ['method' => 'post'])?>
    <?=csrf_field()?>

    <?=form_label('Username:', 'username')?>
    <?=validation_show_error('username')?>
    <?=form_input('username', is_null(old('username')) ? "" : old('username'))?>


    <?=form_label('Password:', 'password')?>
    <?=validation_show_error('password')?>
    <?=form_password('password')?>


    <?=form_label('Confirm Password:', 'password_confirm')?>
    <?=validation_show_error('password_confirm')?>
    <?=form_password('password_confirm')?>

    <hr/>

    <?=form_submit('register_submit', 'Register');?>

    <?=form_close()?>

<?=$this->endSection()?>
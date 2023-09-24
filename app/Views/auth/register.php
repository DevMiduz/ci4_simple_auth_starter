<?=$this->extend('layouts/auth')?>

<?=$this->section('content')?>
    <?=form_open('auth/register', ['method' => 'post'])?>

    <?=form_label('Username:', 'username')?>
    <?=form_input('username', is_null(old('username')) ? "" : old('username'))?>
    <?=validation_show_error('username')?>

    <?=form_label('Password:', 'password')?>
    <?=form_password('password')?>
    <?=validation_show_error('password')?>

    <?=form_label('Confirm Password:', 'password_confirm')?>
    <?=form_password('password_confirm')?>
    <?=validation_show_error('password_confirm')?>

    <?=form_submit('register_submit', 'Register');?>

    <?=form_close()?>

<?=$this->endSection()?>

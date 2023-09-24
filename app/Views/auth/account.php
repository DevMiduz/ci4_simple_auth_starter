<?=$this->extend('layouts/auth')?>

<?=$this->section('content')?>

    <h4>Update your account:</h4>

    <?=form_open('auth/account', ['method' => 'post'])?>

    <?=form_label('Username:', 'username')?>
    <?=form_input('username', is_null(old('username')) ? "" : old('username'))?>
    <?=validation_show_error('username')?>

    <?=form_label('Old Password:', 'old_password')?>
    <?=form_password('old_password')?>
    <?=validation_show_error('old_password')?>

    <?=form_label('New Password:', 'new_password')?>
    <?=form_password('new_password')?>
    <?=validation_show_error('new_password')?>

    <?=form_label('Confirm Password:', 'password_confirm')?>
    <?=form_password('password_confirm')?>
    <?=validation_show_error('password_confirm')?>

    </br>
    <?=form_submit('update_submit', 'Save');?>

    <?=form_close()?>

    </br>

    <h4>Logout from your account:</h4>
    <?=form_open('auth/account/logout', ['method' => 'post'])?>
        <?=form_submit('logout_submit', 'Logout');?>
    <?=form_close()?>

    </br>

    <h4>Delete your account:</h4>
    <?=form_open('auth/account/delete', ['method' => 'post'])?>
        <?=form_submit('delete_submit', 'Delete');?>
    <?=form_close()?>
<?=$this->endSection()?>
<h1>Login
</h1>
<?= form_open('admin/index');?>

<p><?= form_label('Email Address:','email_address')?>
<?= form_input('email_address',set_value('email_address'),'id="email_address"')?></p>

<p><?= form_label('Password:','password')?>
<?=form_password('password','','id="password"')?></p>

<p> <?= form_submit('Submit','Login'); ?></p>
<div class="errors"> <?= validation_errors()?></div>
<?= form_close();?>

<div class='d-flex flex-column align-items-center'>
    <h2>Авторизация</h2>
    <h3><?= $message ?? ''; ?></h3>

    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()): ?>
    <form method='post'>
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div class="mb-3">
            <label for="exampleInputLogin1" class="form-label">Логин</label>
            <input type="text" class="form-control" id="exampleInputLogin1" name='login'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
<?php endif;
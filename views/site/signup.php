<div class='d-flex flex-column align-items-center'>
    <h2>Регистрация нового пользователя</h2>
    <h3><?= $message ?? ''; ?></h3>
    <form method='post'>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Имя</label>
            <input type="text" class="form-control" id="exampleInputName1" name='name'>
        </div>
        <div class="mb-3">
            <label for="exampleInputLogin1" class="form-label">Логин</label>
            <input type="text" class="form-control" id="exampleInputLogin1" name='login'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
        </div>
        <div class="mb-3">
            <select class="form-select" name="role_id">
                <option selected>Роль</option>
                <option value="1">Админ</option>
                <option value="2">Оператор</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
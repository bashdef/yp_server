<div class="d-flex justify-content-center align-items-center flex-column">
  <h2>Список абонентов</h2>
  <table class="table table-hover w-50 table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Имя</th>
        <th scope="col">Отчество</th>
        <th scope="col">Дата рождения</th>
        <th scope="col">Телефон</th>
        <th scope="col">Подразделение</th>
        <th scope="col">Помещение</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($subscribers as $subscribe) {
          echo '<tr>';
          echo '<th scope="row">' . $subscribe->id . '</th>';
          echo '<td>' . $subscribe->фамилия . '</td>';
          echo '<td>' . $subscribe->имя . '</td>';
          echo '<td>' . $subscribe->отчество . '</td>';
          echo '<td>' . $subscribe->birthdate . '</td>';
          echo '<td>' . $subscribe->telephone->номер . '</td>';
          echo '<td>' . $subscribe->subunit->name . '</td>';
          echo '<td>' . $subscribe->room->name_number . '</td>';
          echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <form action="" method='post'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_subunit"/>
    <select name="subunit_id" class="form-select mb-3" style="width: 320px;">
      <?php 
      foreach($subunits as $subunit){
        echo '<option value="' . $subunit->subunit_id . '">' . $subunit->name . '</option>';
      }
      ?>
    </select>
    <button class="btn btn-primary" style='margin-right: 640px; margin-bottom: 20px;' type='submit'>Отфильтровать по подразделениям</button>
  </form>
  <form action="" method='post'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_room"/>
    <select name="room_id" class="form-select mb-3" style="width: 320px;">
      <?php 
      foreach($rooms as $room){
        echo '<option value="' . $room->room_id . '">' . $room->name_number . '</option>';
      }
      ?>
    </select>
    <button class="btn btn-primary" style='margin-right: 640px; width: 320px; margin-bottom: 20px;' type='submit'>Отфильтровать по помещениям</button>
  </form>
  <form action="" method='post'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="searchbar"/>
    <input name="search" type="text" class="form-control mb-3" placeholder="Введите имя абонента" style="width: 320px;"> 
    <button class="btn btn-primary" style='margin-right: 640px; width: 320px; margin-bottom: 20px;' type='submit'>Поиск абонента по имени</button>
  </form>
  <form action="" method='post'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="count_subunit"/>
    <select name="subunit_id" class="form-select mb-3" style="width: 320px;">
      <?php 
      foreach($subunits as $subunit){
        echo '<option value="' . $subunit->subunit_id . '">' . $subunit->name . '</option>';
      }
      ?>
    </select>
    <button class="btn btn-primary" style='margin-right: 640px; margin-bottom: 20px; width: 320px' type='submit'>Подсчитать абонентов по подразделениям</button><br>
    <span>Кол-во абонентов в этом подразделении - <?php echo $sum; ?></span>
  </form>
  <form action="" method='post'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="count_room"/>
    <select name="room_id" class="form-select mb-3" style="width: 320px;">
      <?php 
      foreach($rooms as $room){
        echo '<option value="' . $room->room_id . '">' . $room->name_number . '</option>';
      }
      ?>
    </select>
    <button class="btn btn-primary" style='margin-right: 640px; width: 320px; margin-bottom: 20px;' type='submit'>Подсчитать абонентов по помещениям</button><br>
    <span>Кол-во абонентов в этом помещении - <?php echo $summ; ?></span>
</div>
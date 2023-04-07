<div class="d-flex justify-content-center align-items-center flex-column">
  <h2>Список помещений</h2>
  <table class="table table-hover w-50 table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Название или номер помещения</th>
        <th scope="col">Вид помещения</th>
        <th scope="col">Подразделение</th>
        <th scope="col">Телефон</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($rooms as $room) {
          echo '<tr>';
          echo '<th scope="row">' . $room->room_id . '</th>';
          echo '<td>' . $room->name_number . '</td>';
          echo '<td>' . $room->room_type->название . '</td>';
          echo '<td>' . $room->subunit->name . '</td>';
          echo '<td>' . $room->telephone->номер . '</td>';
          echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>

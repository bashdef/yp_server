<h1>Список помещений</h1>
<table class="table">
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
        echo '<th scope="row">' . $room->id . '</th>';
        echo '<td>' . $room->name_number . '</td>';
        echo '<td>' . $room->room_type->название . '</td>';
        echo '<td>' . $room->subunit->name . '</td>';
        echo '<td>' . $room->telephone->номер . '</td>';
        echo '</tr>';
    }
    ?>
  </tbody>
</table>
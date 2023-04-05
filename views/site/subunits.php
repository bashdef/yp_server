<h1>Список подразделений</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Вид подразделения</th>
      <th scope="col">Название</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($subunits as $subunit) {
        echo '<tr>';
        echo '<th scope="row">' . $subunit->id . '</th>';
        echo '<td>' . $subunit->subunit_type->name . '</td>';
        echo '<td>' . $subunit->name . '</td>';
        echo '</tr>';
    }
    ?>
  </tbody>
</table>
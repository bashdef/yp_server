<div class="d-flex justify-content-center align-items-center flex-column">
  <h2>Список подразделений</h2>
  <table class="table table-hover w-50 table-bordered">
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
          echo '<th scope="row">' . $subunit->subunit_id . '</th>';
          echo '<td>' . $subunit->subunit_type->name . '</td>';
          echo '<td>' . $subunit->name . '</td>';
          echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <button class="btn btn-primary" style='margin-right: 725px;'>Добавить подразделение</button>
</div>

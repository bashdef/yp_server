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
          echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <button class="btn btn-primary" style='margin-right: 775px;'>Добавить абонента</button>
</div>

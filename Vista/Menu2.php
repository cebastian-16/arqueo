<a>
  <?php
  if ($_SESSION['sedeStock'] == "Servired") {
    echo "<img style='height: 68px; width: 200px;' src='http://localhost/Arqueos/Vista/img/servired.png'>";
  } else {
    echo "<img style='height: 68px; width: 200px;' src='http://localhost/Arqueos/Vista/img/multired.png'>";
  }
  ?>

</a>
<div>
  <?php
  echo $_SESSION['nombresLogin'];
  echo ": ";
  echo $_SESSION['userLogin'];
  ?>
</div>
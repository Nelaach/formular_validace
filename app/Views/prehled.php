<?php $db = \Config\Database::connect(); 

?>

<?php
$query   = $db->query('SELECT validace_formulare.id, prezdivka, oblibene_cislo, text, email, datum, vek, barva.nazev as barva from validace_formulare left join barva on validace_formulare.barva=barva.id');
$results = $query->getResultArray();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div><br>&nbsp</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Přezdívka</th>
      <th scope="col">Oblíbené číslo</th>
      <th scope="col">Text</th>
      <th scope="col">Email</th>

      <th scope="col">Datum</th>
      <th scope="col">Věk</th>
      <th scope="col">Barva</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($results as $row) { ?>
  <?php $ids = $row['id']; ?>
<tr>
<td><?php echo $row['prezdivka']; ?></td>
<td><?php echo $row['oblibene_cislo']; ?></td>
<td><?php echo $row['text']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['datum']; ?></td>
<td><?php echo $row['vek']; ?></td>
<td><?php echo $row['barva']; ?></td>
</tr>
<?php  } ?>
</tbody>
</table>
</div>
<div>&nbsp&nbsp </div>
<div>&nbsp&nbsp </div>
<div>&nbsp&nbsp </div>

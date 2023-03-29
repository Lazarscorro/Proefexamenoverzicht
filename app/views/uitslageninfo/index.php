<?echo $data["title"];?>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>

<table>
  <thead>
    <th>Voornaam</th>
    <th>Tussenvoegsel</th>
    <th>Achternaam</th>
    <th>Aantalpunten</th>
    <th>Datum</th>
  </thead>
  <tbody>
    <?=$data['uitslaginfo']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>


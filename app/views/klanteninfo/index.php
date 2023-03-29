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
    <th>Mobiel</th>
    <th>Email</th>
    <th>Volwassen</th>
  </thead>
  <tbody>
    <?=$data['klantinfo']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>


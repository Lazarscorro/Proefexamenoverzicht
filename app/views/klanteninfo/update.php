<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/klanteninfo/update" method="post">
  <table>
    <tbody>
      <tr>
        <td>
          <input type="text" name="naam" id="voornaam" value="<?= $data["row"]->Voornaam; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="tussenvoegsel" id="tussenvoegsel" value="<?= $data["row"]->Tussenvoegsel; ?>">
        </td>
      </tr>
      <tr>
        <td>
         <input type="text" name="achternaam" id="achternaam" value="<?= $data["row"]->Achternaam; ?>">
        </td>
      </tr>
      <tr>
        <td>
         <input type="number" name="mobiel" id="mobiel" value="<?= $data["row"]->Mobiel; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="email" id="email" value="<?= $data["row"]->Email; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="checkbox" name="volwassenen" id="volwassenen" value="<?= $data["row"]->IsVolwassen; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="id" value="<?= $data["row"]->id; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Verzenden">
        </td>
      </tr>
    </tbody>
  </table>

</form>

<a href="<?= URLROOT;?>/homepages/index">home</a>
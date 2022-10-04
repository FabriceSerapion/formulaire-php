<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les formulaires en PHP</title>
</head>

<body>
  <form action='thanks.php' method='post'>
    <div>
      <label for='firstname'>Prénom :</label>
      <input type='text' id='firstname' name='firstname'>
    </div>
    <div>
      <label for='lastname'>Nom :</label>
      <input type='text' id='lastname' name='lastname'>
    </div>
    <div>
      <label for='courriel'>Courriel :</label>
      <input type='email' id='courriel' name='user_email'>
    </div>
    <div>
      <label for='phone'>N° de téléphone</label>
      <input type='tel' id='phone' name='phone' pattern='[0-9]{10}'>
    </div>
    <div>
      <label for='subject'>Sujet du message : </label>
      <select id='subject' name='subject_message'>
        <option value=''>...</option>
        <option value='wild code school'>Wild code school</option>
        <option value='le sens de la vie'>Retards/Absences</option>
        <option value='indiana jones'>Checkpoints</option>
        <option value='php'>Quêtes</option>
      </select>
    </div>
    <div>
      <label for='message'>Message :</label>
      <textarea id='message' name='user_message'></textarea>
    </div>
    <div class='button'>
      <button type='submit'>Envoyer votre message</button>
    </div>
  </form>
</body>

</html>
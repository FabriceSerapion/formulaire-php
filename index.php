<?php session_start() ?>

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
      <?php if (isset($_GET["firstname"])) : ?>
        <p>Veuillez fournir votre prénom</p>
      <?php endif; ?>
      <input type='text' id='firstname' name='firstname' value='<?= $_SESSION["firstname"] ?? '' ?>'>
    </div>
    <div>
      <label for='lastname'>Nom :</label>
      <?php if (isset($_GET["lastname"])) : ?>
        <p>Veuillez fournir votre nom</p>
      <?php endif; ?>
      <input type='text' id='lastname' name='lastname' value='<?= $_SESSION["lastname"] ?? '' ?>'>
    </div>
    <div>
      <label for='courriel'>Courriel :</label>
      <?php if (isset($_GET["email"])) : ?>
        <p>Veuillez fournir votre email</p>
      <?php endif; ?>
      <input type='email' id='email' name='email' value='<?= $_SESSION["email"] ?? '' ?>'>
    </div>
    <div>
      <label for='phone'>N° de téléphone</label>
      <?php if (isset($_GET["phone"])) : ?>
        <p>Veuillez fournir votre N° de téléphone</p>
      <?php endif; ?>
      <input type='tel' id='phone' name='phone' pattern='[0-9]{10}' value='<?= $_SESSION["phone"] ?? '' ?>'>
    </div>
    <div>
      <label for='subject'>Sujet du message : </label>
      <?php if (isset($_GET["subject"])) : ?>
        <p>Veuillez fournir un sujet à votre message</p>
      <?php endif; ?>
      <select id='subject' name='subject'>
        <option>...</option>
        <option value='wild code school' <?php if (isset($_SESSION["subject"]) && $_SESSION["subject"] == "wild code school") : ?> selected <?php endif; ?>>Wild code school</option>
        <option value='Retards/Absences' <?php if (isset($_SESSION["subject"]) && $_SESSION["subject"] == "Retards/Absences") : ?> selected <?php endif; ?>>Retards/Absences</option>
        <option value='Checkpoints' <?php if (isset($_SESSION["subject"]) && $_SESSION["subject"] == "Checkpoints") : ?> selected <?php endif; ?>>Checkpoints</option>
        <option value='Quêtes' <?php if (isset($_SESSION["subject"]) && $_SESSION["subject"] == "Quêtes") : ?> selected <?php endif; ?>>Quêtes</option>
      </select>
    </div>
    <div>
      <label for='message'>Message :</label>
      <?php if (isset($_GET["message"])) : ?>
        <p>Veuillez expliciter votre demande</p>
      <?php endif; ?>
      <textarea id='message' name='message'></textarea>
    </div>
    <div class='button'>
      <button type='submit'>Envoyer votre message</button>
    </div>
  </form>
</body>

</html>
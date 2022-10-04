<?php
echo "Merci $_POST[firstname] $_POST[lastname] de nous avoir contacté à propos de “$_POST[subject_message]”.<br><br>
Un de nos conseiller vous contactera soit à l’adresse $_POST[user_email] ou par téléphone au $_POST[phone] dans les plus brefs délais pour traiter votre demande :<br><br>
$_POST[user_message]" . PHP_EOL;

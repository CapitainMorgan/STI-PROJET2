<?php
/**
 * 
 * Created by PhpStorm.
 * User: Maude Issolah, Matthieu Godi
 * Date: 13.10.2021
 */
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form action="validation.php" method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Nom utilisateur" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe" required>
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

  </div>
</div>

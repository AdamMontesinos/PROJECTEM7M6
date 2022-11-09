<?php
require "functions.php";

get_head();

?>
<div class="registerContainer">
  <img src="imgs/cromopolislogin.jpg" />

  <div class="registerForm">
    <h1>CROMÓPOLIS</h1>
    <h2>Bienvenido</h2>
    <form action="e1.php" method="post">
      <div class="campo">
        <p>Nombre</p>
        <input required type="text" id="registerName" name="user" placeholder="Introduce el usuario"/>
      </div>
      <div class="campo">
        <p>Email</p>
        <input required type="text" id="registerMail" name="email" placeholder="Introduce el email"/>
      </div>
      <div class="campo">
        <p>Contraseña</p>
        <input required type="text" name="pwd" placeholder="Introduce la contraseña"/>
      </div>

      <div class="campo">
        <p>Contraseña</p>
        <input required type="text" name="pwd" placeholder="Introduce la contraseña"/>
      </div>
    </form>
      <button class="buttonblack">Iniciar Sesión</button>
      <p class="create">No tienes cuenta? CREA UNA AHORA</p>
  </div>
</div>

<script src="js/script.js"></script>

<?php get_footer(); ?>
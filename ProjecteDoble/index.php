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
        <input class="input" required type="text" name="user" placeholder="Introduce el usuario"/>
      </div>
      <div class="campo">
        <p>Email</p>
        <input class="input" required type="text" name="email" placeholder="Introduce el email"/>
      </div>
      <div class="campo">
        <p>Contraseña</p>
        <input class="input" required type="text" name="pwd" placeholder="Introduce la contraseña"/>
      </div>
    </form>
      <button class="buttonblack">Iniciar Sesión</button>
      <p class="create">No tienes cuenta? CREA UNA AHORA</p>
  </div>
</div>

<?php get_footer(); ?>
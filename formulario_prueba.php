<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="esti_formu.css">
    <script src="js/jquery/dist/jquery.js" charset="utf-8"></script>
    <title>formulario de prueba</title>
  </head>
  <body>
    <form id="formulario" action="index.html" method="post">
      <ul id="progress">
        <li class="activo">configuracion</li>
        <li>prefil personal</li>
        <li>detalle</li>
      </ul>
      <fieldset>
        <h2>configuracions</h2>
        <h3>algunas configuraciones</h3>
        <input type="text" name="email" value="" placeholder="email">
        <input type="password" name="pass" value="" placeholder="pass">
        <input type="password" name="cpass" value="" placeholder="cpass">
        <input id="pase1" type="submit" name="next" value="Proximo" class="next acao">
      </fieldset>

      <fieldset>
        <h2>perfil personal</h2>
        <h3>redes sociales</h3>
        <input type="text" name="facebook" value="" placeholder="facebook">
        <input type="text" name="twitter" value="" placeholder="twitter">
        <input type="text" name="google" value="" placeholder="google">
        <input id="pase2" type="submit" name="prev" value="anterior" class="prev acao">
        <input id="pase3" type="submit" name="next" value="Proximo" class="next acao">
      </fieldset>
      <fieldset>
        <h2>detalles personales</h2>
        <h3>inormacion personal</h3>
        <input type="text" name="primero" value="" placeholder="primero">
        <input type="text" name="segundo" value="" placeholder="segundo">
        <input type="text" name="telefono" value="" placeholder="telefono">
        <input id="pase4" type="submit" name="prev" value="anterior" class="prev acao">
        <input id="enviar" type="submit" name="enviar" value="Enviar" class="acao">
      </fieldset>

    </form>
    <script src="funcions.js" charset="utf-8"></script>
  </body>
</html>

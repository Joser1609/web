<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Unisalle</title>

  <!-- Iconos y estilos -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <link rel="shortcut icon" href="img/desktop.png" type="image/png" />
  <link rel="stylesheet" href="style.css" />

  <style>
    #fields2-1 {
      display: none;
    }
  </style>
</head>

<body>
  <header>
  </header>

  <div class="sidebar">
    <h1 class="menu-title">Menú</h1>
    <ul class="menu">
      <li class="dropdown">
        <a href="#" onclick="ocultarFormularios(); return false;">
          <span class="material-symbols-outlined">storage</span>REGISTROS
        </a>
        <ul class="dropdown-content">
          <li>
            <a href="#" onclick="mostrarFormulario('fields2-1'); return false;">
              <span class="material-symbols-outlined">school</span>Personal Capacitado
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- Formulario -->
  <div id="fields2-1">
    <h2>Formulario - Personal Capacitado</h2>
    <form action="guardar_estudiante.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required />

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required />

      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" required />

      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required />

      <label for="semestre">Semestre:</label>
      <input type="text" id="semestre" name="semestre" required />

      <button type="submit">Guardar</button>
    </form>
  </div>

  <!-- Scripts -->
  <script>
    function ocultarFormularios() {
      const formularios = document.querySelectorAll('[id^="fields"]');
      formularios.forEach(f => f.style.display = 'none');
    }

    function mostrarFormulario(id) {
      ocultarFormularios();
      const form = document.getElementById(id);
      if (form) {
        form.style.display = 'block';
      }
    }
  </script>
</body>
</html>
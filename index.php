<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex justify-content-center flex-column align-items-center">
<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    <header class="col-12 col-sm-6">
        <h1 class="font-bold">Crear una cuenta</h1>
        <h2 class="font-bold">Tus datos personales</h2>
    </header>
      <form class="font-light col-12 col-sm-6 " action="login.php" method="post">
        <div class="form-row">
          <div class="form-group col-12 d-flex justify-content-between">
            <input type="text" pattern="/^\d*$/" minlength="8" maxlength="8" placeholder="DNI" class="form-control col-12 col-sm-6 mr-4" id="dni" name="dni" required>

            <select class="custom-select " id="genero" name="genero" required>
            <option selected>Género</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otros">Otros</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-12">
            <input type="email" placeholder="E-Mail" class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-12">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label col-12" for="customSwitch1">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </label>
          </div>
        </div></div>
      </form>
</div>


<footer>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="services.js" charset="utf-8"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Alumnos Registrados</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(#2980B9, #76D7C4);
    }

    h2 {
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      box-shadow: 0px 0px 10px #ccc;
      border-radius: 20px !important;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e2e2e2;
    }
  </style>
</head>
<body>
  <h2>Alumnos Registrados</h2>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>DNI</th>
        <th>Teléfono</th>
        <th>Correo electronico</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $alumnos = array(
        array("nombre"=>"Juan", "apellido"=>"Pérez", "edad"=>25, "dni"=> 39402316, "telefono" => 1144321875, "correo" => "juan@perez.com"),
        array("nombre"=>"María", "apellido"=>"García", "edad"=>30, "dni"=> 30459212, "telefono" => 1199300246, "correo" => "maria@garcia.com"),
        array("nombre"=>"Pedro", "apellido"=>"Sánchez", "edad"=>22, "dni"=> 42600579, "telefono" => 1144321876, "correo" => "pedro@sanchez.com")
      );

      // Agregar el nuevo alumno al arreglo
      $alumnos[] = array("nombre"=>$_POST['nombre'], "apellido"=>$_POST['apellido'], "edad"=>$_POST['edad'], "dni"=> $_POST['dni'], "telefono"=>$_POST['telefono'], "correo" =>$_POST['correo']);

      // Mostrar los alumnos en la tabla
      foreach($alumnos as $alumno){
        echo "<tr>";
        echo "<td>".$alumno['nombre']."</td>";
        echo "<td>".$alumno['apellido']."</td>";
        echo "<td>".$alumno['edad']."</td>";
        echo "<td>".$alumno['dni']."</td>";
        echo "<td>".$alumno['telefono']."</td>";
        echo "<td>".$alumno['correo']."</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>

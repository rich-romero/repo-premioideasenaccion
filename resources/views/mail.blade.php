<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nueva registración </title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo registro {{ $persona->created_at }}.</p>
    <p>Estos son los datos del usuario:</p>
    <ul>
        <li>Nombre: {{ $persona->nombre }}</li>
        <li>Apellido: {{ $persona->apellido }}</li>
        <li>Teléfono: {{ $persona->telefono }}</li>
        <li>Email: {{ $persona->email }}</li>
        <li>DNI: {{ $persona->dni }}</li>
        <li>Fecha de nacimiento: {{ $persona->fechanac }}</li>
        <li>Dirección: {{ $persona->nombre }}</li>
        <li>Ciudad: {{ $persona->nombre }}</li>
        <li>Provincia: {{ $persona->nombre }}</li>
    </ul>
</body>
</html>
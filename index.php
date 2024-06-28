<?php require_once"db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso php 2023 - Joystick</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h3>Registro de equipo</h3>
    <form action="process.php" method="POST">
        <label for="id">ID de usuario (invisible)</label>
        <input type="id" name="id" id="id"><br>

        <label for="gamertag">Gametarg:</label>
        <input type="text" name="gamertag" id="gamertag">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="file">Anexar archivo:</label>
        <input type="file" name="file" id="file">

        <label for="juego">Selecciona un juego:</label>
        <select name="juego" id="juego">
            <option value="valorant">FIFA</option>
            <option value="LoL">League of Legends</option>
            <option value="WZ2">Warzone 2</option>
            <option value="Overwatch 2">Overwatch 2</option>
        </select>

        <label for="miembros">Numero de miembros:</label>
        <input type="range" name="miembros" id="miembros" min="1" max="6" value="1">

        <label for="social">Red Social:</label>
        <input type="url" name="social" id="social">

        <label for="color">Color de Equipo:</label>
        <input type="color" name="color" id="color">

        <input type="submit" name="submit" value="registrarse">
        <input type="reset" name="reset" value="reiniciar">
    </form>
</body>
</html>
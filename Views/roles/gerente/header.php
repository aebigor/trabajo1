<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71bc9b1c9c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/registroG3/assets/css/gerente.css">
</head>
<body>

<h2>Formulario de Horarios</h2>

<div class="container">
        <div class="form-container">
        <form action="registroG.php" method="post">
    <label for="usuario_id">ID del Usuario (Agente):</label>
    <input type="text" name="usuario" required>
    
    <label for="dia_semana">Día de la Semana:</label>
    <select name="dia_semana" required>
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miércoles">Miércoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
        <option value="Sábado">Sábado</option>
        <option value="Domingo">Domingo</option>
        <option value="Festivos">Festivos</option>
    </select>

    <label for="hora_inicio">Hora de Inicio:</label>
    <input type="time" name="hora_inicio" required>
    
    <label for="hora_fin">Hora de Fin:</label>
    <input type="time" name="hora_fin" required>

    <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Submit</button>
</form>
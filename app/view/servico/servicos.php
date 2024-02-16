<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <ul>
    <?php foreach ($query as $usuario): ?>
        <li><?php echo $usuario['nomeCliente']; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>

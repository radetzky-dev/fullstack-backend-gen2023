<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company Crud</title>
    @vite('resources/js/app.js')

</head>
<body>
    <h2>Benvenuto nell'app Company</h2>
    <a href="<?php echo url('/companies/'); ?>">Vedi la lista</a><br>
    <a href="<?php echo url('/companies/create'); ?>">Inserisci una company</a><br>
    
</body>
</html>

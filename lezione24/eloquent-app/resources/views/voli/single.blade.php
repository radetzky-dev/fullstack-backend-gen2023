<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flight</title>
</head>

<body>
    <h3>Dettagli volo</h3>
    Nome del volo {{ $flight->name }}<br>
    Airline {{ $flight->airline }}<br>
    Da: {{ $flight->departfrom }}<br>
    Destinazione {{ $flight->destination }}<br>
</body>

</html>

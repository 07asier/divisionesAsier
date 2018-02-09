<html>
<head>
    <title>Divisor</title>
</head>
<body>
<form action="dividir" method="post">
    {{csrf_field()}}
    <p>Dividendo</p>
    <input name="dividendo" type="text">
    <p>Divisor</p>
    <input name="divisor" type="text">
    <button type="submit">Ejecutar</button>
</form>

</body>
</html>
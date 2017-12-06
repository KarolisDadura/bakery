<!DOCTYPE html>
<html>
<head>
    <title>Naujas Produktas</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="text-align: center;">

<form method="POST" action="create.php">

    <div>Pavadinimas:</div>
    <input type="text" name="name"> <br>

    <div>EAN:</div>
    <input type="number" name="ean"> <br>

    <div>Mato vienetas</div>
    <select>
        <option value="KG">KG</option>
        <option value="PCS">VNT</option>
    </select> <br>

    <div> Svoris:</div>
    <input type="number" step="0.001" name="Weight"> <br>

    <div> Savikaina:</div>
    <input type="number" step="0.001" name="primary_price"> <br>

    <div> Pardavimo kaina:</div>
    <input type="number" step="0.001" name="sales_price"> <br>

    <input type="submit" value="Išsaugoti duomenis"> <br>


</form>
<br>

<a href="index.php">grįžti į pradžią</a> <br>

</body>
</html>
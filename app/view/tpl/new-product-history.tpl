<!DOCTYPE html>
<html>
<head>
    <title>Nauji duomenys</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body style="text-align: center;">

<form method="POST" action="?view=product-history&action=create">
    <div> Data :<div/>
        <input type="date" name="date"> <br>

        <div>Prekė:</div>
        <select name="product_id">
          [@productOptions]
        </select>

        <div> vakarykštis likutis: <div/>
            <input type="number" name="initial"> <br>
            <div> pagaminta:<div/>
                <input type="number" name="produced"> <br>
                <div> parduota:<div/>
                    <input type="number" name="sold"> <br>
                    <div> sugadinta:<div/>
                        <input type="number" name="damaged"> <br>
                        <div> galutinis likutis:<div/>
                            <input type="number" name="closed"> <br><br>

                            <input type="submit" value="Išsaugoti duomenis">

</form> <br>

</body>
</html>
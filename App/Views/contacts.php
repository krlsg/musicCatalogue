<?php
include_once 'header.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Contacts</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
        <h1 align="center">Contacts<H1>

        <div>
        <table width = 30% height = 30% align ="left" border="1" bordercolor="#4CAF50">
        <tr>
            <td><p style="bold"> Contact info:</p>
                <ul>
                    <li>Streent name 2, Riga</li>
                    <li>LV 1233</li>
                    <li>Tel: +573 832 192 133</li>
                    <li>Email: e@mail.com</li>
                </ul>
            </td>
        </tr>
        </div>

        <div>
            <table width = 30% align ="right" border="1" bordercolor="#4CAF50">
                <td>
                    <ul>
                        <p>name<input type="text" name="name"></p>
                        <p>surname<input type="text" name="surname"></p>
                        <p>phone number<input type="text" name="number"></p>
                        <p>country<input type="text" name="country"></p>
                        <textarea rows="4" cols="50"></textarea>
                        <input type="submit" value="Submit">
                    </ul>
                </td>
        </div>
    </body>
</html>

<?
include_once 'header.php';
?>
        <center>
            <h1>Search a track</h1>

                <div>
                    <form action="/action_page.php">
                        <input type="text" name="song" class="td2">
                        <input type="submit" value="Search">
                    </form>
                </div>
        </center>

    <div>
        <table width = 30% align ="left" border="1" bordercolor="#4CAF50">
            <tr>
                <td class="td"><p>Rap</p>
                    <ol>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                        <li></li>
                        <li></li>
                    </ol>
                </td>
            </tr>

            <tr>
                <td class="td"><p>Rock</p>
                <ol>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                    <li></li>
                    <li></li>
                </ol>
                </td>
            </tr>

        </table>
        </div>

        <div>
            <table width = 30% align ="right" border="1" bordercolor="#4CAF50">
                <tr>
                    <td class="td"><p>Classics</p>
                        <ol>
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Milk</li>
                            <li></li>
                            <li></li>
                        </ol>
                    </td>
                </tr>

                <tr>
                    <td class="td"><p>Blues</p>
                    <ol>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                        <li></li>
                        <li></li>
                    </ol>
                    </td>
                </tr>
            </table>
        </div>

<?
include_once 'footer.php';
?>
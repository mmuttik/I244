    <?php include ("header.php"); ?>
    <?php include ("menyy.php"); ?>

    <form method="post" action="vorm.php">

        <input type="hidden" name="aeg" value="2016-02-09">

        <table class="tabel">
            <caption>Registreerimise vorm</caption>

            <tr>
                <th>
                    Soovitud kasutajanimi:
                </th>
                <td>
                    <input type="text" name="username" placeholder="Kasutajanimi">
                </td>
            </tr>

            <tr>
                <th>
                    Parool:
                </th>
                <td>
                    <input type="password" name="password" placeholder="Parool">
                </td>
            </tr>

            <tr>
                <th>
                    Korda parooli:
                </th>
                <td>
                    <input type="password" name="password2" placeholder="Parool">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit">Registreeri</button>
                </td>
            </tr>

        </table>

    </form>

    <?php include ("footer.php"); ?>

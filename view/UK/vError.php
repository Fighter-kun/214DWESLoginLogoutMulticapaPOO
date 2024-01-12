<!--
        Descripción: 214DWESLoginLogoutMulticapaPOO -- vError.php (Inglés)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 12/01/2024
-->
<div class="container mt-3">
    <div class="row mb-5">
        <div class="col text-center">
            <table>
                <thead>
                    <tr>
                        <th class="rounded-top" colspan="2"><legend>ERROR</legend></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Code:</td>
                        <td><?php echo $sCodError ?></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><?php echo $sDescError ?></td>
                    </tr>
                    <tr>
                        <td>File:</td>
                        <td><?php echo $sArchivoError ?></td>
                    </tr>
                    <tr>
                        <td>Line:</td>
                        <td><?php echo $iLineaError ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form method="post" action="indexLoginLogoutMulticapaPOO.php">
                <button class="btn btn-secondary" type="submit" name="salirDelError">Exit</button>
            </form>
        </div>
    </div>
</div>
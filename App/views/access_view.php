<div class="contTable">
    <table>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            
        </tr>
        <?php

        foreach ($matrizprod as $registro) {
            echo "<tr><td>" . $registro["id"] . "</td><td>" . $registro["producto"] . "</td><td>" . $registro["precio"] . "</td></tr>";

        }
        ?>

    </table>
</div>
<html>

<body>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>

</body>

</html>


<?php
/*
HTML 
table larghezza 270px  
(8x8 columns x 60px) 
bianco e nero
bgcolor=#FFFFFF
bgcolor=#000000

<td height=30px width=30px bgcolor=#000000></td>

Modulo %
*/
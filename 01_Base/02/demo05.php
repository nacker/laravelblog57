<table border="0" width="800">
    <?php
    for($i=1;$i<10;$i++){
        ?>
        <tr>
            <?php
            for($j=1;$j<=$i;$j++){
                ?>
                <td>
                    <?php
                    echo $j.'*'.$i.'='.($i*$j);
                    ?>
                </td>
                <?php
            }
            ?>
        </tr>
        <?
    }
    ?>
</table>

<?php

echo __FILE__;
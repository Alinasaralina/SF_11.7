<?php
echo "<link rel='stylesheet' href='style.css'>";
$a = 0;
$b = 1;
$rezult1 = $a < $b;
$rezult2 = $a > $b;
$rezult3 = $a != $b;
$rezult4 = $a || $b;
$result5 = $a && $b;
$result6 = $a xor $b;

echo "</head>
   <body>
    <table>
        <thead>
            <tr>
            <th><strong>A</strong></th>
            <th><strong>B</strong></th>
            <th><strong>!A</strong></th>
            <th><strong>A || B</strong></th>
            <th><strong>A &amp;&amp; B</strong></th>
            <th><strong>A xor B</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>".$rezult1."</td>
            <td>".$rezult2."</td>
            <td>".$rezult3."</td>
            <td>".$rezult4."</td>
            <td>".$result5."</td>
            <td>".$result6."</td>
            </tr>
            <tr>
            <td>0</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>1</td>
            <td>0</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </tbody>
    </table>
   </body>";
?>
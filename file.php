<?php
$a = 0;
$b = 0;
$rez1 = !($a > $b);
$rez2 = $a || $b;
$rez3 = $a && $b;
$rez4 = $a xor $b;
$c = 0;
$d = 1;
$rez5 = !($c > $d);
$rez6 = $c || $d;
$rez7 = $c && $d;
$rez8 = $c xor $d;
$e = 1;
$f = 0;
$rez9 = !($e > $f);
$rez10 = $e || $f;
$rez11 = $e && $f;
$rez12 = $e xor $f;
$g = 1;
$h = 1;
$rez9 = !($g > $h);
$rez10 = $g || $h;
$rez11 = $g && $h;
$rez12 = $g xor $h;
echo "<table>
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
            <td>0</td>
            <td>0</td>
            <td>$rez1</td>
            <td>$rez2</td>
            <td>$rez3</td>
            <td>$rez4</td>
            </tr>
            <tr>
            <td>0</td>
            <td>1</td>
            <td>$rez5</td>
            <td>$rez6</td>
            <td>$rez7</td>
            <td>$rez8</td>
            </tr>
            <tr>
            <td>1</td>
            <td>0</td>
            <td>$rez9</td>
            <td>$rez10</td>
            <td>$rez11</td>
            <td>$rez12</td>
            </tr>
            <tr>
            <td>1</td>
            <td>1</td>
            <td>$rez9</td>
            <td>$rez10</td>
            <td>$rez11</td>
            <td>$rez12</td>
            </tr>
            </tbody>
    </table>";
?>
<?php
echo "<link rel = 'stylesheet' href = 'style.css'>";
?>
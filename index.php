<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Знакомство с PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>     
    <table border="1">
        <caption>Таблица 1</caption>
        <tr>
          <th><strong>A</strong></th>
          <th><strong>B</strong></th>
          <th><strong>!A</strong></th>
          <th><strong>A || B</strong></th>
          <th><strong>A && B</strong></th>
          <th><strong>A xor B</strong></th>          
        </tr>
        <tr>          
          <td> <?php $a=0; echo $a ?> </td>
          <td> <?php $b=0; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a || $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a && $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a != $b)); ?> </td>
        </tr>
        <tr>
          <td> <?php $a=0; echo $a ?> </td>
          <td> <?php $b=1; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a || $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a && $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a != $b)); ?> </td>
        </tr>
        <tr>
          <td> <?php $a=1; echo $a ?> </td>
          <td> <?php $b=0; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a || $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a && $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a != $b)); ?> </td>
        </tr>
        <tr>
          <td> <?php $a=1; echo $a ?> </td>
          <td> <?php $b=1; echo $b ?> </td>
          <td> <?php $c = !$a; $c == 0 || 1; echo (int)$c ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a || $b)); ?> </td>
          <td> <?php $c = 0; $d= 1; var_dump(($c && $d) == ($a && $b)); ?> </td>
          <td> <?php $c = $c = 0; $d= 1; var_dump(($c && $d) == ($a != $b)); ?> </td>
        </tr>

        <p></p>

    <table border="1">
        <caption>Таблица 2 "Гибкое сравнение в PHP"</caption>
        <tr id="col_header">
          <td>&nbsp;</td>
          <td><strong>true</strong></td>
          <td><strong>false</strong></td>
          <td><strong>1</strong></td>
          <td><strong>0</strong></td>
          <td><strong>-1</strong></td>
          <td><strong>"1"</strong></td>
          <td><strong>null</strong></td>
          <td><strong>"php"</strong></td>
        </tr>
        <tr>
          <td id="str_header"><strong>true</strong></td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>false</strong></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>1</strong></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>0</strong></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
            <td id="str_header"><strong>-1</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"1"</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            </tr>
          <tr>
            <td id="str_header"><strong>null</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"php"</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
      </table>

      <table border="1">
        <caption>Таблица 3 "Жёсткое сравнение в PHP"</caption>
        
      </table>
      
         
</body>
</html>

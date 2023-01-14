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
        <caption> <h3> Таблица 1 </h3></caption>
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
          <td> <?php $c = 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 1; echo ($c == ($a || $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a && $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a xor $b)) ? "true" : "false";?> </td>
        </tr>
        <tr>
          <td> <?php $a=0; echo $a ?> </td>
          <td> <?php $b=1; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 1; echo ($c == ($a || $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a && $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a xor $b)) ? "true" : "false";?> </td>
        </tr>
        <tr>
          <td> <?php $a=1; echo $a ?> </td>
          <td> <?php $b=0; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 1; echo ($c == ($a || $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a && $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a xor $b)) ? "true" : "false";?> </td>
        </tr>
        <tr>
          <td> <?php $a=1; echo $a ?> </td>
          <td> <?php $b=1; echo $b ?> </td>
          <td> <?php $c = 0 || 1; $c = !$a; echo (int)$c ?> </td>
          <td> <?php $c = 1; echo ($c == ($a || $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a && $b)) ? "true" : "false";?> </td>
          <td> <?php $c = 1; echo ($c == ($a xor $b)) ? "true" : "false";?> </td>
        </tr>

        <p></p>

    <table border="1">
        <caption> <h3> Таблица 2 "Гибкое сравнение в PHP"</h3> </caption>
        <tr id="col_header">
          <td>&nbsp;</td>
          <td><strong>true <?php $true = true; ?></strong></td>
          <td><strong>false<?php $false = false; ?></strong></td>
          <td><strong>1<?php $a=1; ?></strong></td>
          <td><strong>0<?php $b=0; ?></strong></td>
          <td><strong>-1<?php $c= -1; ?></strong></td>
          <td><strong>"1"<?php $d="1"; ?></strong></td>
          <td><strong>null<?php $null=null; ?></strong></td>
          <td><strong>"php"<?php $php="php"; ?></strong></td>
        </tr>
        <tr>
          <td id="str_header"><strong>true <?php $trStr = true; ?></strong></td>
          <td> <?php echo ($trStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($trStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($trStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr == $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>false <?php $falStr = false; ?></strong></td>
          <td> <?php echo ($falStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($falStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php  echo ($falStr == $a) ? "true" : "false";?> </td>
          <td> <?php  echo ($falStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr == $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>1 <?php $aStr=1; ?></strong></td>
          <td> <?php echo ($aStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($aStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($aStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr == $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>0 <?php $bStr=0; ?></strong></td>
          <td> <?php echo ($bStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($bStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($bStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr == $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
            <td id="str_header"><strong>-1 <?php $cStr= -1; ?></strong></td>
          <td> <?php echo ($cStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($cStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($cStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr == $php) ? "true" : "false"; ?> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"1" <?php $dStr="1"; ?></strong></td>
          <td> <?php echo ($dStr== $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($dStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($dStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr == $php) ? "true" : "false"; ?> </td>
            </tr>
          <tr>
            <td id="str_header"><strong>null<?php $nullStr=null; ?></strong></td>
          <td> <?php echo ($nullStr == $true) ? "true" : "false"; ?> </td>            
          <td> <?php echo ($nullStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($nullStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($nullStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr == $php) ? "true" : "false"; ?> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"php" <?php $phpStr="php"; ?></strong></td>
          <td> <?php echo ($phpStr == $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr == $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($phpStr == $a) ? "true" : "false";?> </td>
          <td> <?php echo ($phpStr == $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr == $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr == $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr == $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr == $php) ? "true" : "false"; ?> </td>
          </tr>
      </table>

      <table border="1">
        <caption><h3>Таблица 3 "Жёсткое сравнение в PHP" </h3></caption>
        <tr id="col_header">
        <td>&nbsp;</td>
          <td><strong>true <?php $true = true; ?></strong></td>
          <td><strong>false<?php $false = false; ?></strong></td>
          <td><strong>1<?php $a=1; ?></strong></td>
          <td><strong>0<?php $b=0; ?></strong></td>
          <td><strong>-1<?php $c= -1; ?></strong></td>
          <td><strong>"1"<?php $d="1"; ?></strong></td>
          <td><strong>null<?php $null=null; ?></strong></td>
          <td><strong>"php"<?php $php="php"; ?></strong></td>
        </tr>
        <tr>
          <td id="str_header"><strong>true <?php $trStr = true; ?></strong></td>
          <td> <?php echo ($trStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($trStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($trStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($trStr === $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>false <?php $falStr = false; ?></strong></td>
          <td> <?php echo ($falStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($falStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php  echo ($falStr === $a) ? "true" : "false";?> </td>
          <td> <?php  echo ($falStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php  echo ($falStr === $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>1 <?php $aStr=1; ?></strong></td>
          <td> <?php echo ($aStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($aStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($aStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($aStr === $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
          <td id="str_header"><strong>0 <?php $bStr=0; ?></strong></td>
          <td> <?php echo ($bStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($bStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($bStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($bStr === $php) ? "true" : "false"; ?> </td>
        </tr>
        <tr>
            <td id="str_header"><strong>-1 <?php $cStr= -1; ?></strong></td>
          <td> <?php echo ($cStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($cStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($cStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($cStr === $php) ? "true" : "false"; ?> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"1" <?php $dStr="1"; ?></strong></td>
          <td> <?php echo ($dStr=== $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($dStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($dStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($dStr === $php) ? "true" : "false"; ?> </td>
            </tr>
          <tr>
            <td id="str_header"><strong>null<?php $nullStr=null; ?></strong></td>
          <td> <?php echo ($nullStr === $true) ? "true" : "false"; ?> </td>            
          <td> <?php echo ($nullStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($nullStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($nullStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($nullStr === $php) ? "true" : "false"; ?> </td>
          </tr>
          <tr>
            <td id="str_header"><strong>"php" <?php $phpStr="php"; ?></strong></td>
          <td> <?php echo ($phpStr === $true) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr === $false) ? "true" : "false"; ?>  </td>
          <td> <?php echo ($phpStr === $a) ? "true" : "false";?> </td>
          <td> <?php echo ($phpStr === $b) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr === $c) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr === $d) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr === $null) ? "true" : "false"; ?> </td>
          <td> <?php echo ($phpStr === $php) ? "true" : "false"; ?> </td>
          </tr>
      </table>

</body>
</html>

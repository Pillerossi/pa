<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {

        }
    </style>
</head>
<body>
<?php
/**file name:aritmeetilised_tehted.php; ...*/
// muutujate defineerimine
$x = 8;
$y = 2;

//aritmeetilised operaatorid
$liitmine = $x + $y;
$lahutamine = $x -$y;
$korrutamine = $x * $y;
$jagamine = $x/ $y;
$jaak = $x % $y;

//tabeli väljastamine
echo
 '<table>
 <!--tabeli päis -->
    <thead>
        <tr>
            <th>Operaator</th>
            <th>Nimetus</th>
            <th>Näide</th>
            <th>Tulemus</th>
        </tr>
    </thead>
 <!--tabeli keha-->
 <tbody>
 <!--liitmine -->
 <tr>
     <td>x + y </td>
     <td>Liitmine</td>
     <td>'.$x.' + '.$y.'</td>
     <td>'.$liitmine.'</td>
  </tr>
  <tr>
     <td>x - y </td>
     <td>Lahutamine</td>
     <td>'.$x.' - '.$y.'</td>
     <td>'.$lahutamine.'</td>
  </tr> 
  <tr>
      <td>x * y </td>
     <td>Korrutamine</td>
     <td>'.$x.' * '.$y.'</td>
     <td>'.$korrutamine.'</td>
  </tr>
  <tr>
         <td>x / y </td>
         <td>Jagamine</td>
         <td>'.$x.' / '.$y.'</td>
         <td>'.$jagamine.'</td>
  </tr>
  //jääk
  <tr>
  <td rowspan="2">x % y</td>
  <td rowspan="2">Jääk</td>
  <td>'.$x.'%' .$y.'</td>
  <td></td>
</tr>
  
</tbody>
</table>';

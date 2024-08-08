<html>
    <head>
        <link rel="stylesheet" href="riskstyle.css">
        <style>
            body {
              font-family: Verdana, sans-serif;
            }
        </style>
    </head>
<body>
<div class="content">
<?php
  $patient_estimate = $_POST["patient_estimate"];
  $patient_score = $_POST["patient_score"];
  
  $patient_selfefficacy = $_POST["patient_selfefficacy"];
  $patient_responseefficacy = $_POST["patient_responseefficacy"];
  
  $patient_riskbucket = 0;
  if ($patient_score < 2.5) {
      $patient_riskbucket = 1;
  } elseif ($patient_score < 5) {
      $patient_riskbucket = 2;
  } elseif ($patient_score < 7.5) {
      $patient_riskbucket = 3;
  } elseif ($patient_score < 10) {
      $patient_riskbucket = 4;
  } elseif ($patient_score < 15) {
      $patient_riskbucket = 5;
  } elseif ($patient_score < 25) {
      $patient_riskbucket = 6;
  } else {
      $patient_riskbucket = 7;
  }
?>

<h2>Accuracy of risk perception</h2>

<br>

<table style="width:100%">
    <tr>
        <td>Patient</td>
        <td><?php if ($patient_estimate == 1) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 2) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 3) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 4) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 5) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 6) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_estimate == 7) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta">< 2.5%</td>
        <td class="ruta">2.5% - <5%</td>
        <td class="ruta">5% - <7.5%</td>
        <td class="ruta">7.5% - <10%</td>
        <td class="ruta">10% - <15%</td>
        <td class="ruta">15% - <25%</td>
        <td class="ruta">>= 25%</td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta"><img src="Grön 1.png" alt="Grön 1" width="57" height="24" /></td>
        <td class="ruta"><img src="Grön 2.png" alt="Grön 2" width="57" height="24" /></td>
        <td class="ruta"><img src="Gul 3.png" alt="Gul 3" width="57" height="24" /></td>
        <td class="ruta"><img src="Orange 4.png" alt="Orange 4" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 5.png" alt="Röd 5" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 6.png" alt="Röd 6" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 7.png" alt="Röd 7" width="57" height="24" /></td>
    </tr>
    <tr>
        <td>SCORE2</td>
        <td><?php if ($patient_riskbucket == 1) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 2) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 3) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 4) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 5) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 6) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
        <td><?php if ($patient_riskbucket == 7) echo '<img src="Blå pil upp.png" alt="Pil upp" width="37" height="68" />' ?></td>
    </tr></table>

<br>

<h2>Self-efficacy</h2>

<br>

<table style="width:100%">
    <tr>
        <td></td>
        <td><?php if ($patient_selfefficacy == 1) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 2) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 3) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 4) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 5) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 6) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_selfefficacy == 7) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta">Very low<br>1</td>
        <td class="ruta_vab">2</td>
        <td class="ruta_vab">3</td>
        <td class="ruta_vab">4</td>
        <td class="ruta_vab">5</td>
        <td class="ruta_vab">6</td>
        <td class="ruta">Very high<br>7</td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta"><img src="Röd 7.png" alt="Röd 1" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 6.png" alt="Röd 2" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 5.png" alt="Röd 3" width="57" height="24" /></td>
        <td class="ruta"><img src="Orange 4.png" alt="Orange 4" width="57" height="24" /></td>
        <td class="ruta"><img src="Gul 3.png" alt="Gul 5" width="57" height="24" /></td>
        <td class="ruta"><img src="Grön 2.png" alt="Grön 6" width="57" height="24" /></td>
        <td class="ruta"><img src="Grön 1.png" alt="Grön 7" width="57" height="24" /></td>
    </tr>
</table>


<br>

<h2>Response efficacy</h2>

<br>

<table style="width:100%">
    <tr>
        <td></td>
        <td><?php if ($patient_responseefficacy == 1) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 2) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 3) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 4) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 5) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 6) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
        <td><?php if ($patient_responseefficacy == 7) echo '<img src="Blå pil ned.png" alt="Pil ned" width="37" height="68" />' ?></td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta">Very low<br>1</td>
        <td class="ruta_vab">2</td>
        <td class="ruta_vab">3</td>
        <td class="ruta_vab">4</td>
        <td class="ruta_vab">5</td>
        <td class="ruta_vab">6</td>
        <td class="ruta">Very high<br>7</td>
    </tr>
    <tr>
        <td></td>
        <td class="ruta"><img src="Röd 7.png" alt="Röd 1" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 6.png" alt="Röd 2" width="57" height="24" /></td>
        <td class="ruta"><img src="Röd 5.png" alt="Röd 3" width="57" height="24" /></td>
        <td class="ruta"><img src="Orange 4.png" alt="Orange 4" width="57" height="24" /></td>
        <td class="ruta"><img src="Gul 3.png" alt="Gul 5" width="57" height="24" /></td>
        <td class="ruta"><img src="Grön 2.png" alt="Grön 6" width="57" height="24" /></td>
        <td class="ruta"><img src="Grön 1.png" alt="Grön 7" width="57" height="24" /></td>
    </tr>
</table>

<br>
<p><a href="index.htm">New calculation</a></p>
</div>

</body>
</html>
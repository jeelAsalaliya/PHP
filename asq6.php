<html>

<head>
  <style>
    table {
      width: 270px;
      border-collapse: collapse;
    }

    td {
      width: 30px;
      height: 30px;
      text-align: center;
    }

    .black {
      background-color: #999;
    }

    .white {
      background-color: #fff;
    }
  </style>
  <title>chess board</title>
</head>

<body>
  <table border="3">
    <?php
    for ($i = 1; $i <= 8; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 8; $j++) {
        if (($i + $j) % 2 == 0) {
          echo "<td class='black'></td>";
        } else {
          echo "<td class='white'></td>";
        }
      }
      echo "</tr>";
    }

    ?>
  </table>
</body>

</html>
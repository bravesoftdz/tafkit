<?
  header('Content-type: text/html; charset=windows-1256');
  $af = new COM('ArFigures.Figure');
  $s = $af->Extended(154654, '����', '������', '������', '�����', true)
?>
<html>
<body>
<?php
  echo $s;
?>
</body>
</html>

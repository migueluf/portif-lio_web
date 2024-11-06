<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signos</title>
<link rel="stylesheet" href="stars.css"/>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
crossorigin="anonymous">
</head>
<body class='result'>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div id='title'>
<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");
function geraTimestamp($data)
{
$partes = explode('/', $data);
return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
}
function check_in_range($start_date, $end_date, $date_from_user)
{
$year = explode('/', $date_from_user);
// Convert to timestamp
$start_ts = geraTimestamp($start_date."/".$year[2]);
$end_ts = geraTimestamp($end_date."/".$year[2]);
$user_ts = geraTimestamp($date_from_user);
return ($user_ts >= $start_ts && $user_ts <= $end_ts);
}
foreach ($signos->signo as $l)
{
$start_date = $l->dataInicio;
$end_date = $l->dataFim;
if(check_in_range($start_date, $end_date, $data_nascimento)){
print "<span>".(string)$l->signoNome. "</span></br>";
print "<span style='font-size:14px;'>".(string)$l->descricao.
"</span></br>";
}
}
?>
</div>
<a class="voltar" href="index.php">Voltar ao inicio</a>
</body>
</html>
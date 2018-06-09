<?php
  /*exec('ping 192.168.40.3', $saida, $retorno);
  if (count($saida)) {
    print 'A Máquina está online e os dados do PING foram gravados em $saida. :)';
  } else {
    print 'A Máquina NÃO está online ou o host não pode ser encontrado. :(';
  }

function pingAddress($ip) {
    $pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
    print_r($outcome);
    echo '<br>';
    print_r($status);
    exit();
    if (0 == $status) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    echo "The IP address, $ip, is  ".$status;
}

pingAddress("192.168.140.91");

$comando = "/bin/ping -c 1 192.168.40.3";
$saida = shell_exec($comando);

if ( ereg("bytes from",$saida) ) {
echo "<b>online</b></td>";
} else { 
echo "<font color=red><b>não responde</b></font></td>";
}

*/
 $conectado = @ fsockopen('192.168.40.3', 636, $numeroDoErro, $stringDoErro, 10); // Este último é o timeout, em segundos
  if ($conectado) {
    print 'A máquina está online! :)';
  } else {
    print 'A máquina NÃO está online! :(';
  } 
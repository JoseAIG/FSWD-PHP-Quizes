<?php
class Pais
{
  private $nombre;
  private $zonaHoraria;

  public function __construct($nombre, $zonaHoraria)
  {
    $this->nombre = $nombre;
    $this->zonaHoraria = $zonaHoraria;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getZonaHoraria()
  {
    return $this->zonaHoraria;
  }
}

$paises = [
  new Pais("Venezuela", "America/Caracas"),
  new Pais("Estados Unidos", "America/New_York"),
  new Pais("España", "Europe/Madrid"),
  new Pais("Australia", "Australia/Sydney"),
  new Pais("Japón", "Asia/Tokyo"),
  new Pais("Italia", "Europe/Rome"),
];

if ($_POST == TRUE) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $pais = $_POST["pais"];

  $zonaHoraria = "America/Caracas";
  foreach ($paises as $p) {
    if ($p->getNombre() === $pais) {
      $zonaHoraria = $p->getZonaHoraria();
      break;
    }
  }

  $horaActual = new DateTime("now", new DateTimeZone($zonaHoraria));
  $saludo = obtenerSaludo($horaActual->format("H"));

  echo $saludo . ' ' . $nombre . ' ' . $apellido . '! ' . 'Bienvenido a ' . $pais . '<br>' . 'La hora local es: ' . $horaActual->format('H:i');
}

function obtenerSaludo(int $hora)
{
  if ($hora >= 0 && $hora < 12) {
    return "Buenos días";
  } elseif ($hora >= 12 && $hora < 18) {
    return "Buenas tardes";
  } else {
    return "Buenas noches";
  }
}
?>
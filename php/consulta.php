<?php

class consulta{

    protected function getConsultar(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://swapi.dev/api/people',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      ));

      $response = curl_exec($curl);

      curl_close($curl);

      $json_consulta = json_decode($response, true);

      return $json_consulta;
  }
  
  public function cretedConsulta()
  {
    $json = $this->getConsultar();

    foreach ($json['results'] as $ator) {
      echo "Nome: ".$ator['name']."<br>";
    };
  }

}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $consulta = new Consulta;
  $consulta->cretedConsulta();
}
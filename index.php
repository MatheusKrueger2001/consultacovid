<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        function consulta(){
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

            public $json_consulta = json_decode($response, true);

        }

        echo '<pre>';
        print_r($json_consulta);

        foreach ($json_consulta['results'] as $ator) {
             echo "Nome: ".$ator['name']."<br>";
        };
        
    ?>
</body>
</html>
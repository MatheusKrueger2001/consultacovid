$.ajax({
        url: 'consulta.php',
        method: 'post',
        processData: false,
        contentType: false
    }).done(function(chamarconsulta){
        return consulta
    }
)

<?php

class Utils {
    
    public static function random_str(
        int $length = 64,

        string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
        ): string {
        if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
        }

        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;

        for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
        }


        return implode('', $pieces);
    }

    public static function sendOkMessage(){
        echo '
        <div class="container">
            <link rel="stylesheet" href="../public/assets/dist/css/bootstrap.min.css">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Inscripción exitosa!</h4>
                <p>La inscripción ha finalizado con éxito.</p>
                <hr>
                <span class="mb-0">Haga <a href="../"> clic aquí</a> para ser redirigido.</span>
            </div>
            </div>
        ';
    }

    public static function sendErrorMessage(){
        echo '
        <div class="container">
            <link rel="stylesheet" href="../public/assets/dist/css/bootstrap.min.css">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Ha ocurrido un error!</h4>
                <p>Por favor ingrese sus datos e intentelo nuevamente.</p>
                <hr>
                <span class="mb-0">Haga <a href="../"> clic aquí</a> para ser redirigido.</span>
            </div>
        </div>
        ';
    }

}
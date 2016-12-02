<?php
/**
 * Description of Padronizacao
 *
 * @author Lara Ludwig e Thomas Martinez
 * @since 18/11/2016
 */
class Padronizacao {
    public static function juntarNome($n, $s){
        $array[] = $n;
        $array[] = $s;
        return implode(' ',$array);
    }
    public static function padronizarNome($n){
        return ucwords(strtolower($n));
    }
    public static function padronizarEmail($e){
        return strtolower(filter_var($e, FILTER_VALIDATE_EMAIL ));
    }
    public static function padronizarObs($obs){
        return ucwords(strtolower($obs));
    }
    public static function padronizarRua($r){
        return ucwords(strtolower($r));
    }
    public static function padronizarBairro($b){
        return ucwords(strtolower($b));
    }
    public static function padronizarCidade($c){
        return ucwords(strtolower($c));
    }
    
    
}//fecha classe

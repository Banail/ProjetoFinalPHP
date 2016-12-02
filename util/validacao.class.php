<?php
class Validacao {

    public static function testarNome($n) {
        $exp = '/^[A-zÁ-úã-õç ]{2,30}$/';
        return preg_match($exp, $n);
    }

    public static function testarAnoNasc($an) {
        $exp = '/^[0-9]{4}$/';
        return preg_match($exp, $an);
    }

    public static function testarTelefone1($t1) {
        $exp = '/^[0-9]{9,14}$/';
        return preg_match($exp, $t1);
    }

    public static function testarTelefone2($t2) {
        $exp = '/^[0-9]{9,14}$/';
        return preg_match($exp, $t2);
    }

    public static function testarAltura($a) {
        $exp = '/^[0-9.]{3,4}$/';
        return preg_match($exp, $a);
    }

    public static function testarPeso($p) {
        $exp = '/^[0-9]{2,3}$/';
        return preg_match($exp, $p);
    }

    public static function testarMeta($m) {
        $exp = '/^(perdaPeso|hipertrofia)$/';
        return preg_match($exp, $m);
    }

    public static function testarObs($obs) {
        $exp = '/^[A-zÁ-úã-õ0-9ç ]{0,140}$/';
        return preg_match($exp, $obs);
    }

    public static function testarRua($ru) {
        $exp = '/^[A-zÁ-úã-õç ]{2,30}$/';
        return preg_match($exp, $ru);
    }

    public static function testarBairro($b) {
        $exp = '/^[A-zÁ-úã-õç ]{2,30}$/';
        return preg_match($exp, $b);
    }

    public static function testarCidade($c) {
        $exp = '/^[A-zÁ-úã-õç ]{2,30}$/';
        return preg_match($exp, $c);
    }

    public static function testarNumero($nu) {
        $exp = '/^[0-9]{1,5}$/';
        return preg_match($exp, $nu);
    }

    public static function testarUf($uf) {
        $exp = '/^(rs|sc|pr|sp|rj|mg|ms|es|ro|pe|rn|df|go|pa|pb|ma|ac|am|rr|ap|rd|pi|ce|se|ba|to|pe)$/';
        return preg_match($exp, $uf);
    }

}//fecha classe

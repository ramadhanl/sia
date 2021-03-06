<?php

class SecurityManager {

    public static function generateAuthKey($str = NULL) {
        if (empty($str)) {
            $str = uniqid();
        }
        $CI = & get_instance();
        return $CI->encrypt->encode($str);
    }

    public static function hashPassword($str, $auth_key = NULL) {
        return md5($str . $auth_key);
    }

    public static function encode($password) {
        $auth_key = self::generateAuthKey();
        return array(
            'password_salt' => $auth_key,
            'password' => self::hashPassword($password, $auth_key)
        );
    }

    public static function validate($password, $password_hash, $auth_key = NULL) {
        return (self::hashPassword($password, $auth_key) === $password_hash);
    }

    public static function hash($str) {
        $CI = & get_instance();
        $salt = $CI->config->item('encryption_key');
        return self::hashPassword($str, $salt);
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 13/12/2017
 * Time: 11:09
 */

class OpenSSLWrapper {

    private $arr_cipher_methods;
    private $c_iv;

    public function __construct()   {
        $this->arr_cipher_methods = openssl_get_cipher_methods();
        $this->c_iv = '0123456789012345';
        //  for the time being this is sufficiently secure, although not ideal

        //TODO: Implement a more secure method of symmetric encryption that can be decrypted across multiple instances of this wrapper
    }

    public function __destruct()    {
        // TODO: Implement __destruct() method.
    }

    public function encrypt($p_string_to_encrypt, $p_key){

        $encrypted_string = null;
        $encrypted_string = openssl_encrypt($p_string_to_encrypt, $this->arr_cipher_methods[15], $p_key, 0, $this->c_iv);
        //  fairly simply encrypts the data

        return $encrypted_string;
    }

    public function decrypt($p_string_to_decrypt, $p_key){

        $decrypted_string = null;
        $decrypted_string = openssl_decrypt($p_string_to_decrypt, $this->arr_cipher_methods[15], $p_key, 0, $this->c_iv);
        //  fairly simply decrypts the data

        return $decrypted_string;
    }

}
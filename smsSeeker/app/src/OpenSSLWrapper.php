<?php
/**
 * OpenSSLWrapper.php
 *
 * This class ensures a users session is fully encrypted, it can also decrypt the session when operations need to be
 * performed on the session. It makes use of the OpenSSL library to do this.
 */

class OpenSSLWrapper {

    /** @var Array $arr_cipher_methods The cipher methods used for encryption  */
    private $arr_cipher_methods;
    /** @var String $c_iv Initialization Vector used to make each cipher unique */
    private $c_iv;

    /**
     * Default constructor that initialises the $arr_cipher_methods to get a list of available cipher methods from the
     * OpenSSL library. It also initialises the $c_iv (Initialization Vector) to NOT SURE WHAT OPENSSL_IV IS
     */

    public function __construct()   {
        $this->arr_cipher_methods = openssl_get_cipher_methods();
        $this->c_iv = OPENSSL_IV;
        //  for the time being this is sufficiently secure, although not ideal

    }

    public function __destruct()    {
        // TODO: Implement __destruct() method.
    }

    /**
     * This function encrypts a given string. It does this by assigning the $encrypted_string variable to the
     * openssl_encrypt function which takes the string to encrypt variable as a parameter, it then chooses the cipher
     * method to use and ensures the given key matches and finally applies the initialization vector to ensure each
     * cipher is unique.
     *
     * It then returns the encrypted string in a Base64 format.
     *
     * @param String $p_string_to_encrypt
     * @param NOT SURE WHAT TYPE $p_key
     * @return String
     */
    public function encrypt($p_string_to_encrypt, $p_key){

        $encrypted_string = null;
        $encrypted_string = openssl_encrypt($p_string_to_encrypt, $this->arr_cipher_methods[15], $p_key, 0, $this->c_iv);
        //  fairly simply encrypts the data

        return $encrypted_string;
    }

    /**
     * This function decrypts a given string. It does this by assigning the $decrypted_string variable to the
     * openssl_decrypt function which takes the string to decrypt variable as a parameter, it then chooses the cipher
     * method to use and ensures the given key matches and finally applies the initialization vector to ensure each
     * cipher is unique.
     *
     * It then returns the decrypted string in a the orignal string foramt.
     *
     * @param String $p_string_to_decrypt
     * @param NOT SURE WHAT TYPE $p_key
     * @return String
     */

    public function decrypt($p_string_to_decrypt, $p_key){

        $decrypted_string = null;
        $decrypted_string = openssl_decrypt($p_string_to_decrypt, $this->arr_cipher_methods[15], $p_key, 0, $this->c_iv);
        //  fairly simply decrypts the data

        return $decrypted_string;
    }

}
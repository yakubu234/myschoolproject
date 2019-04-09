<?php
echo $key = openssl_digest(php_uname(), 'SHA256', TRUE);
$string = "i am a boy";

$iv = mcrypt_create_iv(
    mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
    MCRYPT_DEV_URANDOM
);

$encrypted = base64_encode(
    $iv .
    mcrypt_encrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        $string,
        MCRYPT_MODE_CBC,
        $iv
    )
);
if ($encrypted) {
	echo "encrypted successfully";
	echo $encrypted;
}else{
	echo "error in encrypting";
}
# deryption process 
$data = base64_decode($encrypted);
$iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

$decrypted = rtrim(
    mcrypt_decrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
        MCRYPT_MODE_CBC,
        $iv
    ),
    "\0"
);
echo $decrypted;
#https://stackoverflow.com/questions/1289061/best-way-to-use-php-to-encrypt-and-decrypt-passwords
# the above is the link to where i get the encryption algorithim.

  $enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
 echo $enc_key;
 #   https://www.the-art-of-web.com/php/two-way-encryption/  
  ////heres nother good encryption sites ...//


 #  https://stackoverflow.com/questions/34308671/encryption-and-decryption-algorithms-in-php   -------  
 /// though havent yet understand this but its for codeigneter framework.....  /////  -- here is another library----   https://github.com/paragonie/sodium_compat
?>
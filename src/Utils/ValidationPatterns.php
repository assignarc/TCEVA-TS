<?php
namespace App\Utils;
class ValidationPatterns {
    // Pattern validations -- from OWASP
    // Valid email
    public static $emailPattern = '/^[a-zA-Z0-9_+&*-]+(?:\.[a-zA-Z0-9_+&*-]+)*@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,7}$/';

    // Upper/lower case & digits for safe text
    public static $safeTextPattern = '/^[a-zA-Z0-9 .-]+$/';

    // Password validation: 4 to 8 characters (this could be modified as per requirements)
    public static $passwordPattern = '/^[a-zA-Z0-9]{4,8}$/';

    // Function to validate email
    public static function validateEmail($email) {
        return preg_match(self::$emailPattern, $email);
    }

    // Function to validate safe text
    public static function validateSafeText($text) {
        return preg_match(self::$safeTextPattern, $text);
    }

    // Function to validate password
    public static function validatePassword($password) {
        return preg_match(self::$passwordPattern, $password);
    }
}
?>

<?php

namespace App\Services;

class ValidationPatterns {
    // Pattern validations -- adapted from https://www.owasp.org/index.php/OWASP_Validation_Regex_Repository
    
    // Valid email
    public const EMAIL_PATTERN = "/^[a-zA-Z0-9_+&*-]+(?:\.[a-zA-Z0-9_+&*-]+)*@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,7}$/";
    
    // Upper/lower & digits
    public const SAFE_TEXT_PATTERN = "/^[a-zA-Z0-9 .-]+$/";
    
    // Password: 4 to 8 character password requiring numbers and both lowercase and uppercase letters
    public const PASSWD_PATTERN = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/";
    
    // Zipcode
    public const ZIP_PATTERN = "/^\d{5}(-\d{4})?$/";
    
    // Phone
    public const PHONE_PATTERN = "/^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/";
    
    // URL
    public const URL_PATTERN = "/^((((https?|ftps?|gopher|telnet|nntp):\/\/)|(mailto:|news:))(%[0-9A-Fa-f]{2}|[-()_.!~*';\/?:@&=+$,A-Za-z0-9])+)([).!';\/?:,][[:blank:]])?$/";
    
    // Number
    public const NUMBER_PATTERN = "/^-?[0-9]+$/";
    
    // Float
    public const FLOAT_PATTERN = "/^[-+]?[0-9]+(\.[0-9]+)?([eE][-+]?[0-9]+)?$/";
    
    // Year (20xx)
    public const YEAR_PATTERN = "/^20[0-9]{2}$/";

    // Function to check if a value matches a given pattern
    public static function isValid($pattern, $value) {
        return preg_match($pattern, $value) === 1;
    }
}
?>

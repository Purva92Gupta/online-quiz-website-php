<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UsernameRule implements Rule
{
    public function passes($attribute, $value)
    {
        return $this->isNonDecimalNumber($value) || filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function message()
    {
        return 'Username field must be a valid Email address or Numeric';
    }

    private function isNonDecimalNumber($value) {
        // Check if it's a numeric value or a numeric string
        if (!is_numeric($value)) {
            return false;
        }
    
        // Check if the numeric string contains a decimal point
        if (strpos($value, '.') !== false) {
            return false;
        }
    
        return true;
    }
}
<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class EnglishValidator extends AbstractValidator
{

   protected string $message = 'Field :field is not english';

   public function rule(): bool
   {
        return !preg_match('~[а-яё]+~iu', $this->value);
   }
}

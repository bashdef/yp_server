<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class RoleValidator extends AbstractValidator
{

   protected string $message = 'Field :field is not selected';

   public function rule(): bool
   {
       return $this->value != 0;
   }
}

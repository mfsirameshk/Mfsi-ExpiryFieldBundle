<?php

/**
 * 
 */

namespace Mindfire\Bundle\ExpiryFieldBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validation class for Expiry Date
 */
class ValidExpiryValidator extends ConstraintValidator {

    public function validate($value, Constraint $constraint) {
        $currentMonth = new \DateTime();
        $currentMonth->modify('first day of this month');
        if ($value < $currentMonth) {
            $this->context->addViolation($constraint->message);
        }
    }

}

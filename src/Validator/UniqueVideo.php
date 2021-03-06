<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class UniqueVideo extends Constraint
{
    /*
     * Any public properties become valid options for the annotation.
     * Then, use these in your validator class.
     */

    public $message = 'Cette vidéo existe déjà';
    public $invalidUrl = 'Url invalide';

    public function validatedBy()
    {
        return \get_class($this).'Validator';
    }
}

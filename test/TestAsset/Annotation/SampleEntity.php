<?php

/**
 * @see       https://github.com/laminas/laminas-form for the canonical source repository
 * @copyright https://github.com/laminas/laminas-form/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-form/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Form\TestAsset\Annotation;

use Laminas\Form\Annotation;

class SampleEntity
{
    /**
     * @Annotation\ErrorMessage("Invalid or missing sampleinput")
     * @Annotation\Required(true)
     * @Annotation\AllowEmpty(true)
     */
    public $sampleinput;

    /**
     *
     * @Annotation\Attributes({"type":"text"})
     */
    public $anotherSampleInput;
}

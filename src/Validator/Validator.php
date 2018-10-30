<?php

declare(strict_types=1);

interface Validator{
    /**
     * @param string value
     * @throws \LogicException
     */
    public function validate(string $value): void;

}
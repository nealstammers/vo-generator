<?php

declare(strict_types=1);

namespace ChrisHarrison\VoGenerator;

interface ValueObject
{
    /**
     * @return bool
     */
    public function isNull(): bool;

    /**
     * @return bool
     */
    public function isNotNull(): bool;

    /**
     * @param mixed $native
     * @return mixed
     */
    public static function fromNative($native);

    /**
     * @return mixed
     */
    public function toNative();

    /**
     * @return static
     */
    public static function null();

    /**
     * @param mixed $native
     * @return static
     */
    public function whenNull($native);
}
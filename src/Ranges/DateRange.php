<?php

namespace Belamov\PostrgesRange\Ranges;

use Carbon\CarbonImmutable;

/**
 * Class DateRange
 *
 * @method CarbonImmutable|null from()
 * @method CarbonImmutable|null to()
 *
 * @package Belamov\PostrgesRange\Ranges
 */
class DateRange extends CanonicalRange
{
    /**
     * @param $boundary
     * @return string
     */
    protected function addToDiscreteBoundary($boundary): string
    {
        return $this->transformBoundary($boundary)->addDay()->toDateString();
    }

    /**
     * @param  string  $boundary
     * @return CarbonImmutable
     */
    protected function transformBoundary(string $boundary): CarbonImmutable
    {
        return CarbonImmutable::parse($boundary);
    }
}

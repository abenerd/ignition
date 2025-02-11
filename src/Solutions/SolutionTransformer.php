<?php

namespace Spatie\Ignition\Solutions;

use Illuminate\Contracts\Support\Arrayable;
use Spatie\Ignition\Contracts\Solution;

class SolutionTransformer implements Arrayable
{
    protected Solution $solution;

    public function __construct(Solution $solution)
    {
        $this->solution = $solution;
    }

    /** @return array<string, array<int,string>|string|false> */
    public function toArray(): array
    {
        return [
            'class' => get_class($this->solution),
            'title' => $this->solution->getSolutionTitle(),
            'description' => $this->solution->getSolutionDescription(),
            'links' => $this->solution->getDocumentationLinks(),
            'is_runnable' => false,
        ];
    }
}

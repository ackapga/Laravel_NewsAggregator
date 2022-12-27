<?php

declare(strict_types=1);

namespace App\Services\Contracts;

interface Parser
{
    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link): self;

    /**
     * @return void
     */
    public function saveParseDate(): void;
}

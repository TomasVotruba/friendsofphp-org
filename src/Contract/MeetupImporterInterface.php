<?php declare(strict_types=1);

namespace Fop\Contract;

use Fop\ValueObject\Meetup;

interface MeetupImporterInterface
{
    public function getKey(): string;

    /**
     * @return Meetup[]
     */
    public function getMeetups(): array;
}

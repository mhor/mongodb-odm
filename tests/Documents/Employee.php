<?php

declare(strict_types=1);

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Employee extends BaseEmployee
{
    /**
     * @ODM\ReferenceOne(targetDocument=Manager::class)
     *
     * @var Manager|null
     */
    private $manager;

    public function getManager(): ?Manager
    {
        return $this->manager;
    }

    public function setManager(Manager $val): Employee
    {
        $this->manager = $val;

        return $this;
    }
}

<?php
declare(strict_types=1);

namespace ScriptFUSION\Steam250\SiteGenerator\Toplist\Impl;

use Doctrine\DBAL\Query\QueryBuilder;
use ScriptFUSION\Steam250\SiteGenerator\Database\SortDirection;
use ScriptFUSION\Steam250\SiteGenerator\Toplist\Algorithm;
use ScriptFUSION\Steam250\SiteGenerator\Toplist\Toplist;

class Bottom100List extends Toplist
{
    public function __construct(string $id = 'bottom100', float $weight = 4000)
    {
        parent::__construct($id, 100, Algorithm::BAYESIAN(), $weight);
    }

    public function customizeQuery(QueryBuilder $builder): void
    {
        $builder->orderBy('score', SortDirection::ASC());
    }
}
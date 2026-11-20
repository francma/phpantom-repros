<?php

namespace Repro;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;

final class Probe
{
    public function query(Connection $connection): QueryBuilder
    {
        return $connection
            ->createQueryBuilder()
            ->select('r.id')
            ->from('sample_rows', 'r')
            ->leftJoin('r', 'sample_details', 'd', 'd.row_id = r.id')
            ->where('r.active = :active')
            ->setParameter('active', true);
    }
}

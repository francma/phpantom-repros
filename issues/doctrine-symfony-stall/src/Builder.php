<?php

namespace Repro;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;

final class Builder
{
    public function build(EntityManagerInterface $em, array $flags): QueryBuilder
    {
        $qb = $em->createQueryBuilder()->select('root')->from(Entity::class, 'root');
        if (isset($flags[0])) {
            $qb->leftJoin(Entity::class, 'j0', 'WITH', 'j0.id = root.id');
        }
        if (isset($flags[1])) {
            $qb->leftJoin(Entity::class, 'j1', 'WITH', 'j1.id = root.id');
        }
        if (isset($flags[2])) {
            $qb->leftJoin(Entity::class, 'j2', 'WITH', 'j2.id = root.id');
        }
        if (isset($flags[3])) {
            $qb->leftJoin(Entity::class, 'j3', 'WITH', 'j3.id = root.id');
        }
        if (isset($flags[4])) {
            $qb->leftJoin(Entity::class, 'j4', 'WITH', 'j4.id = root.id');
        }
        if (isset($flags[5])) {
            $qb->leftJoin(Entity::class, 'j5', 'WITH', 'j5.id = root.id');
        }
        if (isset($flags[6])) {
            $qb->leftJoin(Entity::class, 'j6', 'WITH', 'j6.id = root.id');
        }
        if (isset($flags[7])) {
            $qb->leftJoin(Entity::class, 'j7', 'WITH', 'j7.id = root.id');
        }
        if (isset($flags[8])) {
            $qb->leftJoin(Entity::class, 'j8', 'WITH', 'j8.id = root.id');
        }
        if (isset($flags[9])) {
            $qb->leftJoin(Entity::class, 'j9', 'WITH', 'j9.id = root.id');
        }
        if (isset($flags[10])) {
            $qb->leftJoin(Entity::class, 'j10', 'WITH', 'j10.id = root.id');
        }
        if (isset($flags[11])) {
            $qb->leftJoin(Entity::class, 'j11', 'WITH', 'j11.id = root.id');
        }
        if (isset($flags[12])) {
            $qb->leftJoin(Entity::class, 'j12', 'WITH', 'j12.id = root.id');
        }
        if (isset($flags[13])) {
            $qb->leftJoin(Entity::class, 'j13', 'WITH', 'j13.id = root.id');
        }
        if (isset($flags[14])) {
            $qb->leftJoin(Entity::class, 'j14', 'WITH', 'j14.id = root.id');
        }
        if (isset($flags[15])) {
            $qb->leftJoin(Entity::class, 'j15', 'WITH', 'j15.id = root.id');
        }
        if (isset($flags[16])) {
            $qb->leftJoin(Entity::class, 'j16', 'WITH', 'j16.id = root.id');
        }
        if (isset($flags[17])) {
            $qb->leftJoin(Entity::class, 'j17', 'WITH', 'j17.id = root.id');
        }
        $qb->setParameter('example', 1);
        return $qb;
    }
}

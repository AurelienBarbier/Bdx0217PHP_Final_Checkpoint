<?php

namespace Marmiwild\CoreBundle\Repository;

/**
 * RecetteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecetteRepository extends \Doctrine\ORM\EntityRepository
{

    public function find3PlusRecentes() {
        $qb = $this->createQueryBuilder('r')
            ->orderBy('r.dateCreation', 'desc')
            ->setMaxResults(3);

        return $qb->getQuery()->getResult();
    }

    public function find3PlusEconomes() {
        $qb = $this->createQueryBuilder('r')
            ->orderBy('r.cout', 'asc')
            ->setMaxResults(3);

        return $qb->getQuery()->getResult();
    }

    public function find5PlusFaciles() {
        $qb = $this->createQueryBuilder('r')
            ->orderBy('r.difficulte', 'asc')
            ->setMaxResults(5);

        return $qb->getQuery()->getResult();
    }
}

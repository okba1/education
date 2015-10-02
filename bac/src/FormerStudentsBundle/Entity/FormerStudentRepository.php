<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
/**
 * FormerStudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormerStudentRepository extends EntityRepository
{
        /**
         * Get the paginated list of students
         *
         * @param int $page
         * @param int $maxperpage
         * @param string $sortby
         * @return Paginator
         */
        public function getStudentsList($page=1, $maxperpage=10)
        {
            $q = $this->_em->createQueryBuilder()
                ->select('formerStudent')
                ->from('FormerStudentsBundle:FormerStudent','formerStudent')
            ;
     
            $q->setFirstResult(($page-1) * $maxperpage)
                ->setMaxResults($maxperpage);
     
            return new Paginator($q);
        }



}

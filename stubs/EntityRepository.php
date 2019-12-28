<?php

namespace Doctrine\ORM;

use Doctrine\Common\Collections\Selectable;
use Doctrine\Common\Persistence\ObjectRepository;

/**
 * @template T
 * @template-implements Selectable<int,T>
 * @template-implements ObjectRepository<T>
 */
class EntityRepository implements ObjectRepository, Selectable
{
    /** @var string */
    protected $_entityName;

    /** @var EntityManagerInterface */
    protected $_em;

    /** @var Mapping\ClassMetadata */
    protected $_class;

    /** @param Mapping\ClassMetadata<T> $class */
    public function __construct(EntityManagerInterface $em, Mapping\ClassMetadata $class)
    {
    }

    /**
     * @param ?int $lockMode
     * @param ?int $lockVersion
     *
     * @return ?T
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
    }

    /** @return list<T> */
    public function findAll()
    {
    }

    /**
     * @param ?int $limit
     * @param ?int $offset
     *
     * @return list<T>
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
    }

    /** @return ?T */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
    }
}

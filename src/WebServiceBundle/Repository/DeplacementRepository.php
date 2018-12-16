<?php
namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;

class DeplacementRepository extends EntityRepository{
    public function getAll(){
        return $this->getEntityManager()
            ->getRepository("WebServiceBundle:Deplacement")
            ->createQueryBuilder("u")
            ->select("u.annee,u.mois")
            ->getQuery()
            ->getResult();
    }

    public function getID($id){
        return $this->getEntityManager()
            ->getRepository("WebServiceBundle:Deplacement")
            ->createQueryBuilder("u")
            ->select("u.annee")
            ->where("u.user = :id")
            ->setParameter("id",$id)
            ->getQuery()
            ->getResult();
    }

    public function getByUAM($user,$annee,$mois){
        return $this->getEntityManager()
            ->getRepository("WebServiceBundle:Deplacement")
            ->createQueryBuilder("u")
            ->select("u.annee,u.mois")
            ->where("u.annee = :annee")
            ->where("u.mois = 1")
            //->setParameter("mois",1)
            ->where("u.user = 2")
            //->setParameter("user",2)
            ->setParameter("annee",2018)
            ->getQuery()
            ->getResult();
    }
}

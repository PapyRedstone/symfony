<?php

/**
 * C'est le répertoire de méthode pour de l'entité Deplacement.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

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
            ->where("u.annee = :annee AND u.mois = :mois AND u.user = :user")
            ->setParameter("annee",2018)
            ->setParameter("mois",1)
            ->setParameter("user",2)
            ->getQuery()
            ->getResult();
    }

    public function findAllMonth($idUser){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT * FROM deplacement WHERE user_id=:id ORDER BY annee,mois ASC';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function findAllMonths(){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT * FROM deplacement ';
      $stmt=$conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function verifyMonth($month,$year,$id){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT COUNT(mois) nb_mois FROM deplacement WHERE mois=:month AND annee=:year AND user_id=:id';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':month', $month);
      $stmt->bindParam(':year', $year);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetchAll();
    }
}

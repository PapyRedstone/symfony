<?php

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class userRepository extends EntityRepository{
    public function findCity($idUser){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT ville.ville FROM ville,user WHERE user.id=:id AND user.ville_id=ville.id';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function findAllDays($idMonth){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT * FROM deplacement_jour WHERE deplacement_id=:id ';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idMonth);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function sumEuroAndKM($idMonth){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT sum(deplacement_jour.montant) sumMontant ,sum(deplacement_jour.nb_km) sumKM FROM deplacement_jour WHERE deplacement_jour.deplacement_id=:id ';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idMonth);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function getValueKM($id){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT montant FROM type_deplacement WHERE id=:id ';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetchAll();
    }

}

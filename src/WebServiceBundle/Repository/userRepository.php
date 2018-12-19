<?php

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class userRepository extends EntityRepository{
    public function findAllMonth($idUser){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT * FROM deplacement WHERE user_id=:id';
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

    public function findSociety($idUser){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT societe.societe FROM societe,user WHERE user.id=:id AND user.societe_id=societe.id';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function findCity($idUser){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT ville.ville FROM ville,user WHERE user.id=:id AND user.ville_id=ville.id';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function findAllDays($idUser,$month,$year){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT * FROM deplacement,user,deplacement_jour WHERE user.id=:id AND deplacement.mois=:month AND deplacement.annee=:year AND user.id=deplacement.user_id AND deplacement.id=deplacement_jour.deplacement_id ';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->bindParam(':month', $month);
      $stmt->bindParam(':year', $year);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function sumEuroAndKM($id,$month,$year){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT sum(deplacement_jour.montant) sumMontant ,sum(deplacement_jour.nb_km) sumKM FROM deplacement,user,deplacement_jour WHERE user.id=:id AND deplacement.mois=:month AND deplacement.annee=:year AND user.id=deplacement.user_id AND deplacement.id=deplacement_jour.deplacement_id ';
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':id', $idUser);
      $stmt->bindParam(':month', $month);
      $stmt->bindParam(':year', $year);
      $stmt->execute();
      return $stmt->fetchAll();
    }

}

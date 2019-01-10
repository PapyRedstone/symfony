<?php

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class SocieteRepository extends EntityRepository{
  public function nbKMperSociety(){
    $conn=$this->getEntityManager()->getConnection();
    $sql='SELECT societe.societe,
    (SELECT SUM(deplacement_jour.nb_km)
      FROM deplacement_jour, user, deplacement
        WHERE deplacement_jour.deplacement_id = deplacement.id AND deplacement.user_id = user.id AND user.societe_id = societe.id)
          AS nbre_km FROM societe';
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function nbUserPerSociety(){
    $conn=$this->getEntityManager()->getConnection();
    $sql='SELECT societe.societe,
            (SELECT COUNT(user.nom)
              FROM user
                WHERE user.societe_id = societe.id) AS nbre_user FROM societe';
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function nbKmPerMonthAndPerUser($year){
    $conn=$this->getEntityManager()->getConnection();
    $sql='  SELECT user.nom, deplacement.mois,
              (SELECT SUM(deplacement_jour.nb_km)
                  FROM deplacement_jour
                    WHERE deplacement_jour.deplacement_id = deplacement.id) as km
                      FROM user, deplacement
                        WHERE user.id = deplacement.user_id AND deplacement.annee =:year';
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':year', $year);
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


}

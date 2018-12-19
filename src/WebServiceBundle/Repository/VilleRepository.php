<?php

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class VilleRepository extends EntityRepository{
    public function nbUserperCity(){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT ville.ville, COUNT(user.nom) nbre_user FROM ville, user where user.ville_id = ville.id GROUP BY ville.ville';
      $stmt=$conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }
}

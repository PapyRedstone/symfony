<?php

/**
 * C'est le répertoire de méthode pour de l'entité VilleJour.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class VilleRepository extends EntityRepository{
    public function nbUserperCity(){
      $conn=$this->getEntityManager()->getConnection();
      $sql='SELECT ville.ville, (SELECT COUNT(user.id) FROM user WHERE user.ville_id = ville.id) AS nbre_user FROM ville';
      $stmt=$conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }
}

<?php

/**
 * C'est le répertoire de méthode pour de l'entité DeplacementJour.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class DeplacementJourRepository extends EntityRepository{
  public function verifyDay($day,$id){
    $conn=$this->getEntityManager()->getConnection();
    $sql='SELECT COUNT(jour) nb_jour FROM deplacement_jour WHERE jour=:day AND deplacement_id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':day', $day);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}

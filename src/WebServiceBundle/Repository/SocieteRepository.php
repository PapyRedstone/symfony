<?php

namespace WebServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Statement;

class SocieteRepository extends EntityRepository{
  public function nbKMperSociety(){
    $conn=$this->getEntityManager()->getConnection();
    $sql='SELECT societe.societe, SUM(deplacement_jour.nb_km) nb_km FROM deplacement_jour, societe, user, deplacement WHERE deplacement_jour.deplacement_id = deplacement.id AND deplacement.user_id = user.id AND user.societe_id = societe.id GROUP BY societe.societe';
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}

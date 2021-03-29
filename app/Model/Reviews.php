<?php

namespace App\Model;

use App\Core\AbstractModel;

/**
 * Class Reviews
 * @package App\Model
 */
class Reviews extends AbstractModel
{
    /**
     * @return false|\PDOStatement
     */
    public function getReviews($id)
    {
        $query = "SELECT r.id,name_author,rating,comment,r.created  FROM `reviews` as r WHERE r.good_id=$id;";
        $result = $this->db->query($query);

        return $result;
    }
}
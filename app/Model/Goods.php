<?php

namespace App\Model;

use App\Core\AbstractModel;

/**
 * Class Goods
 * @package App\Model
 */
class Goods extends AbstractModel
{
    /**
     * @return false|\PDOStatement
     */
    public function getGoods()
    {
        $query = "SELECT * FROM `goods`";

        $result = $this->db->query($query);

        return $result;
    }

    /**
     * This method queries all data from the database and returns them
     * @param $name
     * @param $littleImg
     * @param $price
     * @param $nameAuthorGoods
     * @param $countReviews
     * @return false|int
     */
    public function createGoods($name, $littleImg, $price, $nameAuthorGoods)
    {
        $result = 0;
        $created = date('Y-m-d H:i:s');
        //Rewrite if Don`t remember
        if (true) {
            $query = "INSERT INTO `goods` (`id`, `name`, `little_img`, `price`, `created`, `name_author_goods`) VALUES (NULL, '$name', '$littleImg', '$price', '$created', '$nameAuthorGoods')";
            $result = $this->db->exec($query);
        }

        return $result;
    }

    /**
     * @param $id
     * @return false|\PDOStatement
     */
    public function getGoodsId($id)
    {
        $query = "SELECT * FROM `goods` WHERE `id`= $id";

        $result = $this->db->query($query);

        return $result;
    }

    /**
     * @param $id
     * @return false|\PDOStatement
     */
    public function getRating($id)
    {
        $query = "SELECT CEIL(AVG(r.rating))AS rating_avg, name, little_img  FROM `goods` AS g JOIN `reviews` as r ON g.id=r.good_id WHERE g.id=$id";

        $result = $this->db->query($query);

        return $result;
    }

    /**
     * @param $id
     * @return false|\PDOStatement
     */
    public function editGoods($id)
    {
        $idInt = (int)$id;
        if (true) {
            $validateData = $this->clear($_POST);
            $query = "UPDATE `goods` SET `name`='$validateData[name]', `little_img`='$validateData[little_img]', `price`='$validateData[price]', `name_author_goods`='$validateData[name_author_goods]' WHERE `id`=$idInt";

            $result = $this->db->query($query);
        }
        return $result;
    }

    /**
     * @param $uriSegment
     * @return false|\PDOStatement
     */
    public function deleteGoods($uriSegment)
    {
        $id = $uriSegment;
        $query = "DELETE FROM `goods` WHERE `id`=$id";

        $result = $this->db->exec($query);

        return $result;
    }


    public function newReview($id)
    {
        $idInt = (int)$id;
        if (true) {
            $validateData = $this->clear($_POST);
            $created = date('Y-m-d H:i:s');
            $query = "INSERT INTO `reviews` (`id`, `name_author`, `rating`, `comment`, `created`, `good_id`) VALUES (NULL, '$validateData[name_author]', '$validateData[rating]', '$validateData[comment]', '$created', '$idInt')";
//            $query = "INSERT INTO `reviews` (`id`, `name_author`, `rating`, `comment`, `created`, `good_id`) VALUES (NULL, '$validateData[name_author]', '$validateData[rating]', '$validateData[comment]', NULL, NULL)";
//dd($query);
            $result = $this->db->exec($query);
        }
        return $result;
    }

//    public function newReview($nameAuthor, $rating, $comment, $good_id)
//    {
////        `name`='$validateData[name]', `little_img`='$validateData[little_img]' WHERE `id`=$idInt";
//        $idInt = (int)$good_id;
//        if (true) {
//            $created = date('Y-m-d H:i:s');
//            $validateData = $this->clear($_POST);
//            $query = "INSERT INTO `reviews` (`id`, `name_author`, `rating`, `comment`, `created`, `good_id`) VALUES (NULL, '$nameAuthor', '$rating', '$comment', '$created', '$good_id')";
//
//            $result = $this->db->exec($query);
//        }
//        return $result;
//    }
}

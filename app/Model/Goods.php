<?php

namespace App\Model;

use App\Core\AbstractModel;
use function Couchbase\defaultDecoder;

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
    public function createGoods($name, $littleImg, $price, $nameAuthorGoods, $countReviews)
    {
        $result = 0;
        $created = date('Y-m-d H:i:s');
        //Rewrite if Don`t remember
        if (true) {
            $query = "INSERT INTO `goods` (`id`, `name`, `little_img`, `price`, `created`, `name_author_goods`, `count_reviews`) VALUES (NULL, '$name', '$littleImg', '$price', '$created', '$nameAuthorGoods', '$countReviews')";
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
    public function editGoods($id)
    {
        $idInt = (int)$id;
        if (true) {
            $validateData = $this->clear($_POST);
            $query = "UPDATE `goods` SET `name`='$validateData[name]', `little_img`='$validateData[little_img]', `price`='$validateData[price]', `name_author_goods`='$validateData[name_author_goods]', `count_reviews`='$validateData[count_reviews]' WHERE `id`=$idInt";

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
}

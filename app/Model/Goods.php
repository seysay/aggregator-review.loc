<?php

namespace App\Model;

use App\Core;
use App\Core\AbstractModel;

/**
 * Class Goods
 * @package App\Model
 */
class Goods extends AbstractModel
{
    /** @var integer|null */
    private $id;

    /** @var string|null */
    private $name;

    /** @var string|null */
    private $littleImg;

    /** @var float|null */
    private $price;

    /** @var \DateTime|null */
    private $created;

    /** @var string|null */
    private $nameAuthorGoods;

    /** @var string|null */
    private $countReviews;

    /**
     * This method queries all data from the database and returns them
     * @return PDO statement. Data about students
     */
    public function getGoods()
    {
        $query = "SELECT s.id, s.name, s.age,  GROUP_CONCAT(b.title) books FROM students s LEFT JOIN books b ON s.id =  b.student_id GROUP BY s.id";
        /**
         * @var. PDO statement
         */
        $result = $this->connect->query($query);
        return $result;
    }

    /**
     * This method queries all data from the database and returns them
     * @param $name
     * @param $littleImg
     * @param $price
     * @param $created
     * @param $nameAuthorGoods
     * @param $countReviews
     * @return PDO statement. Data about students
     */
    public function createGoods($name, $littleImg, $price, $created, $nameAuthorGoods, $countReviews)
    {
        $query = "
        INSERT INTO `goods` (`id`, `name`, `little_img`, `price`, `created`, `name_author_goods`, `count_reviews`) 
        VALUES (NULL, $name, $littleImg, $price, $created, $nameAuthorGoods, $countReviews)";
var_dump($this->connect->query($query));
$result = $this->connect->query($query);
        return $result;
    }
}

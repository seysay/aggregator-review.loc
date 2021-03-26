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
//    /** @var integer|null */
//    private $id;
//
//    /** @var string|null */
//    private $name;
//
//    /** @var string|null */
//    private $littleImg;
//
//    /** @var float|null */
//    private $price;
//
//    /** @var \DateTime|null */
//    private $created;
//
//    /** @var string|null */
//    private $nameAuthorGoods;
//
//    /** @var string|null */
//    private $countReviews;
//
//    /** @var \PDO  */
//    public $pdo;

    /**
     * This method queries all data from the database and returns them
     * @return PDO statement. Data about students
     */
    public function getGoods()
    {
        $query = "SELECT
                      s.id, s.name, s.age, 
                      GROUP_CONCAT(b.title) books
                  FROM 
                      students s 
                  LEFT JOIN 
                      books b 
                  ON 
                      s.id =  b.student_id
                  GROUP BY s.id";
        /**
         * @var. PDO statement
         */
        $result = $this->connect->query($query);
        return $result;
    }

//    /**
//     * Goods constructor.
//     * @param $data
//     */
//    public function __construct($data = [])
//    {
//        $this->id = isset($data['id']) ? $data['id'] : null;
//        $this->name = isset ($data['name']) ? $data['name'] : '';
//        $this->littleImg = isset ($data['little_img']) ? $data['little_img'] : '';
//        $this->price = isset ($data['price']) ? $data['price'] : '';
//        $this->created = isset ($data['created']) ? $data['created'] : '';
//        $this->nameAuthorGoods = isset ($data['name_author_goods']) ? $data['name_author_goods'] : '';
//        $this->countReviews = isset ($data['count_reviews']) ? $data['count_reviews'] : '';
//
//        $this->pdo = (new Core\db())->getPdo();
//    }

//    /**
//     * @return int|null
//     */
//    public function getId(): ?int
//    {
//        return $this->id;
//    }
//
//    /**
//     * @param int|null $id
//     * @return Goods
//     */
//    public function setId(?int $id): Goods
//    {
//        $this->id = $id;
//
//        return $this;
//    }
//
//    /**
//     * @return string|null
//     */
//    public function getName(): ?string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param string|null $name
//     * @return Goods
//     */
//    public function setName(?string $name): Goods
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    /**
//     * @return string|null
//     */
//    public function getLittleImg(): ?string
//    {
//        return $this->littleImg;
//    }
//
//    /**
//     * @param string|null $littleImg
//     * @return Goods
//     */
//    public function setLittleImg(?string $littleImg): Goods
//    {
//        $this->littleImg = $littleImg;
//
//        return $this;
//    }
//
//    /**
//     * @return float|null
//     */
//    public function getPrice(): ?float
//    {
//        return $this->price;
//    }
//
//    /**
//     * @param float|null $price
//     * @return Goods
//     */
//    public function setPrice(?float $price): Goods
//    {
//        $this->price = $price;
//
//        return $this;
//    }
//
//    /**
//     * @return \DateTime|null
//     */
//    public function getCreated(): ?\DateTime
//    {
//        return $this->created;
//    }
//
//    /**
//     * @param \DateTime|null $created
//     * @return Goods
//     */
//    public function setCreated(?\DateTime $created): Goods
//    {
//        $this->created = $created;
//
//        return $this;
//    }
//
//    /**
//     * @return string|null
//     */
//    public function getNameAuthorGoods(): ?string
//    {
//        return $this->nameAuthorGoods;
//    }
//
//    /**
//     * @param string|null $nameAuthorGoods
//     * @return Goods
//     */
//    public function setNameAuthorGoods(?string $nameAuthorGoods): Goods
//    {
//        $this->nameAuthorGoods = $nameAuthorGoods;
//
//        return $this;
//    }
//
//    /**
//     * @return string|null
//     */
//    public function getCountReviews(): ?string
//    {
//        return $this->countReviews;
//    }
//
//    /**
//     * @param string|null $countReviews
//     * @return Goods
//     */
//    public function setCountReviews(?string $countReviews): Goods
//    {
//        $this->countReviews = $countReviews;
//
//        return $this;
//    }
//
//    /**
//     * @param $id
//     * @return $this
//     */
//    public function load($id)
//    {
//        $sql = 'SELECT * FROM people WHERE id=?';
//        $statement = $this->pdo->prepare($sql);
//        $statement->bindParam(1, $id);
//
//        $statement->execute();
//        $data = $statement->fetch(\PDO::FETCH_ASSOC);
//
//        $student = new Goods();
//        $this->setData($data);
//
//
//        return $this;
//    }
//
//    /**
//     * return Goods|Array
//     */
//    public function getAll()
//    {
//        $studentsCollection = [];
//
//        $sql = 'SELECT * FROM people';
//        $config = new Goods();
//        $statement = $this->pdo->prepare($sql);
//        $statement->execute();
//        $studentsData = $statement->fetchAll(\PDO::FETCH_ASSOC);
//
//        foreach ($studentsData as $data) {
//            $student = new Goods();
//            $student->setData($data);
//
//            $studentsCollection[] = $student;
//        }
//
//        return $studentsCollection;
//    }
//
//    public function save()
//    {
//        if (is_null($this->id)) {
//            $sql = 'INSERT INTO people(name,surname,age,sex,`group`,faculty)
//                VALUES(:name, :surname, :age, :sex, :group, :faculty)';
//
//            $statement = $this->pdo->prepare($sql);
//
//            $statement->execute([
//                ':name' => $this->name,
//                ':surname' => $this->surname,
//                ':age' => $this->age,
//                ':sex' => $this->sex,
//                ':group' => $this->group,
//                ':faculty' => $this->faculty]);
//
//        } else {
//            $sql = 'UPDATE people SET name=:name, surname=:surname, age=:age, sex=:sex,
//                `group`=:group, faculty=:faculty
//                WHERE id=:id';
//
//            $statement = $this->pdo->prepare($sql);
//
//            $statement->execute([
//                ':name' => $this->name,
//                ':surname' => $this->surname,
//                ':age' => $this->age,
//                ':sex' => $this->sex,
//                ':group' => $this->group,
//                ':faculty' => $this->faculty,
//                ':id' => $this->id
//            ]);
//        }
//    }
//    /**
//     * @param $id
//     */
//
//    public function delete()
//    {
//        $sql = 'DELETE FROM people WHERE id=:id';
//        $statement = $this->pdo->prepare($sql);
//
//        if ($statement->execute([
//            ':id' => $this->id])) {
//        }
//    }
//
//    /**
//     * @param $data
//     */
//    public function setData($data): void
//    {
//        foreach ($data as $key => $value) {
//            $this->$key = $value;
//        }
//    }
}

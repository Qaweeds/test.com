<?php

abstract class Model
{
    public $pdo;

    public static function tableName() {
        $tableName = strtolower(static::class);
        return $tableName;
    }

    public function arrayUpdate($property, $property2) {
        $array=[];
        for($i=0; $i<count($property2); $i++) {
            $array[$i]=$property[$i].'='.$property2[$i];
        }
        return $array;
    }

    public function __construct()
    {
        $this->pdo =require_once __DIR__.'config/db.php';
    }

    public static function find()
    {
        $sql = 'SELECT * FROM ' . static::tableName() . ' WHERE id = :id';
        return $sql;
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::tableName() . ' WHERE id = :id;';
        return $sql;
    }

    public function create()
    {
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'INSERT INTO' . static::tableName() . ' (' . implode(', ', $property) . ') VALUES (' . implode(',', $property2) . ');';
        return $sql;
    }

    public function update()
    {
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'UPDATE ' . static::tableName() . ' SET ' .implode(', ', static::arrayUpdate($property, $property2)). ' WHERE id = :id';
        return $sql;
    }

    public function save() {
        $find=static::find();
        $pdo=self::$pdo;
        $request=$pdo->prepare($find);
        $request->execute();
        $result=$request->fetchAll();
         if (empty($result)) {
             static::create();
         } static::update();
    }
}

final class User extends Model
{
    public $id;
    public $name;
    public $email;
}
echo '<pre>';
$user = User::find(1);
var_dump($user); // SELECT * FROM user WHERE id = :id

$user = new User();
$user->id = 1;
$user->name = 'John';
$result = $user->save();
//var_dump($result); // UPDATE user SET name = :name, email = 'email' WHERE id = :id

$result = $user->delete();
var_dump($result); // DELETE FROM user WHERE id = :id

$user = new User;
$user->name = 'John';
$user->email = 'some@gmail.com';
//$result = $user->save();
var_dump($result); // INSERT INTO user (id, name, email) VALUES (:id, :name, :email)
echo '</pre>';
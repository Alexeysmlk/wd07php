<?php


namespace App\Core;


class BaseModel
{
    public static $table = null;

    public static function findById($id) {
        $connection = DB::getConnection();
        $tableName = static::getTableName();
        $sql = "SELECT * FROM $tableName WHERE id = :id;";
        $stmt = $connection->prepare($sql);
        $stmt->execute(['id'=>$id]);
        if ($stmt->rowCount()) {
            return $stmt->fetchObject(static::class);
        }
        return null;
    }

    public static function all(){
        $connection = DB::getConnection();
        $tableName = static::getTableName();
        $sql = "SELECT * FROM $tableName;";
        $stmt = $connection->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, static::class);
    }

    public static function getTableName(){
        if (static::$table !== null){
            return static::$table;
        }
        $className = static::class;
        $className = explode('\\', $className);
        $className = array_pop($className);
        $className .= 's';
        return strtolower($className);
    }
}
<?php

class Model
{
    protected static $tableName = 'Model';

    public static function getTableName()
    {
        return static::$tableName;
    }
}

class User extends Model
{
    protected static $tableName = 'User';
}

echo Model::getTableName() . PHP_EOL;
echo User::getTableName();
<?php

namespace Models;

abstract class Model {
    protected static $db;

    // Método para establecer la conexión
    public static function setConnection($database) {
        static::$db = $database;
    }

    // Método genérico para obtener todos los registros
    public static function getAll($table) {
        $stmt = static::$db->query("SELECT * FROM $table");
        return $stmt->fetchAll();
    }

    // Método genérico para obtener un registro por ID
    public static function getById($table, $id) {
        $stmt = static::$db->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // Método para crear un nuevo registro
    public static function create($table, $data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_map(fn($key) => ":$key", array_keys($data)));
        $stmt = static::$db->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
        return $stmt->execute($data);
    }

    // Método para actualizar un registro por ID
    public static function update($table, $id, $data) {
        $setClause = implode(', ', array_map(fn($key) => "$key = :$key", array_keys($data)));
        $stmt = static::$db->prepare("UPDATE $table SET $setClause WHERE id = :id");
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    // Método para eliminar un registro por ID
    public static function delete($table, $id) {
        $stmt = static::$db->prepare("DELETE FROM $table WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
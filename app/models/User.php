<?php

namespace Models;

class User extends Model {
    private $table = 'users';

    // Método para obtener todos los usuarios (hereda de Model)
    public function getAllUsers() {
        return self::getAll($this->table);
    }

    // Método para obtener un usuario por ID (hereda de Model)
    public function getUserById($id) {
        return self::getById($this->table, $id);
    }

    // Método para crear un usuario (hereda de Model)
    public function createUser($name, $email, $password) {
        return self::create($this->table, [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    // Método para actualizar un usuario
    public function updateUser($id, $name, $email, $password) {
        return self::update($this->table, $id, [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    // Método para eliminar un usuario
    public function deleteUser($id) {
        return self::delete($this->table, $id);
    }
}
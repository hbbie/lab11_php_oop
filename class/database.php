<?php

class Database
{
    protected $host;
    protected $user;
    protected $pass;
    protected $db_name;
    protected $conn;

    public function __construct()
    {
        include "config.php";
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->pass = $config['password'];
        $this->db_name = $config['db_name'];

        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function insert($table, $data)
    {
        $cols = implode(",", array_keys($data));
        $vals = "'" . implode("','", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($cols) VALUES ($vals)";
        return $this->conn->query($sql);
    }

    public function update($table, $data, $where)
    {
        $set = [];
        foreach ($data as $key => $val) {
            $set[] = "$key = '$val'";
        }
        $sql = "UPDATE $table SET " . implode(",", $set) . " WHERE $where";
        return $this->conn->query($sql);
    }
}

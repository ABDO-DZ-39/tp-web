<?php
class BmiModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function saveBmiRecord($name, $weight, $height, $bmi, $status) {
        session_start(); 
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; 
        if ($user_id === null) {
            throw new Exception("User is not logged in.");
        }
        
        $stmt = $this->db->prepare("SELECT id FROM users WHERE id = ?");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch();

        if (!$user) {
            throw new Exception("User not found.");
        }

        $stmt = $this->db->prepare("INSERT INTO bmi_records (user_id, name, weight, height, bmi, status) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $name, $weight, $height, $bmi, $status]);
    }

    public function getBmiHistory() {
        session_start();
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        
        if ($user_id === null) {
            throw new Exception("User is not logged in.");
        }

        $stmt = $this->db->prepare("SELECT * FROM bmi_records WHERE user_id = ? ORDER BY timestamp DESC");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

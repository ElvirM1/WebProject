<?php
class DeleteUserC {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function deleteUserByEmail($email) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM signform WHERE email = ?");
            $stmt->execute([$email]);
            return true;
        } catch (PDOException $e) {
            echo "Error deleting user: " . $e->getMessage();
            return false;
        }
    }
}
?>

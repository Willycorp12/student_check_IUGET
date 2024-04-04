<?php

require_once './includes/dbcon.php'; // Include the database connection file

class Retrieving {
    // Method to retrieve all student records
    public function getAllStudents() {
        global $conn;

        try {
            // Prepare SQL statement for retrieving all student records
            $sql = "SELECT * FROM student";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all rows as associative array
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $students;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Method to retrieve all coordinator records
    public function getAllCoordinators() {
        global $conn;

        try {
            // Prepare SQL statement for retrieving all coordinator records
            $sql = "SELECT * FROM users WHERE type = 'Coordinator'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all rows as associative array
            $coordinators = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $coordinators;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Method to retrieve all security agent records
    public function getAllSecurityAgents() {
        global $conn;

        try {
            // Prepare SQL statement for retrieving all security agent records
            $sql = "SELECT * FROM users WHERE type = 'SA'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all rows as associative array
            $securityAgents = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $securityAgents;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Method to retrieve all school records
    public function getAllSchools() {
        global $conn;

        try {
            // Prepare SQL statement for retrieving all school records
            $sql = "SELECT * FROM school";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all rows as associative array
            $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $schools;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Method to retrieve all campus records
    public function getAllCampuses() {
        global $conn;

        try {
            // Prepare SQL statement for retrieving all campus records
            $sql = "SELECT * FROM campus";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all rows as associative array
            $campuses = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $campuses;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}

?>

<?php

require_once './includes/dbcon.php'; // Include the database connection file

class Deleting {
    // Method to delete student record
    public function deleteStudent($studentId) {
        global $conn;

        try {
            // Prepare SQL statement for deleting student record
            $sql = "DELETE FROM student WHERE stud_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$studentId]);

            echo "Student record deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to delete coordinator record
    public function deleteCoordinator($coordinatorId) {
        global $conn;

        try {
            // Prepare SQL statement for deleting coordinator record
            $sql = "DELETE FROM users WHERE user_id = ? AND type = 'Coordinator'";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$coordinatorId]);

            echo "Coordinator record deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to delete security agent record
    public function deleteSecurityAgent($securityAgentId) {
        global $conn;

        try {
            // Prepare SQL statement for deleting security agent record
            $sql = "DELETE FROM users WHERE user_id = ? AND type = 'SA'";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$securityAgentId]);

            echo "Security agent record deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to delete school record
    public function deleteSchool($schoolId) {
        global $conn;

        try {
            // Prepare SQL statement for deleting school record
            $sql = "DELETE FROM school WHERE school_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$schoolId]);

            echo "School record deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to delete campus record
    public function deleteCampus($campusId) {
        global $conn;

        try {
            // Prepare SQL statement for deleting campus record
            $sql = "DELETE FROM campus WHERE campus_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$campusId]);

            echo "Campus record deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>

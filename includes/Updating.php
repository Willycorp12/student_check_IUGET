<?php

require_once 'dbcon.php'; // Include the database connection file

class Updating {
    // Common attributes for all entities
    private $name;
    private $email;
    private $phone;
    private $address;

    // Attributes specific to students
    private $dateOfBirth;
    private $gender;
    private $medicalStatus;
    private $photo;
    private $field;
    private $specialty;
    private $session;
    private $level;
    private $matricule;
    private $currentYear;
    private $registrationDate;
    private $scholarshipStatus;
    private $amountPaid;
    private $balance;
    private $schoolId;
    private $campusId;

    // Attributes specific to coordinators
    private $department;

    // Attributes specific to security agents
    private $type; // 'SA' for security agents

    // Constructor
    public function __construct($name, $email, $phone, $address, $type = null, $dateOfBirth = null, $gender = null, $medicalStatus = null, $photo = null, $field = null, $specialty = null, $session = null, $level = null, $matricule = null, $currentYear = null, $registrationDate = null, $scholarshipStatus = null, $amountPaid = null, $balance = null, $schoolId = null, $campusId = null, $department = null) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;

        // Assign student-specific attributes
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->medicalStatus = $medicalStatus;
        $this->photo = $photo;
        $this->field = $field;
        $this->specialty = $specialty;
        $this->session = $session;
        $this->level = $level;
        $this->matricule = $matricule;
        $this->currentYear = $currentYear;
        $this->registrationDate = $registrationDate;
        $this->scholarshipStatus = $scholarshipStatus;
        $this->amountPaid = $amountPaid;
        $this->balance = $balance;
        $this->schoolId = $schoolId;
        $this->campusId = $campusId;

        // Assign coordinator-specific attribute
        $this->department = $department;

        // Assign security agent-specific attribute
        $this->type = $type;
    }

    // Method to update student record
    public function updateStudent($studentId, $attributesToUpdate) {
        global $conn;

        try {
            // Prepare SQL statement for updating student record
            $sql = "UPDATE student SET ";

            // Construct SET clause for updating attributes
            $setClause = [];
            foreach ($attributesToUpdate as $attribute => $value) {
                $setClause[] = "$attribute = ?";
            }
            $sql .= implode(", ", $setClause);

            // Add WHERE condition for the student ID
            $sql .= " WHERE stud_id = ?";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $values = array_values($attributesToUpdate);
            $values[] = $studentId;
            $stmt->execute($values);

            echo "Student record updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to update coordinator record
    public function updateCoordinator($coordinatorId, $attributesToUpdate) {
        global $conn;

        try {
            // Prepare SQL statement for updating coordinator record
            $sql = "UPDATE users SET ";

            // Construct SET clause for updating attributes
            $setClause = [];
            foreach ($attributesToUpdate as $attribute => $value) {
                $setClause[] = "$attribute = ?";
            }
            $sql .= implode(", ", $setClause);

            // Add WHERE condition for the coordinator ID
            $sql .= " WHERE user_id = ? AND type = 'Coordinator'";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $values = array_values($attributesToUpdate);
            $values[] = $coordinatorId;
            $stmt->execute($values);

            echo "Coordinator record updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to update security agent record
    public function updateSecurityAgent($securityAgentId, $attributesToUpdate) {
        global $conn;

        try {
            // Prepare SQL statement for updating security agent record
            $sql = "UPDATE users SET ";

            // Construct SET clause for updating attributes
            $setClause = [];
            foreach ($attributesToUpdate as $attribute => $value) {
                $setClause[] = "$attribute = ?";
            }
            $sql .= implode(", ", $setClause);

            // Add WHERE condition for the security agent ID
            $sql .= " WHERE user_id = ? AND type = 'SA'";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $values = array_values($attributesToUpdate);
            $values[] = $securityAgentId;
            $stmt->execute($values);

            echo "Security agent record updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to update school record
    public function updateSchool($schoolId, $attributesToUpdate) {
        global $conn;

        try {
            // Prepare SQL statement for updating school record
            $sql = "UPDATE school SET ";

            // Construct SET clause for updating attributes
            $setClause = [];
            foreach ($attributesToUpdate as $attribute => $value) {
                $setClause[] = "$attribute = ?";
            }
            $sql .= implode(", ", $setClause);

            // Add WHERE condition for the school ID
            $sql .= " WHERE school_id = ?";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $values = array_values($attributesToUpdate);
            $values[] = $schoolId;
            $stmt->execute($values);

            echo "School record updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to update campus record
    public function updateCampus($campusId, $attributesToUpdate) {
        global $conn;

        try {
            // Prepare SQL statement for updating campus record
            $sql = "UPDATE campus SET ";

            // Construct SET clause for updating attributes
            $setClause = [];
            foreach ($attributesToUpdate as $attribute => $value) {
                $setClause[] = "$attribute = ?";
            }
            $sql .= implode(", ", $setClause);

            // Add WHERE condition for the campus ID
            $sql .= " WHERE campus_id = ?";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $values = array_values($attributesToUpdate);
            $values[] = $campusId;
            $stmt->execute($values);

            echo "Campus record updated successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>
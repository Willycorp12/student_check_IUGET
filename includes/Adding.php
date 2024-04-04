<?php

require_once 'dbcon.php'; // Include the database connection file
class Adding
{
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

    // Constructor to initialize the object with attributes
    public function __construct($name, $email, $phone, $address, $type = null, $dateOfBirth = null, $gender = null, $medicalStatus = null, $photo = null, $currentYear = null, $registrationDate = null, $scholarshipStatus = null, $amountPaid = null, $balance = null, $schoolId = null, $campusId = null, $department = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;

        // Assign student-specific attributes
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->medicalStatus = $medicalStatus;
        $this->photo = $photo;
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

    // Method to add a student
    public function addStudent()
    {
        global $conn; // Access the global PDO connection object

        try {
            // Prepare SQL statement for insertion
            $sql = "INSERT INTO student (name, dateOfBirth, gender, email, medicalStatus, photo, address, current_yr, registration_date, scholarship_status, amount_paid, balance, phone, school_id, campus_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $stmt->execute([$this->name, $this->dateOfBirth, $this->gender, $this->email, $this->medicalStatus, $this->photo, $this->address, $this->currentYear, $this->registrationDate, $this->scholarshipStatus, $this->amountPaid, $this->balance, $this->phone, $this->schoolId, $this->campusId]);

            echo "Student added successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to add a coordinator
    public function addCoordinator()
    {
        global $conn; // Access the global PDO connection object

        try {
            // Prepare SQL statement for insertion
            $sql = "INSERT INTO users (name, email, phone, address, department, type) VALUES (?, ?, ?, ?, ?, 'Coordinator')";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $stmt->execute([$this->name, $this->email, $this->phone, $this->address, $this->department]);

            echo "Coordinator added successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to add a security agent
    public function addSecurityAgent()
    {
        global $conn; // Access the global PDO connection object

        try {
            // Prepare SQL statement for insertion
            $sql = "INSERT INTO users (name, email, phone, address, type) VALUES (?, ?, ?, ?, 'SA')";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $stmt->execute([$this->name, $this->email, $this->phone, $this->address]);

            echo "Security agent added successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method to add a school
    public function addSchool()
    {
        global $conn; // Access the global PDO connection object

        try {
            // Prepare SQL statement for insertion
            $sql = "INSERT INTO school (name, director_name) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind parameters and execute the statement
            $stmt->execute([$this->name, $this->department]);

            echo "School added successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

}
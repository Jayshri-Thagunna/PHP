<?php
// Base Class
class User {
    public $name;
    protected $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getProfile() {
        return "User: {$this->name} | Email: {$this->email}";
    }
}

// Subclass (Inheritance)
class Admin extends User {
    public $role;

    public function __construct($name, $email, $role) {
        // Parent constructor ko call karna
        parent::__construct($name, $email);
        $this->role = $role;
    }

    public function getAdminDetails() {
        return $this->getProfile() . " | Role: {$this->role} (Has Delete Access)";
    }
}

// Demonstration
$myUser = new User("Jayshri", "jayshri@example.com");
echo $myUser->getProfile() . "<br>";

$myAdmin = new Admin("System_Boss", "admin@web.com", "SuperAdmin");
echo $myAdmin->getAdminDetails();
?>
<?php

class PageController {

  public function getShowHomePage() {
    include(__DIR__ . "/../views/home.php");
  }

  public function getShowRegisterPage() {
    include(__DIR__ . "/../views/register.php");
  }

  public function postShowRegisterPage() {
    // Validate DOMCdataSection

    // If validation fails - go back to register and display error.

    // Save into database
    echo "Posted!";
  }


  public function getShowLoginPage() {
    include(__DIR__ . "/../views/login.php");
  }

  public function getTestDB() {
    try {
      $conn = new PDO("pgsql:host=localhost dbname=test", "postgres", "secret");
    } catch (PDOException $pe) {
      die("Connection error: " . $pe->getMessage());
    }

    $first_name = "";

    $sql = "
      SELECT * FROM users WHERE id = 1
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
      $first_name = $row['first_name'];
    }
    echo "It works! First Name is " . $first_name;
  }

}

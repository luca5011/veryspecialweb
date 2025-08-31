<?php
$host = "localhost";   // DB 서버
$user = "root";        // DB 사용자
$pw   = "";            // DB 비밀번호
$db   = "testdb";      // DB 이름

$conn = new mysqli($host, $user, $pw, $db);

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
?>

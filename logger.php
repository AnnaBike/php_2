<?php
interface LoggerInterface {
    public function log(string $message): void;
}
abstract class AbstractLogger {
    protected $pdo;

    public function __construct($dsn, $username, $password) {
        $this->pdo = new PDO($dsn, $username, $password);
    }

    protected function writeToDatabase(string $message): void {
        $stmt = $this->pdo->prepare("INSERT INTO logs (message, created_at) VALUES (:message, NOW())");
        $stmt->execute([':message' => $message]);
    }
}
class DatabaseLogger extends AbstractLogger implements LoggerInterface {
    public function log(string $message): void {
        $this->writeToDatabase($message);
    }
}

// Настройка подключения к базе данных
$dsn = 'mysql:host=localhost;dbname=your_database;charset=utf8';
$username = 'your_username';
$password = 'your_password';
$logger = new DatabaseLogger($dsn, $username, $password);
$logger->log('Это тестовое сообщение для логирования.');
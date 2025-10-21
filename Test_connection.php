<?php
require_once __DIR__ . '/config/database.php';

try {
    $stmt = $pdo->query("SHOW TABLES");
    echo "<h3>✅ Database connection successful!</h3>";
    echo "<p>Tables in <b>atleticx</b>:</p><ul>";
    while ($row = $stmt->fetch()) {
        echo "<li>" . implode('', $row) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>

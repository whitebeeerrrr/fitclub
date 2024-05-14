<?php
// Инициируем сессию
session_start();

// Уничтожаем все данные сессии
session_destroy();

// Перенаправляем пользователя на страницу входа (например, index.html)
header("Location: index.html");
exit;
?>

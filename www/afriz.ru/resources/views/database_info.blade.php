<!-- resources/views/database_info/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Info Page</title>
</head>
<body>
    <h1>Информация о подключении к базе данных</h1>

    <ul>
    <li>Имя базы данных: {{ $databaseInfo['database_name'] ?? 'N/A' }}</li>
<li>Хост базы данных: {{ $databaseInfo['database_host'] ?? 'N/A' }}</li>
<li>Порт базы данных: {{ $databaseInfo['database_port'] ?? 'N/A' }}</li>
<li>Пользователь базы данных: {{ $databaseInfo['database_user'] ?? 'N/A' }}</li>
<li>Пароль базы данных: {{ $databaseInfo['database_password'] ?? 'N/A' }}</li>
<li>Символы кодировки: {{ $databaseInfo['charset'] ?? 'N/A' }}</li>
<li>Коллация: {{ $databaseInfo['collation'] ?? 'N/A' }}</li>
<li>Префикс таблиц: {{ $databaseInfo['prefix'] ?? 'N/A' }}</li>
<li>Временная зона: {{ $databaseInfo['timezone'] ?? 'N/A' }}</li>
<li>Драйвер базы данных: {{ $databaseInfo['driver'] ?? 'N/A' }}</li>
<li>Версия сервера MySQL: {{ $databaseInfo['server_version'] ?? 'N/A' }}</li>


    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bảng Điều Khiển - Hệ Thống Quản Lý Vật Liệu</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
    }

    header {
        width: 100%;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
    }

    header nav ul {
        list-style: none;
        padding: 0;
    }

    header nav ul li {
        display: inline;
        margin: 0 1rem;
    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .dashboard-section {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .dashboard-section h2 {
        margin-bottom: 1rem;
    }

    .card-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        background-color: #f9f9f9;
        padding: 1rem;
        margin: 1rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 200px;
        text-decoration: none;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .card:hover {
        background-color: #e9e9e9;
    }

    .card h3 {
        margin-bottom: 0.5rem;
    }
    </style>
</head>

<body>
    <header>
        <h1>Hệ Thống Quản Lý Vật Liệu</h1>
        <nav>
            <ul>
                <li><a href="#">Quản Lí Vật Liệu</a></li>
                <li><a href="#">Nhập và Xuất Kho</a></li>
                <li><a href="logout.php">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>
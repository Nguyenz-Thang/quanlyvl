<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị Viên - Hệ Thống Quản Lý Vật Liệu</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
    <header>
        <h1>Hệ Thống Quản Lý Vật Liệu - Quản Trị Viên</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Bảng Điều Khiển</a></li>
                <li><a href="admin.php">Quản Lý Tài Khoản</a></li>
                <li><a href="logout.php">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="admin-section">
            <h2>Tạo Tài Khoản Người Dùng</h2>
            <form action="create_account.php" method="POST">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit">Tạo Tài Khoản</button>
            </form>
        </section>
        <section class="admin-section">
            <h2>Danh Sách Tài Khoản</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tên Đăng Nhập</th>
                        <th>Email</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $sql = "SELECT username, email FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['username']}</td>
                                    <td>{$row['email']}</td>
                                    <td><button onclick=\"deleteUser('{$row['username']}')\">Xóa</button></td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Không có tài khoản nào</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <script>
    function deleteUser(username) {
        if (confirm("Bạn có chắc chắn muốn xóa tài khoản này?")) {
            window.location.href = "delete_user.php?username=" + username;
        }
    }
    </script>
</body>

</html>
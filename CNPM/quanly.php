<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Vật Liệu</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Quản Lý Vật Liệu</h1>
    </header>
    <main>
        <section class="material-section">
            <h2>Danh Sách Vật Liệu</h2>
            <!-- Danh sách vật liệu sẽ được hiển thị ở đây -->
        </section>
        <section class="actions-section">
            <h2>Thao Tác</h2>
            <button id="btn-add">Thêm Vật Liệu</button>
            <button id="btn-edit">Sửa Vật Liệu</button>
            <button id="btn-delete">Xóa Vật Liệu</button>
            <input type="text" id="search" placeholder="Tìm Kiếm...">
        </section>
    </main>
    <footer>
        <!-- Footer -->
    </footer>
    <script src="script.js"></script>
    <?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "quan_ly_vat_lieu"; // Tên cơ sở dữ liệu bạn đã tạo

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Hàm lấy danh sách vật liệu
function getMaterials() {
    global $conn;
    $sql = "SELECT * FROM materials";
    $result = $conn->query($sql);
    $materials = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $materials[] = $row;
        }
    }
    return $materials;
}

// Hàm thêm vật liệu mới
function addMaterial($name, $quantity, $price) {
    global $conn;
    $sql = "INSERT INTO materials (name, quantity, price) VALUES ('$name', $quantity, $price)";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Hàm sửa thông tin vật liệu
function editMaterial($id, $name, $quantity, $price) {
    global $conn;
    $sql = "UPDATE materials SET name='$name', quantity=$quantity, price=$price WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Hàm xóa vật liệu
function deleteMaterial($id) {
    global $conn;
    $sql = "DELETE FROM materials WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>

</body>

</html>
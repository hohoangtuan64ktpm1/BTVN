<form action="add.php" method = "post" enctype="multipart/form-data">
    Tên sản phẩm: <input type="text" name="name"><br>
    Giá: <input type="text" name="price"><br>
    <button id="submit" name="btn-add">Thêm sản phẩm</button>
</form>

<?php 
    include "connect.php";
    if (isset($_POST['btn-add'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $query = "INSERT INTO Product (Name, Price) VALUES ('$name', '$price')";
        mysqLi_query($conn, $query);
    }
    header('location: index.php');
?>
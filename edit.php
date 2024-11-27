<?php 
    include "connect.php";
    $id = $_GET['this_ID'];
    $sql = "select * from Product where ID = " . $id;
    $query = mysqLi_query($conn, $sql);
    $result = mysqLi_fetch_assoc($query);
?>

<?php 
    if (isset($_POST['btn-edit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sql = "update Product set Name = '$name', Price = '$price' where ID = '$id'";
        mysqLi_query($conn, $sql);
        header("location: index.php");
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    Tên sản phẩm: <input type="text" name = "name" value="<?php echo $result['Name'] ?>"> <br>
    Giá: <input type="text" name = "price" value="<?php echo $result['Price'] ?>"> <br>
    <button name="btn-edit">Edit</button>
</form>
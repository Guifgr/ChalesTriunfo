<?php
$sql = "SELECT `name`, `price`, `shortinformation`, `information` FROM `product` WHERE id = 1";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name1 = $row['name'];
        $price1 = $row['price'];
        $shortinformation1 = $row['shortinformation'];
        $information1 = $row['information'];
    }
}

$sql = "SELECT `name`, `price`, `shortinformation`, `information` FROM `product` WHERE id = 2";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name2 = $row['name'];
        $price2 = $row['price'];
        $shortinformation2 = $row['shortinformation'];
        $information2 = $row['information'];
    }
}

$sql = "SELECT `name`, `price`, `shortinformation`, `information` FROM `product` WHERE id = 3";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name3 = $row['name'];
        $price3 = $row['price'];
        $shortinformation3 = $row['shortinformation'];
        $information3 = $row['information'];
    }
}
$sql = "SELECT `name`, `price`, `shortinformation`, `information` FROM `product` WHERE id = 4";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name4 = $row['name'];
        $price4 = $row['price'];
        $shortinformation4 = $row['shortinformation'];
        $information4 = $row['information'];
    }
}
?>
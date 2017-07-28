<?php
    $mysqli = new mysqli('localhost', 'root', '123', 'test');

    // 创建查询及相应的占位符
    $query = "insert into products1 set sku=?, name=?, price=?";

    // Create Statement Object
    $stmt = $mysqli->stmt_init();

    // 为执行准备语句
    $stmt->prepare($query);

    // 绑定参数
    $stmt->bind_param('ssd', $sku, $name, $price);

    // 分配提交的数组
    $skuarray = $_POST['sku'];
    $namearray = $_POST['name'];
    $pricearray = $_POST['price'];

    var_dump($skuarray);
    exit();

    // 初始化计数器
    $x = 0;

    // 循环处理数组， 迭代执行查询
    while ($x < sizeof($skuarray)) {
        $sku = $skuarray;
        $name = $namearray;
        $price = $pricearray;

        $stmt->execute();
    }

    // 恢复语句资源
    $stmt->close();

    // 关闭连接
    $mysqli->close();

?>

<?php
    $mysqli = new mysqli('localhost', 'root', '123', 'test');

    $query = "select sku, name, price from products order by name";

    // 查询数据库
    // result->num_rows 只确定select查询所影响的行数时有用 
    // result->affected_rows  insert update delete所影响的行数时有效
    $result = $mysqli->query($query);

    // 这里也可以使用fetch_array('如下选项')  :  $row['index']获取值
    // MYSQLI_ASSOC 关联数组返回
    // MYSQLI_NUM   数字索引数组返回
    // MYSQLI_BOTH  同时作为关联数组和数字索引数组返回
    while ($row = $result->fetch_object())
    {
        $name = $row->name;
        $sku = $row->sku;
        $price = $row->price;
        printf("(%s) %s: \$%s <br />", $sku, $name, $price);
    }

/*
    // 迭代处理结果集
    $result = $mysqli->query($query, MYSQLI_STORE_RESULT);
    while(list($sku, $name, $price) = $result->fetch_row())
        printf("(%s) %s: \$%s <br />", $sku, $name, $price);

    $result->free();
*/

/*
   // 删除
   $query = "delete from products where sku = 'TY232278'";
   $result = $mysqli->query($query, MYSQLI_STORE_RESULT); 
   printf("$%d rows have been deleted.", $mysqli->affected_rows);
*/

?>

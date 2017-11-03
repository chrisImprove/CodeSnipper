### Mysqli PHP7使用方法

##### 一、连接数据库
```php
$mysqli  = mysqli_connect('localhost', 'root', '123456', 'sscdf');
if (mysqli_connect_errno()){
    printf("Connect failed:%s\n", mysqli_connect_error());
    exit();
}
```

##### 二、选择数据库
```php
$mysqli_select_db('sscdf');
```

##### 三、查询
```php
$sql = 'select * from ssc_3dopen order by id desc limit 20';
if ($result = mysqli_query($mysqli, $sql)){
    while( $row = mysqli_fetch_array($result) ){
        echo $row['id'] .'--';
    }
    // 释放查询结构集
    mysqli_free_result($result);
}
```
##### 四、插入
```php
$sql1 = "insert into ssc_3dopen(round, game_code, endtime, roundtime, total, passed )values('20171016-084', '45', '1508166747','1508166747', 10, 0 )";
$sql = "insert into ssc_3dopen set round = '20171016-085',
  game_code='45',endtime='1508166747',roundtime='1508166747',total=10, passed=0";

$res = mysqli_query($mysqli, $sql);
```
##### 五、清空数据库表
```sql
truncate table wp_comments;
delete * from wp_comments;
```
1. truncate是整体删除(速度较快), delete是逐条删除(速度较慢)  
2. truncate不写服务器log, delete写服务器log, 也就是truncate效率比delete高的原因.  
3. truncate不激活trigger(触发器)，但是会重置Identity(标识列、自增字段),  
   相当于自增列会被置为初始值，又重新从1开始记录，而不是接着原来的ID数.  
   而delete删除以后，Identity依旧是接着被删除的最近的那一条记录ID加1后进行记录。
##### 五、断开连接
```php
mysqli_close($mysqli);
```





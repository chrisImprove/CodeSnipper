### Mysql 命令行操作

##### 分配权限
```sql
grant all privileges on sscdf.* to 'david'@'%' identified by 'david@invech'
flush privileges;
```
##### 收回权限
```sql
revoke all privileges on sscaa.* from 'ssc_dafeng2017'@'%';
flush privileges;
```
##### 数据备份
```sql
mysqldump -hXXX.XXX.XXX.XXX -utest -p app > app.sql
```
##### 建表
```sql
create table ssc_customer_service(
id int primary key auto_increment comment '主键',
url varchar(100) comment '客服地址链接',
status tinyint(1) default 0 comment '1:启用,0:停用'
);
```
##### 插入数据
```sql
insert into ssc_customer_service(`url`, `status`) values('www.baidu.com', 1);
```

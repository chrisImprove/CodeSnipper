### Mysql 命令行操作

##### 分配权限
```sql
grant all privileges on sscdf.* to 'david'@'%' identified by 'david@invech'
grant all privileges on *.* to 'david888'@'%' identified by '123qwe' with grant option;
grant all privileges on *.* to 'david888'@'%' identified by '123qwe' with admin option;
flush privileges;
```
##### 收回权限
```sql
revoke all privileges on sscaa.* from 'ssc_dafeng2017'@'%';
flush privileges;
```
##### 修改密码
```sql
update mysql.user set authentication_string=password('新密码') where user='root';
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
CREATE TABLE `vc_hd_apply` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `hd_id` int(2) comment '申请活动类型',
    `user_name` varchar(255) comment '会员账号',
    `bet_sn` varchar(50) comment '注单号码',
    `game_type` int(2) comment '游戏平台',
    `game_time` datetime comment '游戏时间',
    `deposit_money` float(15, 3) comment '存款金额',
    `bet_money` float(15, 3) comment '投注金额',
    `apply_time` datetime comment '申请时间',
    `audit_time` datetime comment '审核时间',
    `audit_name` varchar(255) comment '审核人姓名',
    `audit_status` tinyint(2) default 2 comment '审核状态 1:审核成功，2:待审核',
    `status` tinyint(1) default 0 comment '0:未派发, 1:派发成功',
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
```
##### 插入数据
```sql
insert into ssc_customer_service(`url`, `status`) values('www.baidu.com', 1);
```
##### 修改表结构(插入一列)
```sql
alter table ssc_data_time alter column lhcTime set default '2018-01-01 00:00:00';
alter table ssc_user add column pay_level CHAR(1) default 'A' not null after fc ;
alter table vc_admin add column nichname CHAR(32)  COMMENT "账号昵称" after username ;
alter table vc_admin add column last_login_time datetime  COMMENT "最后登录时间" after role ;
alter table vc_admin change column nichname nickname varchar(32) default '系统管理员'
alter table yusheng drop column def ;

alter table ssc_member_session add column `isRealOnLine` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否真实在线,sLogin=1并且一个小时内有过操作' after isOnline;
ALTER TABLE ssc_member_session ADD KEY (`isRealOnLine`) USING BTREE;
```

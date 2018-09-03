# LINUX设置
### 防火墙设置iptables
```shell
查找所有规则
iptables -L INPUT --line-numbers
删除一条防火墙
iptables -D INPUT 11 （注意，这个11是行号，是iptables -L INPUT --line-numbers 所打印出来的行号）
查看防火墙状态
service iptables status
```

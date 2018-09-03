### 递归设置目录下的文件权限
```shell
find /path -type f -exec chmod 644 {} \; //设置文件权限为644
find /path -type d -exec chmod 755 {} \; //设置目录权限为755
```

### 生成随机密码
openssl rand -hex 10
openssl rand -base64 20

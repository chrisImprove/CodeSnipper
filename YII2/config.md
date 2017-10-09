# Yii配置说明

#### 一、修改登录数据库表user->admin
1. 创建admin表(仿照user表)
```sh
./yii migrate
```
2. 复制common/models/User.php -> Admin.php
```php
public static function tableName()
{
    return '{{%admin}}';
}
```
3. 修改common/models/LoginForm.php
```php
protected function getUser()
{
    if ($this->_user === null) {
        $this->_user = Admin::findByUsername($this->username);
    }

    return $this->_user;
}
```
4. 修改配置文件
```
'components' => [
    'user' => [
        'identityClass' => 'common\models\Admin',
        'enableAutoLogin' => true,
    ],
],
```
5. 创建初始用户
```php
create console/controller/InitController.php
./yii init/admin

<?php
namespace console\controllers;
use common\models\Admin;

class InitController extends \yii\console\Controller
{
    /**
     * Create init user
     */
    public function actionAdmin()
    {
        echo "Create init admin ...\n";
        $username = $this->prompt('Admin Name:');
        $password = $this->prompt('Password:');
        $model = new Admin();
        $model->username = $username;
        $model->password = $password;
        if (!$model->save()) {
            foreach ($model->getErrors() as $error) {
                foreach ($error as $e) {
                    echo "$e\n";
                }
            }
            // 命令行返回1表示有异常
            return 1;
        }
        // 返回0表示一切OK
        return 0;
    }
}
```

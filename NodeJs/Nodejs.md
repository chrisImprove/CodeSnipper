# NodeJs 学习教程  

### 1. npm  管理工具
	npm Commands:
		version : npm -v  
		upgrade : sudo npm install npm -g  

### 2. 安装命令
	本地安装:	npm install <Module Name>  
	全局安装:	npm install <Module Name> -g    

### 3. 查看安装信息
	npm list -g
	
### 4.Package.json 属性说明  
	name - 包名。
	version - 包的版本号。
	description - 包的描述。
	homepage - 包的官网 url 。
	author - 包的作者姓名。
	contributors - 包的其他贡献者姓名。
	dependencies - 依赖包列表。如果依赖包没有安装，npm 会自动将依赖包安装在 node_module 目录下。
	repository - 包代码存放的地方的类型，可以是 git 或 svn，git 可在 Github 上。
	main - main 字段指定了程序的主入口文件，require('moduleName') 就会加载这个文件。这个字段的默认值是模块根目录下面的 index.js。
	keywords - 关键字	

### 5.卸载模块  
	我们可以使用以下命令来卸载 Node.js 模块。
	$ npm uninstall express
	卸载后，你可以到 /node_modules/ 目录下查看包是否还存在，或者使用以下命令查看：
	$ npm ls
### 6.更新模块
	$ npm update express
### 7.搜索模块
	$ npm search express
# Nodejs 常用库介绍

### 1.superagent
	superagent 是个轻量的的 http 方面的库，是nodejs里一个非常方便的客户端请求代理模块，当我们需要进行 get 、 post 、 head 等网络请求时，尝试下它吧。
	
### 2.cheerio
	cheerio 大家可以理解成一个 Node.js 版的 jquery，用来从网页中以 css selector 取数据，使用方式跟 jquery 一样一样的
	
### 3.eventproxy 与 async
	eventproxy 与 async 常用于并发请求
	场景:当你需要去多个源(一般是小于 10 个)汇总数据的时候，用 eventproxy 方便；当你需要用到队列，需要控制并发数，或者你喜欢函数式编程思维时，使用 async。大部分场景是前者，所以我个人大部分时间是用 eventproxy 的。
	
	
### 4.utility
	一些实用的工具如md5, sha1, sha256, hmac, decode/encode, Date utils,  Number utils, Timers, String Utils, Json, Object.assign, argumentsToArray等.
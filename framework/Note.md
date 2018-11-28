# imooc从零开始搭php框架

## 框架运行流程

1. 入口文件
2. 定义常量
3. 引入函数库
4. 自动加载类
5. 启动框架
6. 路由解析
7. 加载控制器
8. 返回结果

## apache重定向

```
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
```
### JS文件元素的操作

##### Ajax 通用函数
```php
function sendAjax(func, senddata, method)
{
    $.ajax({
        url : '/api' + '/' + func,
        data: senddata,
        dataType: 'json',
        method: method,
        success: function(data) {
            alert(data.msg);
        },
        error: function() {
            alert("Ajax 网络错误!");
        }
    });
    return false;
}
```
##### JS 文档加载完成后自动触发click事件
```js
<script type="text/javascript">
    // 自动触发点击事件
    function init(){
        $(".search-btn").trigger('click');
    }
    onload=init;
</script>
```




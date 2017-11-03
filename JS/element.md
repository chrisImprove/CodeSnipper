### JS文件元素的操作

##### Checkbox 全选/全不选/获取选中的值
```php
// 全选
$(".btn-select-all").click(function(){
    $("input[name='checkbox']").prop("checked",true);
});
// 全不选
$(".btn-select-cancel").click(function(){
    $("input[name='checkbox']").prop("checked",false);
});
// 获取选中的值
var arr = [];
$("input:checkbox").each(function() {
    if ($(this).prop('checked') == true) {
        arr.push($(this).val());
    }
});
```
##### Select元素取值
```html
<select class="form-control" id="select">
    <option value="20" selected="selected">20条</option>
    <option value="50">50条</option>
</select>
var options=$("#select option:selected");   //获取选中的项
alert(options.val());                       //拿到选中项的值
alert(options.text());                      //拿到选中项的文本
alert(options.attr('url'));                 //拿到选中项的url值
```
##### 类似kindedit获取textarea的值
```javascript
var te = $(window.frames[0].document).find(".ke-content").html();
alert(te);
```


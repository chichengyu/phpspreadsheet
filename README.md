# phpspreadsheet
一个phpspreadsheet封装包，方便Excel数据的导入导出使用，我这里安装是的 ```"phpoffice/phpspreadsheet": "^1.6"```  


# 基本使用
使用之前必须先安装 ```Spreadsheet```，使用 composer 安装
```
composer require phpoffice/phpspreadsheet
```
然后再安装本包
```
composer require think/phpspreadsheet
```
安装之后，即可在需要使用的类中use引入
```
use think\Excel;
```
然后调用方法：excelReader（从Excel导入数据）、excelPut（导出数据为Excel），注意都是静态方法静态调用  
导出数据道Excel，有两种模式：  
一：直接下载
```
$Excel['fileName']="ThinkPHP导出spreadsheet示例-".date('Y年m月d日-His',time());//or $xlsTitle
$Excel['cellName']=['A','B','C','D'];// excel 列
$Excel['H'] = ['A'=>12,'B'=>20,'C'=>14,'D'=>16];//横向水平宽度
$Excel['V'] = ['1'=>40,'2'=>23];//纵向垂直高度
$Excel['sheetTitle']="spreadsheet示例";//大标题，自定义
$Excel['xlsCell']=[['id','序号'],['name','姓名'],['age','年龄'],['age','性别']];// 每列头名称
$tableData = [
  ['id'=>1,'name'=>'张三','age'=>20,'age'=>'男'],
  ['id'=>2,'name'=>'李四','age'=>20,'age'=>'女'],
];
Excel::excelPut($Excel,$tableData);
```
二：在服务端生成Excel
```
$path = './static/excel/$Excel['fileName'].xlsx';
Excel::excelPut($Excel,$tableData,$path);
```
从Excel导入数据，首先需要拿到你上传到服务器的Excel文件的正确路径，如：我这是  $path = './static/test.xlsx'
```
$path = './static/test.xlsx';
// header('content-Type:text/html;charset=utf-8');
$data  = Excel::excelReader($path);// 返回拿到的数据
```
在thinkphp5里基本使用就是以上如此了，封装这个只为方便使用

<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <title>News </title>
    </head>

    <body>
        <h1 style="background-color:yellow">第一组标题</h1>
        <hr>
        <!--comment-->
        <h2>第2组<br>标题</h2>
        <h3>第3组标题</h3>
        <a href='https://bing.com'>Bing</a>
        <p>first paragraph</p>
        <b>abc</b>
        <i>abc</i>
        <code>abc</code>
        <sub>def</sub>
        <sup>def</sup>
        <em>abc</em>
        <cite>abc</cite>
        <abbr>abc</abbr>
        <h1>Second title</h1>
        <a href="http://www.runoob.com/" target="_blank">访问菜鸟教程!</a>
        <p>
            <table border='1'>
                <tr>
                    <td>row 1,cell 1</td>
                    <td>row 1, cell 2</td>
                </tr>
            </table>
        </p>
        <ol>
            <li>Coffee</li>
            <li>Milk</li>
        </ol>

        <div id='container' style="width:500px">
            <h1 style="margin-bottom:0;">主标题</h1>
        </div>
        <form>
            first name:<input type="text" name="firstname">
        </form>
        <div id="menu" style="height:200px;width:100px;float:right">
            <b>菜单</b><br>
            HTML<br>
            CSS<br>
        </div>
        <script>
            document.write("Hello World");
            
        </script>


        
        <div id="content" style="height:200px;width:100px;float:left">内容</div>
        <script>
                function myFunction()
                {
                    document.getElementById("content").innerHTML="Hello JavaScript!";
                }
        </script>

        <button type="button" onclick="myFunction()">点我</button>
    
        <canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
您的浏览器不支持 HTML5 canvas 标签。
</canvas>

<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.fillStyle="#FF0000";
ctx.fillRect(0,0,150,75);

</script>


    </body>
    
</html>

# Figure - CSS

<style type="text/css"> 
.figure{
    background: red;
    margin:0 auto;
}
/*三角形*/ 
.figure-traingle { 
    width: 0; 
    height: 0; 
    border-left: 50px solid transparent; 
    border-right: 50px solid transparent; 
    border-bottom: 100px solid yellowgreen; 
}
/*正方形*/
.figure-square{
    width: 100px;
    height: 100px;
}
</style>

```css
.figure{
    background:red;
    margin:0 auto;
}
```

## 正方形

```css
/*正方形*/
.figure-square{
    width: 100px;
    height: 100px;
}
```

.shape-traingle {
width: 0;
height: 0;
border-left: 50px solid transparent;
border-right: 50px solid transparent;
border-bottom: 100px solid yellowgreen;
}
五角星

<style type="text/css"> .shape-star { margin: 50px 0; position: relative; width: 0; border-right: 100px solid transparent; border-bottom: 70px solid yellowgreen; border-left: 100px solid transparent; transform: rotate(35deg) scale(.6); } .shape-star:before { content: ''; position: absolute; border-bottom: 80px solid yellowgreen; border-left: 30px solid transparent; border-right: 30px solid transparent; top: -45px; left: -65px; transform: rotate(-35deg); } .shape-star:after { content: ''; position: absolute; top: 3px; left: -105px; border-right: 100px solid transparent; border-bottom: 70px solid yellowgreen; border-left: 100px solid transparent; transform: rotate(-70deg); } </style>

.shape-star {
margin: 50px 0;
position: relative;
width: 0;
border-right: 100px solid transparent;
border-bottom: 70px solid yellowgreen;
border-left: 100px solid transparent;
transform: rotate(35deg) scale(0.6);
}
.shape-star:before {
content: "";
position: absolute;
border-bottom: 80px solid yellowgreen;
border-left: 30px solid transparent;
border-right: 30px solid transparent;
top: -45px;
left: -65px;
transform: rotate(-35deg);
}
.shape-star:after {
content: "";
position: absolute;
top: 3px;
left: -105px;
border-right: 100px solid transparent;
border-bottom: 70px solid yellowgreen;
border-left: 100px solid transparent;
transform: rotate(-70deg);
}
六角星

<style type="text/css"> .shape-sixstar { position: relative; width: 0; border-left: 50px solid transparent; border-right: 50px solid transparent; border-bottom: 100px solid yellowgreen; } .shape-sixstar:after { content: ""; position: absolute; border-left: 50px solid transparent; border-right: 50px solid transparent; border-top: 100px solid yellowgreen; top: 30px; left: -50px; } </style>

.shape-sixstar {
position: relative;
width: 0;
border-left: 50px solid transparent;
border-right: 50px solid transparent;
border-bottom: 100px solid yellowgreen;
}
.shape-sixstar:after {
content: "";
position: absolute;
border-left: 50px solid transparent;
border-right: 50px solid transparent;
border-top: 100px solid yellowgreen;
top: 30px;
left: -50px;
}
八角星

<style type="text/css"> .shape-eightstar { position: relative; width: 100px; height: 100px; background-color: yellowgreen; transform: rotate(30deg); } .shape-eightstar::before { content: ""; position: absolute; top: 0; left: 0; width: 100px; height: 100px; transform: rotate(45deg); background-color: yellowgreen; } </style>

.shape-eightstar {
position: relative;
width: 100px;
height: 100px;
background-color: yellowgreen;
transform: rotate(30deg);
}

.shape-eightstar::before {
content: "";
position: absolute;
top: 0;
left: 0;
width: 100px;
height: 100px;
transform: rotate(45deg);
background-color: yellowgreen;
}
十二角星

<style type="text/css"> .shape-twelvestar { position: relative; width: 100px; height: 100px; margin-bottom: 100px!important; background-color: yellowgreen; transform: rotate(30deg); } .shape-twelvestar::before { content: ""; position: absolute; top: 0; left: 0; width: 100px; height: 100px; transform: rotate(30deg); background-color: yellowgreen; } .shape-twelvestar::after { content: ""; position: absolute; top: 0; left: 0; width: 100px; height: 100px; transform: rotate(60deg); background-color: yellowgreen; } </style>

.shape-twelvestar {
position: relative;
width: 100px;
height: 100px;
margin-bottom: 100px !important;
background-color: yellowgreen;
transform: rotate(30deg);
}

.shape-twelvestar::before {
content: "";
position: absolute;
top: 0;
left: 0;
width: 100px;
height: 100px;
transform: rotate(30deg);
background-color: yellowgreen;
}

.shape-twelvestar::after {
content: "";
position: absolute;
top: 0;
left: 0;
width: 100px;
height: 100px;
transform: rotate(60deg);
background-color: yellowgreen;
}

## 其它 <style type="text/css"> </style>

## 其它 <style type="text/css"> </style>

## 其它 <style type="text/css"> </style>

## 其它 <style type="text/css"> </style>

## 其它 <style type="text/css"> </style>

## 参考链接

- [奇妙的 CSS shapes(CSS图形) - ChokCoco - 博客园](https://www.cnblogs.com/coco1s/p/6992177.html)

- [纯CSS制作各种图形(多图预警) - YuanWing Notes - SegmentFault 思否](https://segmentfault.com/a/1190000002780453)

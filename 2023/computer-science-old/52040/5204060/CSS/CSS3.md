面临找工作之际，又将 CSS3 的基础知识撸了一把，做了相应的笔记，主要是方便自己查阅，参考的是 W3C 的知识。

1、CSS 背景

（1）、background-size 属性

background-size 属性规定背景图片的尺寸，同时适用与字体图标方面的适用（主要在移动端用到较多）。

在 CSS3 之前，背景图片的尺寸是由图片的实际尺寸决定的。在 CSS3 中，可以规定背景图片的尺寸，这就允许我们在不同的环境中重复使用背景图片。

您能够以像素或百分比规定尺寸。如果以百分比规定尺寸，那么尺寸相对于父元素的宽度和高度。

（2）、background-origin 属性

background-origin 属性规定背景图片的定位区域。

背景图片可以放置于 content-box、padding-box 或 border-box 区域

（3）、background-clip 属性

background-clip 看似跟 background-origin 的用法差不多，在 W3C 上面也没有找到对这两个属性的区别方面的解释。但是其中肯定是有不同之处，如果有两个属性的功能是完全一样的，明显是毫无意义的，通过谷歌了一下，主要总结如下：

两者重要的区别就是：背景能不能在边框上显示

     background-clip：border|padding|content
    
     该属性指定了背景在哪些区域可以显示，但与背景开始绘制的位置无关，背景的绘制的位置可以出现在不显示背景的区域，这时就相当于背景图片被不显示背景的区域裁剪了一部分一样。（背景能在边框上显示）

background-origin：padding|border|content

该属性指定了背景从哪个区域(边框、补白或内容)开始绘制,但也仅仅能控制背景开始绘制的位置，你可以用这个属性在边框上绘制背景，但边框上的背景显不显示出来那就要由 background-clip 来决定了，（背景并没有在边框上显示）

如果还是不是很明白的童鞋，具体可以参考该大神的博客分享，里面的解析比较清晰明了，链接是：http://www.cnblogs.com/2050/archive/2012/11/13/2768289.html

2、CSS3 文本效果

（1） 文本阴影 text-shadow

通过代码例子进行理解，主要代码如下：

h1 {

text-shadow: 5px 5px 5px #FF0000; }

文本阴影效果！

（2）CSS3 自动换行

（3）、CSS3 字体

在了解 CSS3 字体之前，需要了解一下 CSS 字体的发展史，在 CSS3 之前，web 设计师必须使用已在用户计算机上安装好的字体。

通过 CSS3，web 设计师可以使用他们喜欢的任意字体。

当您找到或购买到希望使用的字体时，可将该字体文件存放到 web 服务器上，它会在需要时被自动下载到用户的计算机上。

您“自己的”的字体是在 CSS3 @font-face 规则中定义的。

在新的 @font-face 规则中，您必须首先定义字体的名称（比如 myFirstFont），然后指向该字体文件。

如需为 HTML 元素使用字体，请通过 font-family 属性来引用字体的名称 (myFirstFont)：

代码如下：

@font-face {

font-family: myFirstFont;

src: url('/example/css3/Sansation_Light.ttf')

    ,url('/example/css3/Sansation_Light.eot'); /* IE9+ */ }

div { font-family:myFirstFont; }

With CSS3, websites can finally use fonts other than the pre-selected "web-safe" fonts.

效果图如下：

如果要使得变为粗体：

@font-face {

font-family: myFirstFont;

src: url('/example/css3/Sansation_Bold.ttf')

    ,url('/example/css3/Sansation_Bold.eot'); /* IE9+ */

font-weight:bold; }

div { font-family:myFirstFont; }

With CSS3, websites can finally use fonts other than the pre-selected "web-safe" fonts.

效果图如下：

3、CSS3 2D 转换

（1）translate() 方法

通过 translate() 方法，元素从其当前位置移动，根据给定的 left（x 坐标） 和 top（y 坐标） 位置参数：

-ms-transform:translate(50px,100px); /_ IE 9 _/

-moz-transform:translate(50px,100px); /_ Firefox _/

-webkit-transform:translate(50px,100px); /_ Safari and Chrome _/

-o-transform:translate(50px,100px); /_ Opera _/

}

你好。这是一个 div 元素。

你好。这是一个 div 元素。

效果图如下：

如果没有设置样式 div#div2，则是：

设置了设置样式 div#div2，则是水平方向向右移动了 50px,垂直方向向下移动了 100px：（参考的方向点是图像的左上角）

（2）rotate() 方法

通过 rotate() 方法，元素顺时针旋转给定的角度。允许负值，元素将逆时针旋转

div

{

transform: rotate(30deg);

-ms-transform: rotate(30deg); /_ IE 9 _/

-webkit-transform: rotate(30deg); /_ Safari and Chrome _/

-o-transform: rotate(30deg); /_ Opera _/

-moz-transform: rotate(30deg); /_ Firefox _/

}

红色标记部分代表是旋转的角度，（30 度）

（3）scale() 方法

通过 scale() 方法，元素的尺寸会增加或减少，根据给定的宽度（X 轴）和高度（Y 轴）参数：

div

{

transform: scale(2,4);

-ms-transform: scale(2,4); /_ IE 9 _/

-webkit-transform: scale(2,4); /_ Safari 和 Chrome _/

-o-transform: scale(2,4); /_ Opera _/

-moz-transform: scale(2,4); /_ Firefox _/

}

红色部分是倍数。

(4)skew() 方法

通过 skew() 方法，元素翻转给定的角度，根据给定的水平线（X 轴）和垂直线（Y 轴）参数：

div

{

transform: skew(30deg,20deg);

-ms-transform: skew(30deg,20deg); /_ IE 9 _/

-webkit-transform: skew(30deg,20deg); /_ Safari and Chrome _/

-o-transform: skew(30deg,20deg); /_ Opera _/

-moz-transform: skew(30deg,20deg); /_ Firefox _/

}

值 skew(30deg,20deg) 围绕 X 轴把元素翻转 30 度，围绕 Y 轴翻转 20 度。

(5)matrix() 方法

matrix() 方法把所有 2D 转换方法组合在一起。

matrix() 方法需要六个参数，包含数学函数，允许您：旋转、缩放、移动以及倾斜元素。

div {

width:100px;

height:75px;

border:1px solid black; }

div#div2 {

transform:matrix(0.866,0.5,-0.5,0.866,0,0);

-ms-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /_ IE 9 _/

-moz-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /_ Firefox _/

-webkit-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /_ Safari and Chrome _/

-o-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /_ Opera _/

}

你好。这是一个 div 元素。

你好。这是一个 div 元素。

效果图如下：

注意： Opera 仍然不支持 3D 转换（它只支持 2D 转换）。

4、CSS3 过渡

CSS3 过渡是元素从一种样式逐渐改变为另一种的效果。

要实现这一点，必须规定两项内容：
规定您希望把效果添加到哪个 CSS 属性上
规定效果的时长
实例

规定当鼠标指针悬浮于

元素上时：

div

{

width:100px;

height:100px;

background:yellow;

transition:width 2s;

-moz-transition:width 2s; /_ Firefox 4 _/

-webkit-transition:width 2s; /_ Safari and Chrome _/

-o-transition:width 2s; /_ Opera _/

}

div:hover { width:300px; }

请把鼠标指针放到黄色的 div 元素上，来查看过渡效果。

鼠标尚未移动到 div 里时，如下显示：

鼠标移动到 div 里时，效果如下：

5、CSS3 动画

div{

width:100px;

height:100px;

background:red;

animation:myfirst 5s;

-moz-animation:myfirst 5s; /_ Firefox _/

-webkit-animation:myfirst 5s; /_ Safari and Chrome _/

-o-animation:myfirst 5s; /_ Opera _/

}

@keyframes myfirst

{

from {background:red;}

to {background:yellow;}

}

@-moz-keyframes myfirst /_ Firefox _/

{

from {background:red;}

to {background:yellow;}

}

@-webkit-keyframes myfirst /_ Safari and Chrome _/

{

from {background:red;}

to {background:yellow;}

}

@-o-keyframes myfirst /_ Opera _/

{

from {background:red;}

to {background:yellow;}

}

效果是：该 div 在 5S 的时间里，将一开始的红色背景，逐渐的变成黄色背景。

例子 2：

div

{

width:100px;

height:100px;

background:red;

animation:myfirst 5s;

-moz-animation:myfirst 5s; /_ Firefox _/

-webkit-animation:myfirst 5s; /_ Safari and Chrome _/

-o-animation:myfirst 5s; /_ Opera _/

}

@keyframes myfirst

{

0% {background:red;}

25% {background:yellow;}

50% {background:blue;}

100% {background:green;}

}

@-moz-keyframes myfirst /_ Firefox _/

{

0% {background:red;}

25% {background:yellow;}

50% {background:blue;}

100% {background:green;}

}

@-webkit-keyframes myfirst /_ Safari and Chrome _/

{

0% {background:red;}

25% {background:yellow;}

50% {background:blue;}

100% {background:green;}

}

@-o-keyframes myfirst /_ Opera _/

{

0% {background:red;}

25% {background:yellow;}

50% {background:blue;}

100% {background:green;}

}

效果是：5S 的时间被平均分成了四个时间点 1.25,2.50，3.75,5.00，各个时间点对应着变成红色、黄色、蓝色、绿色。

6、CSS3 多列

（1）CSS3 创建多列

column-count 属性规定元素应该被分隔的列数：

.newspaper

{

-moz-column-count:3; /_ Firefox _/

-webkit-column-count:3; /_ Safari and Chrome _/

column-count:3;

}

人民网北京 2 月 24 日电 (记者 刘阳)国家发展改革委近日发出通知，决定自 2 月 25 日零时起将汽、柴油价格每吨分别提高 300 元和 290 元

效果图如下：

（2）CSS3 规定列之间的间隔

column-gap 属性规定列之间的间隔：

.newspaper

{

-moz-column-count:3; /_ Firefox _/

-webkit-column-count:3; /_ Safari and Chrome _/

column-count:3;

-moz-column-gap:30px; /_ Firefox _/

-webkit-column-gap:30px; /_ Safari and Chrome _/

column-gap:30px;

}

人民网北京 2 月 24 日电 (记者 刘阳)国家发展改革委近日发出通知，决定自 2 月 25 日零时起将汽、柴油价格每吨分别提高 300 元和 290 元，折算到 90 号汽油和 0 号柴油（全国平均）每升零售价格分别提高 0.22 元和 0.25 元。

效果图如下：

（3）CSS3 列规则

column-rule 属性设置列之间的宽度、样式和颜色规则。

.newspaper

{

-moz-column-count:3; /_ Firefox _/

-webkit-column-count:3; /_ Safari and Chrome _/

column-count:3;

-moz-column-gap:40px; /_ Firefox _/

-webkit-column-gap:40px; /_ Safari and Chrome _/

column-gap:40px;

-moz-column-rule:4px outset #ff0000; /_ Firefox _/

-webkit-column-rule:4px outset #ff0000; /_ Safari and Chrome _/

column-rule:4px outset #ff0000;

}

人民网北京 2 月 24 日电 (记者 刘阳)国家发展改革委近日发出通知，决定自 2 月 25 日零时起将汽、柴油价格每吨分别提高 300 元和 290 元，折算到 90 号汽油和 0 号柴油（全国平均）每升零售价格分别提高 0.22 元和 0.25 元。

效果图如下：

以上都是我自己做的笔记，主要是参考 W3C，都是按照自己方便记忆跟理解做成的笔记，相对而言，没那么完美，望笑纳，第一次发表博文。

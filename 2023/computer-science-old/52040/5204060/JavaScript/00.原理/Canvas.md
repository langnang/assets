创建 Canvas 元素
<canvas id="myCanvas"></canvas>
定义和用法
<canvas> 标签定义图形，比如图表和其他图像。
<canvas> 标签只是图形容器，您必须使用脚本来绘制图形。
var c=document.getElementById("myCanvas");
属性
属性 值 描述
height pixels 设置 canvas 的高度。
width pixels 设置 canvas 的宽度。
Canvas 对象的方法
方法 值 描述
getContext() 2d 返回一个用于在画布上绘图的环境。
var cxt=c.getContext("2d");
颜色、样式和阴影
属性 描述
fillStyle 设置或返回用于填充绘画的颜色、渐变或模式
strokeStyle 设置或返回用于笔触的颜色、渐变或模式
shadowColor 设置或返回用于阴影的颜色
shadowBlur 设置或返回用于阴影的模糊级别
shadowOffsetX 设置或返回阴影距形状的水平距离
shadowOffsetY 设置或返回阴影距形状的垂直距离
方法 描述
createLinearGradient() 创建线性渐变（用在画布内容上）
createPattern() 在指定的方向上重复指定的元素
createRadialGradient() 创建放射状/环形的渐变（用在画布内容上）
addColorStop() 规定渐变对象中的颜色和停止位置
线条样式
属性 描述
lineCap 设置或返回线条的结束端点样式
lineJoin 设置或返回两条线相交时，所创建的拐角类型
lineWidth 设置或返回当前的线条宽度
miterLimit 设置或返回最大斜接长度
矩形
方法 描述
rect() 创建矩形
fillRect() 绘制“被填充”的矩形
strokeRect() 绘制矩形（无填充）
clearRect() 在给定的矩形内清除指定的像素
路径
方法 描述
fill() 填充当前绘图（路径）
stroke() 绘制已定义的路径
beginPath() 起始一条路径，或重置当前路径
moveTo() 把路径移动到画布中的指定点，不创建线条
closePath() 创建从当前点回到起始点的路径
lineTo() 添加一个新点，然后在画布中创建从该点到最后指定点的线条
clip() 从原始画布剪切任意形状和尺寸的区域
quadraticCurveTo() 创建二次贝塞尔曲线
bezierCurveTo() 创建三次方贝塞尔曲线
arc() 创建弧/曲线（用于创建圆形或部分圆）
arcTo() 创建两切线之间的弧/曲线
isPointInPath() 如果指定的点位于当前路径中，则返回 true，否则返回 false
转换
方法 描述
scale() 缩放当前绘图至更大或更小
rotate() 旋转当前绘图
translate() 重新映射画布上的 (0,0) 位置
transform() 替换绘图的当前转换矩阵
setTransform() 将当前转换重置为单位矩阵。然后运行 transform()
文本
属性 描述
font 设置或返回文本内容的当前字体属性
textAlign 设置或返回文本内容的当前对齐方式
textBaseline 设置或返回在绘制文本时使用的当前文本基线
方法 描述
fillText() 在画布上绘制“被填充的”文本
strokeText() 在画布上绘制文本（无填充）
measureText() 返回包含指定文本宽度的对象
图像绘制
方法 描述
drawImage() 向画布上绘制图像、画布或视频
像素操作
属性 描述
width 返回 ImageData 对象的宽度
height 返回 ImageData 对象的高度
data 返回一个对象，其包含指定的 ImageData 对象的图像数据
方法 描述
createImageData() 创建新的、空白的 ImageData 对象
getImageData() 返回 ImageData 对象，该对象为画布上指定的矩形复制像素数据
putImageData() 把图像数据（从指定的 ImageData 对象）放回画布上
合成
属性 描述
globalAlpha 设置或返回绘图的当前 alpha 或透明值
globalCompositeOperation 设置或返回新图像如何绘制到已有的图像上
其他
方法 描述
save() 保存当前环境的状态
restore() 返回之前保存过的路径状态和属性
createEvent()  
getContext()  
toDataURL()

实例 1.基本操作

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Canvas</title>
</head>
<body>
	<!-- HTML 5创建canvas标签 设置宽度、高度-->
	<canvas id="myCanvas" width="800" height="600" style="position: absolute;top: 0;left: 0;right: 0;">
		
	</canvas>

    <script type="text/javascript">
    	// 绑定canvas
    	var c=document.getElementById("myCanvas");
    	c.width=window.innerWidth;
    	c.height=window.innerHeight;
    	c.style.backgroundColor="white";
    	// 设置canvas环境
    	var ctx=c.getContext("2d");
    	// 1.线段---context.lineTo(路径的目标位置的 x 坐标,路径的目标位置的 y 坐标);
    	ctx.beginPath();//起始一条路径，或重置当前路径;
    	ctx.moveTo(25,50);//把路径移动到画布中的指定点，不创建线条
    	ctx.lineTo(75,50);
    	ctx.stroke();//绘制已定义的路径;
    	// 2.矩形---context.rect(矩形左上角的 x 坐标,矩形左上角的 y 坐标,矩形的宽度,矩形的高度);
    	ctx.beginPath();
    	ctx.rect(0,0,100,100);
    	ctx.stroke();
    	// 3.圆-----context.arc(圆的中心的 x 坐标,圆的中心的 y 坐标,圆的半径,起始角-以弧度计,结束角-以弧度计,绘图方向--false顺时针,true逆时针);
    	ctx.beginPath();
    	ctx.arc(150,50,50,0,2*Math.PI);
    	ctx.stroke();
    	// 4.圆弧---context.arc(圆的中心的 x 坐标,圆的中心的 y 坐标,圆的半径,起始角-以弧度计,结束角-以弧度计,绘图方向--false顺时针,true逆时针);
    	ctx.beginPath();
    	ctx.arc(250,50,50,0.1*Math.PI,1.3*Math.PI);
    	ctx.stroke();
    	// 5.弧线---context.arcTo(弧的终点的 x 坐标,弧的起点的 y 坐标,弧的终点的 x 坐标,弧的终点的 y 坐标,弧的半径);
    	ctx.beginPath();
    	ctx.moveTo(300,10);           // 创建开始点
    	ctx.lineTo(350,10);           // 创建水平线
    	ctx.arcTo(400,10,400,50,50);  // 创建弧
    	ctx.lineTo(400,100);          // 创建垂直线
    	ctx.stroke();                 // 进行绘制
    	// 6.二次贝塞尔曲线-----context.quadraticCurveTo(贝塞尔控制点的 x 坐标,贝塞尔控制点的 y 坐标,结束点的 x 坐标,结束点的 y 坐标);
    	ctx.beginPath();
    	ctx.moveTo(410,5);
    	ctx.quadraticCurveTo(450,100,600,5);
    	ctx.stroke();
    	// 7.三次方贝塞尔曲线---context.bezierCurveTo(第一个贝塞尔控制点的 x 坐标,第一个贝塞尔控制点的 y 坐标,第二个贝塞尔控制点的 x 坐标,第二个贝塞尔控制点的 y 坐标,结束点的 x 坐标,结束点的 y 坐标);
    	ctx.beginPath();
    	ctx.moveTo(610,5);
    	ctx.bezierCurveTo(650,100,760,100,800,5);
    	ctx.stroke();
    	// 8.填充的矩形---context.fillRect(矩形左上角的 x 坐标,矩形左上角的 y 坐标,矩形的宽度,矩形的高度);
    	ctx.beginPath();
    	ctx.fillStyle="#0000ff";
    	ctx.fillRect(0,105,100,95);
    	ctx.stroke();
    	// 9.线性渐变的矩形---context.createLinearGradient(渐变开始点的 x 坐标,渐变开始点的 y 坐标,渐变结束点的 x 坐标,渐变结束点的 y 坐标);
    	ctx.beginPath();
    	var grd=ctx.createLinearGradient(0,205,100,205);
    	grd.addColorStop(0,"black");
    	grd.addColorStop(1,"white");
    	ctx.fillStyle=grd;
    	ctx.fillRect(0,205,100,95);
    	// 10.放射状/圆形渐变的矩形---context.createRadialGradient(渐变的开始圆的 x 坐标,渐变的开始圆的 y 坐标,开始圆的半径,渐变的结束圆的 x 坐标,渐变的结束圆的 y 坐标,结束圆的半径);
    	ctx.beginPath();
    	var grd=ctx.createRadialGradient(50,350,10,50,350,70);
    	grd.addColorStop(0,"red");
    	grd.addColorStop(1,"white");
    	ctx.fillStyle=grd;
    	ctx.fillRect(0,305,100,95);

    	c.onmousedown=function(event){

    		console.log(event);
    		ctx.beginPath();
    		ctx.moveTo(event.clientX,event.clientY);
    		if(event.button==0){
    			c.onmousemove=function(event){
    				var x=event.clientX;
    				var y=event.clientY;
    				ctx.lineTo(x,y);
    				ctx.stroke();
    			}
    		}
    	}
    	c.onmouseup=function(){
    		if(event.button==0){
    			c.onmousemove="";
    		}
    	}
    </script>
    <script>
    </script>

</body>
</html>
2.旋转星空
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<canvas id="can1">
		
	</canvas>
	<canvas id="can2">
		
	</canvas>
	<script type="text/javascript">
		var c1=document.getElementById("can1");
		var winW=window.innerWidth;
		var winH=window.innerHeight;
		c1.width=winW;
		c1.height=winH;
		c1.style.position="absolute";
		c1.style.top=0;
		c1.style.left=0;
		var ctx1=c1.getContext("2d");
		// 深邃星空背景
		ctx1.beginPath();
		ctx1.rect(0,0,winW,winH);
		var grd1=ctx1.createRadialGradient(winW/2,winH/2,10,winW/2,winH/2,Math.sqrt(winW*winW+winH*winH)*1.5);
		grd1.addColorStop(0,"black");
		grd1.addColorStop(1,"white");
		ctx1.fillStyle=grd1;
		ctx1.fill();
		ctx1.stroke();
		var c2=document.getElementById("can2");
		c2.width=winW;
		c2.height=winH;
		c2.style.position="absolute";
		c2.style.top=0;
		c2.style.left=0;
		var ctx2=c2.getContext("2d");
		// 点点星光
		var star=function(ctx,x,y,D,d,color){
			ctx2.beginPath();
			ctx2.moveTo(x-D,y);
			ctx2.lineTo(x-d,y-d);
			ctx2.lineTo(x,y-3/2*D);
			ctx2.lineTo(x+d,y-d);
			ctx2.lineTo(x+D,y);
			ctx2.lineTo(x+d,y+d);
			ctx2.lineTo(x,y+3/2*D);
			ctx2.lineTo(x-d,y+d);
			ctx2.closePath();
			ctx2.fillStyle=color;
			ctx2.fill();
			ctx2.shadowBlur=20;
			ctx2.shadowColor="white";
			ctx2.stroke();
		};

    	// 星光坐标二维数组
    	var arr=new Array();
    	for (var i =0; i <=300; i++) {
    		arr[i]=new Array();
    		for (var k = 0; k <2; k++) {
    			if(k==0){
    				arr[i][k]=Math.max(winW,winH)*Math.random();
    			}else if(k==1){
    				arr[i][k]=Math.max(winW,winH)*Math.random();
    			}

    		};
    	};

    	setInterval(function(){
    		ctx2.clearRect(0,0,winW,winH);
    		for (var i =0; i < arr.length; i++) {
    			var x=arr[i][0]-winW/2;
    			var y=winH/2-arr[i][1];
    			var r=Math.sqrt(Math.pow(x,2)+Math.pow(y,2));
    			var angle;
    			if(x==0&&y==0){
    				x=winW/2;
    				y=winH/2
    			}else{
    				if(x!=0){
    					angle=Math.atan2(y,x)/Math.PI*180;
    					if(angle<0){
    						angle=360+angle;
    					}

    				}else{
    					if(y>0){
    						angle=90;
    					}else if(y<0){
    						angle=270;
    					}
    				}
    				angle=angle+0.2;
    				x=winW/2+Math.cos(angle/180*Math.PI)*r;
    				y=winH/2-Math.sin(angle/180*Math.PI)*r;

    			}
    			star(ctx2, x, y, 6, 1.5, "white");
    			arr[i][0]=x;
    			arr[i][1]=y;
    		}
    	},100);



    </script>

</body>
</html>
3.自定义alert,confirm样式

4.

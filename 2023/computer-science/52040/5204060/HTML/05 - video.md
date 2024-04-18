# video

- [HTML 中嵌入视频](#html-中嵌入视频)
- [视频自动播放](#视频自动播放)
- [显示视频控件](#显示视频控件)
- [视频静音循环播放](#视频静音循环播放)

## HTML 中嵌入视频

```html
<video width="320" height="240">
	<source src="" type="video/mp4" />
</video>
```

width,hight 设置 video 宽高
source 标签设置视频源

## 视频自动播放

```html
<video width="320" height="240" autoplay="autoplay">
	<source src="" type="video/mp4" />
</video>
```

autoplay 属性使视频在就绪后马上播放

## 显示视频控件

```html
<video width="320" height="240" controls="controls">
	<source src="" type="video/mp4" />
</video>
```

controls 属性向用户显示控件，比如播放按钮。

## 视频静音循环播放

```html
<video width="320" height="240" loop="loop" muted>
	<source src="" type="video/mp4" />
</video>
```

loop 属性使媒介文件完成播放后再次开始播放。
nuted 属性使视频的音频输出被静音。（tip：设置视频循环播放时，可能需要 muted 属性才可成功）
视频播放前显示的图像
poster 属性规定视频下载时显示的图像，或者在用户点击播放按钮前显示的图像。
视频随页面加载时加载
preload 属性使视频在页面加载时进行加载，并预备播放。（如果使用 "autoplay"，则忽略该属性。）

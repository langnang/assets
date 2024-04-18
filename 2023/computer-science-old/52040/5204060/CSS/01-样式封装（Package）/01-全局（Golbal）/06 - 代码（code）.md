# 代码

<link rel="stylesheet" type="text/css" href="./../../../../ln-of-css/dist/ln.css" />

- [内联代码](#内联代码)
- [用户输入](#用户输入)
- [代码块](#代码块)
- [变量](#变量)

## 内联代码

```css
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
```

For example, <code>&lt;section&gt;</code> should be wrapped as inline.

## 用户输入

```css
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
```

To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>

## 代码块

```css
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
```

<pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>

## 变量

<var>y</var> = <var>m</var><var>x</var> + <var>b</var>

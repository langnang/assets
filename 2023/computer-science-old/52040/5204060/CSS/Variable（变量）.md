# Variable

## 声明

1. 不能包含$，[，^，(，%等字符

2. 普通字符局限在只要是“数字[0-9]”“字母[a-zA-Z]”“下划线_”和“短横线-”这些组合

3. 可以是中文，日文或者韩文。

**语法**`--variable-name:variable-value;`

```css
:root{
    --color:red;
}
```

## 使用

**语法**`var(variable-name)`

```css
.div{
    color:var(--color)
}
```

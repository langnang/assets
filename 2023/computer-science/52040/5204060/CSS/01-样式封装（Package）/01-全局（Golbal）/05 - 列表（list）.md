# 列表（list）

<link rel="stylesheet" type="text/css" href="./../../../../ln-of-css/dist/ln.css" />

- [无序列表](#无序列表)
- [有序列表](#有序列表)
- [无样式列表](#无样式列表)
- [内联列表](#内联列表)
- [描述](#描述)

## 无序列表

```css
```

<ul>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>
        Integer molestie lorem at massa
        <ul>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
        </ul>
    </li>
    <li>Ac tristique libero volutpat at</li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ul>

## 有序列表

```css
```

<ol>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>
        Integer molestie lorem at massa
        <ol>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
        </ol>
    </li>
    <li>Ac tristique libero volutpat at</li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ol>

## 无样式列表

```css
ul.list-unstyled {
  list-style: none;
}
```

<ul class="list-unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>
        Integer molestie lorem at massa
        <ul>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
        </ul>
    </li>
    <li>Ac tristique libero volutpat at</li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ul>

## 内联列表

```css
ul.list-inline {
  list-style: none;
}
ul.list-inline > li {
  display: inline-block;
}
```

<ul class="list-inline">
    <li>Lorem ipsum</li>
    <li>Phasellus iaculis</li>
    <li>Nulla volutpat</li>
</ul>

## 描述

<dl>
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
</dl>

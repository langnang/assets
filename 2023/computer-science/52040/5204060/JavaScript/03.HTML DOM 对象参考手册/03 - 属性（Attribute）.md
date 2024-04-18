# DOM Attribute

**HTML DOM 节点**
在 HTML DOM （文档对象模型）中，每个部分都是节点：

- 文档本身是文档节点
- 所有 HTML 元素是元素节点
- 所有 HTML 属性是属性节点
- HTML 元素内的文本是文本节点
- 注释是注释节点

**Attr 对象**
在 HTML DOM 中，Attr 对象表示 HTML 属性。
HTML 属性始终属于 HTML 元素。

## 属性和方法

| 属性 / 方法               | 描述                                              |
| ------------------------- | ------------------------------------------------- |
| attr.isId                 | 如果属性是 id 类型，则返回 true，否则返回 false。 |
| attr.name                 | 返回属性的名称。                                  |
| attr.value                | 设置或返回属性的值。                              |
| attr.specified            | 如果已指定属性，则返回 true，否则返回 false。     |
| nodemap.getNamedItem()    | 从 NamedNodeMap 返回指定的属性节点。              |
| nodemap.item()            | 返回 NamedNodeMap 中位于指定下标的节点。          |
| nodemap.length            | 返回 NamedNodeMap 中的节点数。                    |
| nodemap.removeNamedItem() | 移除指定的属性节点。                              |
| nodemap.setNamedItem()    | 设置指定的属性节点（通过名称）。                  |

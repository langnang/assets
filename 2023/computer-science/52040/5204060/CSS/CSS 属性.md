# CSS 属性

## CSS3 动画属性（Animation）

| 属性                                                                                                                                   | 描述                                      | CSS |
| ------------------------------------------------------------------------------------------------------------------------------------ | --------------------------------------- | --- |
| [@keyframes](https://www.w3school.com.cn/cssref/pr_keyframes.asp "CSS3 @keyframes 规则")                                               | 规定动画。                                   | 3   |
| [animation](https://www.w3school.com.cn/cssref/pr_animation.asp "CSS3 animation 属性")                                                 | 所有动画属性的简写属性，除了 animation-play-state 属性。 | 3   |
| [animation-name](https://www.w3school.com.cn/cssref/pr_animation-name.asp "CSS3 animation-name 属性")                                  | 规定 @keyframes 动画的名称。                    | 3   |
| [animation-duration](https://www.w3school.com.cn/cssref/pr_animation-duration.asp "CSS3 animation-duration 属性")                      | 规定动画完成一个周期所花费的秒或毫秒。                     | 3   |
| [animation-timing-function](https://www.w3school.com.cn/cssref/pr_animation-timing-function.asp "CSS3 animation-timing-function 属性") | 规定动画的速度曲线。                              | 3   |
| [animation-delay](https://www.w3school.com.cn/cssref/pr_animation-delay.asp "CSS3 animation-delay 属性")                               | 规定动画何时开始。                               | 3   |
| [animation-iteration-count](https://www.w3school.com.cn/cssref/pr_animation-iteration-count.asp "CSS3 animation-iteration-count 属性") | 规定动画被播放的次数。                             | 3   |
| [animation-direction](https://www.w3school.com.cn/cssref/pr_animation-direction.asp "CSS3 animation-direction 属性")                   | 规定动画是否在下一周期逆向地播放。                       | 3   |
| [animation-play-state](https://www.w3school.com.cn/cssref/pr_animation-play-state.asp "CSS3 animation-play-state 属性")                | 规定动画是否正在运行或暂停。                          | 3   |
| [animation-fill-mode](https://www.w3school.com.cn/cssref/pr_animation-fill-mode.asp "CSS3 animation-fill-mode 属性")                   | 规定对象动画时间之外的状态。                          | 3   |

```css
@keyframes animationname {keyframes-selector {css-styles;}}
animation: name duration timing-function delay iteration-count direction;    
animation-play-state: paused | running;
animation-fill-mode: none | forwards | backwards | both;
```

## CSS 背景属性（Background）

| 属性                                                                                                           | 描述                       | CSS |
| ------------------------------------------------------------------------------------------------------------ | ------------------------ | --- |
| [background](https://www.w3school.com.cn/cssref/pr_background.asp)                                           | 在一个声明中设置所有的背景属性。         | 1   |
| [background-attachment](https://www.w3school.com.cn/cssref/pr_background-attachment.asp)                     | 设置背景图像是否固定或者随着页面的其余部分滚动。 | 1   |
| [background-color](https://www.w3school.com.cn/cssref/pr_background-color.asp)                               | 设置元素的背景颜色。               | 1   |
| [background-image](https://www.w3school.com.cn/cssref/pr_background-image.asp)                               | 设置元素的背景图像。               | 1   |
| [background-position](https://www.w3school.com.cn/cssref/pr_background-position.asp)                         | 设置背景图像的开始位置。             | 1   |
| [background-repeat](https://www.w3school.com.cn/cssref/pr_background-repeat.asp)                             | 设置是否及如何重复背景图像。           | 1   |
| [background-clip](https://www.w3school.com.cn/cssref/pr_background-clip.asp "CSS3 background-clip 属性")       | 规定背景的绘制区域。               | 3   |
| [background-origin](https://www.w3school.com.cn/cssref/pr_background-origin.asp "CSS3 background-origin 属性") | 规定背景图片的定位区域。             | 3   |
| [background-size](https://www.w3school.com.cn/cssref/pr_background-size.asp "CSS3 background-size 属性")       | 规定背景图片的尺寸。               | 3   |

## CSS 边框属性（Border 和 Outline）

| 属性                                                                                                                                      | 描述                                             | CSS |
| --------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------- | --- |
| [border](https://www.w3school.com.cn/cssref/pr_border.asp)                                                                              | 在一个声明中设置所有的边框属性。                               | 1   |
| [border-bottom](https://www.w3school.com.cn/cssref/pr_border-bottom.asp)                                                                | 在一个声明中设置所有的下边框属性。                              | 1   |
| [border-bottom-color](https://www.w3school.com.cn/cssref/pr_border-bottom_color.asp)                                                    | 设置下边框的颜色。                                      | 2   |
| [border-bottom-style](https://www.w3school.com.cn/cssref/pr_border-bottom_style.asp)                                                    | 设置下边框的样式。                                      | 2   |
| [border-bottom-width](https://www.w3school.com.cn/cssref/pr_border-bottom_width.asp)                                                    | 设置下边框的宽度。                                      | 1   |
| [border-color](https://www.w3school.com.cn/cssref/pr_border-color.asp)                                                                  | 设置四条边框的颜色。                                     | 1   |
| [border-left](https://www.w3school.com.cn/cssref/pr_border-left.asp)                                                                    | 在一个声明中设置所有的左边框属性。                              | 1   |
| [border-left-color](https://www.w3school.com.cn/cssref/pr_border-left_color.asp)                                                        | 设置左边框的颜色。                                      | 2   |
| [border-left-style](https://www.w3school.com.cn/cssref/pr_border-left_style.asp)                                                        | 设置左边框的样式。                                      | 2   |
| [border-left-width](https://www.w3school.com.cn/cssref/pr_border-left_width.asp)                                                        | 设置左边框的宽度。                                      | 1   |
| [border-right](https://www.w3school.com.cn/cssref/pr_border-right.asp)                                                                  | 在一个声明中设置所有的右边框属性。                              | 1   |
| [border-right-color](https://www.w3school.com.cn/cssref/pr_border-right_color.asp)                                                      | 设置右边框的颜色。                                      | 2   |
| [border-right-style](https://www.w3school.com.cn/cssref/pr_border-right_style.asp)                                                      | 设置右边框的样式。                                      | 2   |
| [border-right-width](https://www.w3school.com.cn/cssref/pr_border-right_width.asp)                                                      | 设置右边框的宽度。                                      | 1   |
| [border-style](https://www.w3school.com.cn/cssref/pr_border-style.asp)                                                                  | 设置四条边框的样式。                                     | 1   |
| [border-top](https://www.w3school.com.cn/cssref/pr_border-top.asp)                                                                      | 在一个声明中设置所有的上边框属性。                              | 1   |
| [border-top-color](https://www.w3school.com.cn/cssref/pr_border-top_color.asp)                                                          | 设置上边框的颜色。                                      | 2   |
| [border-top-style](https://www.w3school.com.cn/cssref/pr_border-top_style.asp)                                                          | 设置上边框的样式。                                      | 2   |
| [border-top-width](https://www.w3school.com.cn/cssref/pr_border-top_width.asp)                                                          | 设置上边框的宽度。                                      | 1   |
| [border-width](https://www.w3school.com.cn/cssref/pr_border-width.asp)                                                                  | 设置四条边框的宽度。                                     | 1   |
| [outline](https://www.w3school.com.cn/cssref/pr_outline.asp)                                                                            | 在一个声明中设置所有的轮廓属性。                               | 2   |
| [outline-color](https://www.w3school.com.cn/cssref/pr_outline-color.asp)                                                                | 设置轮廓的颜色。                                       | 2   |
| [outline-style](https://www.w3school.com.cn/cssref/pr_outline-style.asp)                                                                | 设置轮廓的样式。                                       | 2   |
| [outline-width](https://www.w3school.com.cn/cssref/pr_outline-width.asp)                                                                | 设置轮廓的宽度。                                       | 2   |
| [border-bottom-left-radius](https://www.w3school.com.cn/cssref/pr_border-bottom-left-radius.asp "CSS3 border-bottom-left-radius 属性")    | 定义边框左下角的形状。                                    | 3   |
| [border-bottom-right-radius](https://www.w3school.com.cn/cssref/pr_border-bottom-right-radius.asp "CSS3 border-bottom-right-radius 属性") | 定义边框右下角的形状。                                    | 3   |
| [border-image](https://www.w3school.com.cn/cssref/pr_border-image.asp "CSS3 border-image 属性")                                           | 简写属性，设置所有 border-image-* 属性。                   | 3   |
| [border-image-outset](https://www.w3school.com.cn/cssref/pr_border-image-outset.asp "CSS3 border-image-outset 属性")                      | 规定边框图像区域超出边框的量。                                | 3   |
| [border-image-repeat](https://www.w3school.com.cn/cssref/pr_border-image-repeat.asp "CSS3 border-image-repeat 属性")                      | 图像边框是否应平铺(repeated)、铺满(rounded)或拉伸(stretched)。 | 3   |
| [border-image-slice](https://www.w3school.com.cn/cssref/pr_border-image-slice.asp "CSS3 border-image-slice 属性")                         | 规定图像边框的向内偏移。                                   | 3   |
| [border-image-source](https://www.w3school.com.cn/cssref/pr_border-image-source.asp "CSS3 border-image-source 属性")                      | 规定用作边框的图片。                                     | 3   |
| [border-image-width](https://www.w3school.com.cn/cssref/pr_border-image-width.asp "CSS3 border-image-width 属性")                         | 规定图片边框的宽度。                                     | 3   |
| [border-radius](https://www.w3school.com.cn/cssref/pr_border-radius.asp "CSS3 border-radius 属性")                                        | 简写属性，设置所有四个 border-*-radius 属性。                | 3   |
| [border-top-left-radius](https://www.w3school.com.cn/cssref/pr_border-top-left-radius.asp "CSS3 border-top-left-radius 属性")             | 定义边框左上角的形状。                                    | 3   |
| [border-top-right-radius](https://www.w3school.com.cn/cssref/pr_border-top-right-radius.asp "CSS3 border-top-right-radius 属性")          | 定义边框右下角的形状。                                    | 3   |
| box-decoration-break                                                                                                                    |                                                | 3   |
| [box-shadow](https://www.w3school.com.cn/cssref/pr_box-shadow.asp "CSS3 box-shadow 属性")                                                 | 向方框添加一个或多个阴影。                                  | 3   |

## Box 属性

| 属性                                                                                                  | 描述                                | CSS |
| --------------------------------------------------------------------------------------------------- | --------------------------------- | --- |
| [overflow-x](https://www.w3school.com.cn/cssref/pr_overflow-x.asp "CSS3 overflow-x 属性")             | 如果内容溢出了元素内容区域，是否对内容的左/右边缘进行裁剪。    | 3   |
| [overflow-y](https://www.w3school.com.cn/cssref/pr_overflow-y.asp "CSS3 overflow-y 属性")             | 如果内容溢出了元素内容区域，是否对内容的上/下边缘进行裁剪。    | 3   |
| [overflow-style](https://www.w3school.com.cn/cssref/pr_overflow-style.asp "CSS3 overflow-style 属性") | 规定溢出元素的首选滚动方法。                    | 3   |
| [rotation](https://www.w3school.com.cn/cssref/pr_rotation.asp "CSS3 rotation 属性")                   | 围绕由 rotation-point 属性定义的点对元素进行旋转。 | 3   |
| [rotation-point](https://www.w3school.com.cn/cssref/pr_rotation-point.asp "CSS3 rotation-point 属性") | 定义距离上左边框边缘的偏移点。                   | 3   |

## Color 属性

| 属性                                                                             | 描述                      | CSS |
| ------------------------------------------------------------------------------ | ----------------------- | --- |
| color-profile                                                                  | 允许使用源的颜色配置文件的默认以外的规范。   | 3   |
| [opacity](https://www.w3school.com.cn/cssref/pr_opacity.asp "CSS3 opacity 属性") | 规定元素的不透明级别。             | 3   |
| rendering-intent                                                               | 允许使用颜色配置文件渲染意图的默认以外的规范。 | 3   |

## Content for Paged Media 属性

| 属性                  | 描述                          | CSS |
| ------------------- | --------------------------- | --- |
| bookmark-label      | 规定书签的标记。                    | 3   |
| bookmark-level      | 规定书签的级别。                    | 3   |
| bookmark-target     | 规定书签链接的目标。                  | 3   |
| float-offset        | 将元素放在 float 属性通常放置的位置的相反方向。 | 3   |
| hyphenate-after     | 规定连字单词中连字符之后的最小字符数。         | 3   |
| hyphenate-before    | 规定连字单词中连字符之前的最小字符数。         | 3   |
| hyphenate-character | 规定当发生断字时显示的字符串。             | 3   |
| hyphenate-lines     | 指示元素中连续断字连线的最大数。            | 3   |
| hyphenate-resource  | 规定帮助浏览器确定断字点的外部资源（逗号分隔的列表）。 | 3   |
| hyphens             | 设置如何对单词进行拆分，以改善段落的布局。       | 3   |
| image-resolution    | 规定图像的正确分辨率。                 | 3   |
| marks               | 向文档添加裁切标记或十字标记。             | 3   |
| string-set          |                             | 3   |

## CSS 尺寸属性（Dimension）

| 属性                                                                     | 描述         | CSS |
| ---------------------------------------------------------------------- | ---------- | --- |
| [height](https://www.w3school.com.cn/cssref/pr_dim_height.asp)         | 设置元素高度。    | 1   |
| [max-height](https://www.w3school.com.cn/cssref/pr_dim_max-height.asp) | 设置元素的最大高度。 | 2   |
| [max-width](https://www.w3school.com.cn/cssref/pr_dim_max-width.asp)   | 设置元素的最大宽度。 | 2   |
| [min-height](https://www.w3school.com.cn/cssref/pr_dim_min-height.asp) | 设置元素的最小高度。 | 2   |
| [min-width](https://www.w3school.com.cn/cssref/pr_dim_min-width.asp)   | 设置元素的最小宽度。 | 2   |
| [width](https://www.w3school.com.cn/cssref/pr_dim_width.asp)           | 设置元素的宽度。   | 1   |

## 可伸缩框属性（Flexible Box）

| 属性                                                                                                           | 描述                      | CSS |
| ------------------------------------------------------------------------------------------------------------ | ----------------------- | --- |
| [box-align](https://www.w3school.com.cn/cssref/pr_box-align.asp "CSS3 box-align 属性")                         | 规定如何对齐框的子元素。            | 3   |
| [box-direction](https://www.w3school.com.cn/cssref/pr_box-direction.asp "CSS3 box-direction 属性")             | 规定框的子元素的显示方向。           | 3   |
| [box-flex](https://www.w3school.com.cn/cssref/pr_box-flex.asp "CSS3 box-flex 属性")                            | 规定框的子元素是否可伸缩。           | 3   |
| [box-flex-group](https://www.w3school.com.cn/cssref/pr_box-flex-group.asp "CSS3 box-flex-group 属性")          | 将可伸缩元素分配到柔性分组。          | 3   |
| [box-lines](https://www.w3school.com.cn/cssref/pr_box-lines.asp "CSS3 box-lines 属性")                         | 规定当超出父元素框的空间时，是否换行显示。   | 3   |
| [box-ordinal-group](https://www.w3school.com.cn/cssref/pr_box-ordinal-group.asp "CSS3 box-ordinal-group 属性") | 规定框的子元素的显示次序。           | 3   |
| [box-orient](https://www.w3school.com.cn/cssref/pr_box-orient.asp "CSS3 box-orient 属性")                      | 规定框的子元素是否应水平或垂直排列。      | 3   |
| [box-pack](https://www.w3school.com.cn/cssref/pr_box-pack.asp "CSS3 box-pack 属性")                            | 规定水平框中的水平位置或者垂直框中的垂直位置。 | 3   |

## CSS 字体属性（Font）

| 属性                                                                                  | 描述                  | CSS |
| ----------------------------------------------------------------------------------- | ------------------- | --- |
| [font](https://www.w3school.com.cn/cssref/pr_font_font.asp)                         | 在一个声明中设置所有字体属性。     | 1   |
| [font-family](https://www.w3school.com.cn/cssref/pr_font_font-family.asp)           | 规定文本的字体系列。          | 1   |
| [font-size](https://www.w3school.com.cn/cssref/pr_font_font-size.asp)               | 规定文本的字体尺寸。          | 1   |
| [font-size-adjust](https://www.w3school.com.cn/cssref/pr_font_font-size-adjust.asp) | 为元素规定 aspect 值。     | 2   |
| [font-stretch](https://www.w3school.com.cn/cssref/pr_font_font-stretch.asp)         | 收缩或拉伸当前的字体系列。       | 2   |
| [font-style](https://www.w3school.com.cn/cssref/pr_font_font-style.asp)             | 规定文本的字体样式。          | 1   |
| [font-variant](https://www.w3school.com.cn/cssref/pr_font_font-variant.asp)         | 规定是否以小型大写字母的字体显示文本。 | 1   |
| [font-weight](https://www.w3school.com.cn/cssref/pr_font_weight.asp)                | 规定字体的粗细。            | 1   |

## 内容生成（Generated Content）

| 属性                                                                                   | 描述                                   | CSS |
| ------------------------------------------------------------------------------------ | ------------------------------------ | --- |
| [content](https://www.w3school.com.cn/cssref/pr_gen_content.asp)                     | 与 :before 以及 :after 伪元素配合使用，来插入生成内容。 | 2   |
| [counter-increment](https://www.w3school.com.cn/cssref/pr_gen_counter-increment.asp) | 递增或递减一个或多个计数器。                       | 2   |
| [counter-reset](https://www.w3school.com.cn/cssref/pr_gen_counter-reset.asp)         | 创建或重置一个或多个计数器。                       | 2   |
| [quotes](https://www.w3school.com.cn/cssref/pr_gen_quotes.asp)                       | 设置嵌套引用的引号类型。                         | 2   |
| crop                                                                                 | 允许被替换元素仅仅是对象的矩形区域，而不是整个对象。           | 3   |
| move-to                                                                              | 从流中删除元素，然后在文档中后面的点上重新插入。             | 3   |
| page-policy                                                                          | 确定元素基于页面的 occurrence 应用于计数器还是字符串值。   | 3   |

## Grid 属性

| 属性                                                                                            | 描述           | CSS |
| --------------------------------------------------------------------------------------------- | ------------ | --- |
| [grid-columns](https://www.w3school.com.cn/cssref/pr_grid-columns.asp "CSS3 grid-columns 属性") | 规定网格中每个列的宽度。 | 3   |
| [grid-rows](https://www.w3school.com.cn/cssref/pr_grid-rows.asp "CSS3 grid-rows 属性")          | 规定网格中每个列的高度。 | 3   |

## Hyperlink 属性

| 属性                                                                                                     | 描述                                                | CSS |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------- | --- |
| [target](https://www.w3school.com.cn/cssref/pr_target.asp "CSS3 target 属性")                            | 简写属性，设置target-name、target-new以及target-position属性。 | 3   |
| [target-name](https://www.w3school.com.cn/cssref/pr_target-name.asp "CSS3 target-name 属性")             | 规定在何处打开链接（链接的目标）。                                 | 3   |
| [target-new](https://www.w3school.com.cn/cssref/pr_target-new.asp "CSS3 target-new 属性")                | 规定目标链接在新窗口还是在已有窗口的新标签页中打开。                        | 3   |
| [target-position](https://www.w3school.com.cn/cssref/pr_target-position.asp "CSS3 target-position 属性") | 规定在何处放置新的目标链接。                                    | 3   |

## CSS 列表属性（List）

| 属性                                                                                   | 描述               | CSS |
| ------------------------------------------------------------------------------------ | ---------------- | --- |
| [list-style](https://www.w3school.com.cn/cssref/pr_list-style.asp)                   | 在一个声明中设置所有的列表属性。 | 1   |
| [list-style-image](https://www.w3school.com.cn/cssref/pr_list-style-image.asp)       | 将图象设置为列表项标记。     | 1   |
| [list-style-position](https://www.w3school.com.cn/cssref/pr_list-style-position.asp) | 设置列表项标记的放置位置。    | 1   |
| [list-style-type](https://www.w3school.com.cn/cssref/pr_list-style-type.asp)         | 设置列表项标记的类型。      | 1   |
| marker-offset                                                                        |                  | 2   |

## CSS 外边距属性（Margin）

| 属性                                                                       | 描述               | CSS |
| ------------------------------------------------------------------------ | ---------------- | --- |
| [margin](https://www.w3school.com.cn/cssref/pr_margin.asp)               | 在一个声明中设置所有外边距属性。 | 1   |
| [margin-bottom](https://www.w3school.com.cn/cssref/pr_margin-bottom.asp) | 设置元素的下外边距。       | 1   |
| [margin-left](https://www.w3school.com.cn/cssref/pr_margin-left.asp)     | 设置元素的左外边距。       | 1   |
| [margin-right](https://www.w3school.com.cn/cssref/pr_margin-right.asp)   | 设置元素的右外边距。       | 1   |
| [margin-top](https://www.w3school.com.cn/cssref/pr_margin-top.asp)       | 设置元素的上外边距。       | 1   |

## Marquee 属性

| 属性                 | 描述         | CSS |
| ------------------ | ---------- | --- |
| marquee-direction  | 设置移动内容的方向。 | 3   |
| marquee-play-count | 设置内容移动多少次。 | 3   |
| marquee-speed      | 设置内容滚动得多快。 | 3   |
| marquee-style      | 设置移动内容的样式。 | 3   |

## 多列属性（Multi-column）

| 属性                                                                                                           | 描述                                      | CSS |
| ------------------------------------------------------------------------------------------------------------ | --------------------------------------- | --- |
| [column-count](https://www.w3school.com.cn/cssref/pr_column-count.asp "CSS3 column-count 属性")                | 规定元素应该被分隔的列数。                           | 3   |
| [column-fill](https://www.w3school.com.cn/cssref/pr_column-fill.asp "CSS3 column-fill 属性")                   | 规定如何填充列。                                | 3   |
| [column-gap](https://www.w3school.com.cn/cssref/pr_column-gap.asp "CSS3 column-gap 属性")                      | 规定列之间的间隔。                               | 3   |
| [column-rule](https://www.w3school.com.cn/cssref/pr_column-rule.asp "CSS3 column-rule 属性")                   | 设置所有 column-rule-* 属性的简写属性。             | 3   |
| [column-rule-color](https://www.w3school.com.cn/cssref/pr_column-rule-color.asp "CSS3 column-rule-color 属性") | 规定列之间规则的颜色。                             | 3   |
| [column-rule-style](https://www.w3school.com.cn/cssref/pr_column-rule-style.asp "CSS3 column-rule-style 属性") | 规定列之间规则的样式。                             | 3   |
| [column-rule-width](https://www.w3school.com.cn/cssref/pr_column-rule-width.asp "CSS3 column-rule-width 属性") | 规定列之间规则的宽度。                             | 3   |
| [column-span](https://www.w3school.com.cn/cssref/pr_column-span.asp "CSS3 column-span 属性")                   | 规定元素应该横跨的列数。                            | 3   |
| [column-width](https://www.w3school.com.cn/cssref/pr_column-width.asp "CSS3 column-width 属性")                | 规定列的宽度。                                 | 3   |
| [columns](https://www.w3school.com.cn/cssref/pr_columns.asp "CSS3 columns 属性")                               | 规定设置 column-width 和 column-count 的简写属性。 | 3   |

## CSS 内边距属性（Padding）

| 属性                                                                         | 描述               | CSS |
| -------------------------------------------------------------------------- | ---------------- | --- |
| [padding](https://www.w3school.com.cn/cssref/pr_padding.asp)               | 在一个声明中设置所有内边距属性。 | 1   |
| [padding-bottom](https://www.w3school.com.cn/cssref/pr_padding-bottom.asp) | 设置元素的下内边距。       | 1   |
| [padding-left](https://www.w3school.com.cn/cssref/pr_padding-left.asp)     | 设置元素的左内边距。       | 1   |
| [padding-right](https://www.w3school.com.cn/cssref/pr_padding-right.asp)   | 设置元素的右内边距。       | 1   |
| [padding-top](https://www.w3school.com.cn/cssref/pr_padding-top.asp)       | 设置元素的上内边距。       | 1   |

## Paged Media 属性

| 属性                | 描述                                    | CSS |
| ----------------- | ------------------------------------- | --- |
| fit               | 示意如何对width和height属性均不是auto的被替换元素进行缩放。 | 3   |
| fit-position      | 定义盒内对象的对齐方式。                          | 3   |
| image-orientation | 规定用户代理应用于图像的顺时针方向旋转。                  | 3   |
| page              | 规定元素应该被显示的页面特定类型。                     | 3   |
| size              | 规定页面内容包含框的尺寸和方向。                      | 3   |

## CSS 定位属性（Positioning）

| 属性                                                                             | 描述                          | CSS |
| ------------------------------------------------------------------------------ | --------------------------- | --- |
| [bottom](https://www.w3school.com.cn/cssref/pr_pos_bottom.asp)                 | 设置定位元素下外边距边界与其包含块下边界之间的偏移。  | 2   |
| [clear](https://www.w3school.com.cn/cssref/pr_class_clear.asp)                 | 规定元素的哪一侧不允许其他浮动元素。          | 1   |
| [clip](https://www.w3school.com.cn/cssref/pr_pos_clip.asp)                     | 剪裁绝对定位元素。                   | 2   |
| [cursor](https://www.w3school.com.cn/cssref/pr_class_cursor.asp)               | 规定要显示的光标的类型（形状）。            | 2   |
| [display](https://www.w3school.com.cn/cssref/pr_class_display.asp)             | 规定元素应该生成的框的类型。              | 1   |
| [float](https://www.w3school.com.cn/cssref/pr_class_float.asp)                 | 规定框是否应该浮动。                  | 1   |
| [left](https://www.w3school.com.cn/cssref/pr_pos_left.asp)                     | 设置定位元素左外边距边界与其包含块左边界之间的偏移。  | 2   |
| [overflow](https://www.w3school.com.cn/cssref/pr_pos_overflow.asp)             | 规定当内容溢出元素框时发生的事情。           | 2   |
| [position](https://www.w3school.com.cn/cssref/pr_class_position.asp)           | 规定元素的定位类型。                  | 2   |
| [right](https://www.w3school.com.cn/cssref/pr_pos_right.asp)                   | 设置定位元素右外边距边界与其包含块右边界之间的偏移。  | 2   |
| [top](https://www.w3school.com.cn/cssref/pr_pos_top.asp)                       | 设置定位元素的上外边距边界与其包含块上边界之间的偏移。 | 2   |
| [vertical-align](https://www.w3school.com.cn/cssref/pr_pos_vertical-align.asp) | 设置元素的垂直对齐方式。                | 1   |
| [visibility](https://www.w3school.com.cn/cssref/pr_class_visibility.asp)       | 规定元素是否可见。                   | 2   |
| [z-index](https://www.w3school.com.cn/cssref/pr_pos_z-index.asp)               | 设置元素的堆叠顺序。                  | 2   |

## CSS 打印属性（Print）

| 属性                                                                                                                | 描述                          | CSS |
| ----------------------------------------------------------------------------------------------------------------- | --------------------------- | --- |
| orphans                                                                                                           | 设置当元素内部发生分页时必须在页面底部保留的最少行数。 | 2   |
| [page-break-after](https://www.w3school.com.cn/cssref/pr_print_page-break-after.asp "CSS page-break-after 属性")    | 设置元素后的分页行为。                 | 2   |
| [page-break-before](https://www.w3school.com.cn/cssref/pr_print_page-break-before.asp "CSS page-break-before 属性") | 设置元素前的分页行为。                 | 2   |
| [page-break-inside](https://www.w3school.com.cn/cssref/pr_print_page-break-inside.asp "CSS page-break-inside 属性") | 设置元素内部的分页行为。                | 2   |
| widows                                                                                                            | 设置当元素内部发生分页时必须在页面顶部保留的最少行数。 | 2   |

## CSS 表格属性（Table）

| 属性                                                                               | 描述                     | CSS |
| -------------------------------------------------------------------------------- | ---------------------- | --- |
| [border-collapse](https://www.w3school.com.cn/cssref/pr_tab_border-collapse.asp) | 规定是否合并表格边框。            | 2   |
| [border-spacing](https://www.w3school.com.cn/cssref/pr_tab_border-spacing.asp)   | 规定相邻单元格边框之间的距离。        | 2   |
| [caption-side](https://www.w3school.com.cn/cssref/pr_tab_caption-side.asp)       | 规定表格标题的位置。             | 2   |
| [empty-cells](https://www.w3school.com.cn/cssref/pr_tab_empty-cells.asp)         | 规定是否显示表格中的空单元格上的边框和背景。 | 2   |
| [table-layout](https://www.w3school.com.cn/cssref/pr_tab_table-layout.asp)       | 设置用于表格的布局算法。           | 2   |

## CSS 文本属性（Text）

| 属性                                                                                                                 | 描述                                      | CSS |
| ------------------------------------------------------------------------------------------------------------------ | --------------------------------------- | --- |
| [color](https://www.w3school.com.cn/cssref/pr_text_color.asp)                                                      | 设置文本的颜色。                                | 1   |
| [direction](https://www.w3school.com.cn/cssref/pr_text_direction.asp)                                              | 规定文本的方向 / 书写方向。                         | 2   |
| [letter-spacing](https://www.w3school.com.cn/cssref/pr_text_letter-spacing.asp)                                    | 设置字符间距。                                 | 1   |
| [line-height](https://www.w3school.com.cn/cssref/pr_dim_line-height.asp)                                           | 设置行高。                                   | 1   |
| [text-align](https://www.w3school.com.cn/cssref/pr_text_text-align.asp)                                            | 规定文本的水平对齐方式。                            | 1   |
| [text-decoration](https://www.w3school.com.cn/cssref/pr_text_text-decoration.asp)                                  | 规定添加到文本的装饰效果。                           | 1   |
| [text-indent](https://www.w3school.com.cn/cssref/pr_text_text-indent.asp)                                          | 规定文本块首行的缩进。                             | 1   |
| text-shadow                                                                                                        | 规定添加到文本的阴影效果。                           | 2   |
| [text-transform](https://www.w3school.com.cn/cssref/pr_text_text-transform.asp)                                    | 控制文本的大小写。                               | 1   |
| [unicode-bidi](https://www.w3school.com.cn/cssref/pr_unicode-bidi.asp)                                             | 设置文本方向。                                 | 2   |
| [white-space](https://www.w3school.com.cn/cssref/pr_text_white-space.asp)                                          | 规定如何处理元素中的空白。                           | 1   |
| [word-spacing](https://www.w3school.com.cn/cssref/pr_text_word-spacing.asp)                                        | 设置单词间距。                                 | 1   |
| [hanging-punctuation](https://www.w3school.com.cn/cssref/pr_hanging-punctuation.asp "CSS3 hanging-punctuation 属性") | 规定标点字符是否位于线框之外。                         | 3   |
| [punctuation-trim](https://www.w3school.com.cn/cssref/pr_punctuation-trim.asp "CSS3 punctuation-trim 属性")          | 规定是否对标点字符进行修剪。                          | 3   |
| text-align-last                                                                                                    | 设置如何对齐最后一行或紧挨着强制换行符之前的行。                | 3   |
| [text-emphasis](https://www.w3school.com.cn/cssref/pr_text-emphasis.asp "CSS3 text-emphasis 属性")                   | 向元素的文本应用重点标记以及重点标记的前景色。                 | 3   |
| [text-justify](https://www.w3school.com.cn/cssref/pr_text-justify.asp "CSS3 text-justify 属性")                      | 规定当 text-align 设置为 "justify" 时所使用的对齐方法。 | 3   |
| [text-outline](https://www.w3school.com.cn/cssref/pr_text-outline.asp "CSS3 text-outline 属性")                      | 规定文本的轮廓。                                | 3   |
| [text-overflow](https://www.w3school.com.cn/cssref/pr_text-overflow.asp "CSS3 text-overflow 属性")                   | 规定当文本溢出包含元素时发生的事情。                      | 3   |
| [text-shadow](https://www.w3school.com.cn/cssref/pr_text-shadow.asp "CSS3 text-shadow 属性")                         | 向文本添加阴影。                                | 3   |
| [text-wrap](https://www.w3school.com.cn/cssref/pr_text-wrap.asp "CSS3 text-wrap 属性")                               | 规定文本的换行规则。                              | 3   |
| [word-break](https://www.w3school.com.cn/cssref/pr_word-break.asp "CSS3 word-break 属性")                            | 规定非中日韩文本的换行规则。                          | 3   |
| [word-wrap](https://www.w3school.com.cn/cssref/pr_word-wrap.asp "CSS3 word-wrap 属性")                               | 允许对长的不可分割的单词进行分割并换行到下一行。                | 3   |

## 2D/3D 转换属性（Transform）

| 属性                                                                                                                 | 描述                   | CSS |
| ------------------------------------------------------------------------------------------------------------------ | -------------------- | --- |
| [transform](https://www.w3school.com.cn/cssref/pr_transform.asp "CSS3 transform 属性")                               | 向元素应用 2D 或 3D 转换。    | 3   |
| [transform-origin](https://www.w3school.com.cn/cssref/pr_transform-origin.asp "CSS3 transform-origin 属性")          | 允许你改变被转换元素的位置。       | 3   |
| [transform-style](https://www.w3school.com.cn/cssref/pr_transform-style.asp "CSS3 transform-style 属性")             | 规定被嵌套元素如何在 3D 空间中显示。 | 3   |
| [perspective](https://www.w3school.com.cn/cssref/pr_perspective.asp "CSS3 perspective 属性")                         | 规定 3D 元素的透视效果。       | 3   |
| [perspective-origin](https://www.w3school.com.cn/cssref/pr_perspective-origin.asp "CSS3 perspective-origin 属性")    | 规定 3D 元素的底部位置。       | 3   |
| [backface-visibility](https://www.w3school.com.cn/cssref/pr_backface-visibility.asp "CSS3 backface-visibility 属性") | 定义元素在不面对屏幕时是否可见。     | 3   |

## 过渡属性（Transition）

| 属性                                                                                                                                      | 描述                     | CSS |
| --------------------------------------------------------------------------------------------------------------------------------------- | ---------------------- | --- |
| [transition](https://www.w3school.com.cn/cssref/pr_transition.asp "CSS3 transition 属性")                                                 | 简写属性，用于在一个属性中设置四个过渡属性。 | 3   |
| [transition-property](https://www.w3school.com.cn/cssref/pr_transition-property.asp "CSS3 transition-property 属性")                      | 规定应用过渡的 CSS 属性的名称。     | 3   |
| [transition-duration](https://www.w3school.com.cn/cssref/pr_transition-duration.asp "CSS3 transition-duration 属性")                      | 定义过渡效果花费的时间。           | 3   |
| [transition-timing-function](https://www.w3school.com.cn/cssref/pr_transition-timing-function.asp "CSS3 transition-timing-function 属性") | 规定过渡效果的时间曲线。           | 3   |
| [transition-delay](https://www.w3school.com.cn/cssref/pr_transition-delay.asp "CSS3 transition-delay 属性")                               | 规定过渡效果何时开始。            | 3   |

## 用户界面属性（User-interface）

| 属性                                                                                                  | 描述                           | CSS |
| --------------------------------------------------------------------------------------------------- | ---------------------------- | --- |
| [appearance](https://www.w3school.com.cn/cssref/pr_appearance.asp "CSS3 appearance 属性")             | 允许您将元素设置为标准用户界面元素的外观         | 3   |
| [box-sizing](https://www.w3school.com.cn/cssref/pr_box-sizing.asp "CSS3 box-sizing 属性")             | 允许您以确切的方式定义适应某个区域的具体内容。      | 3   |
| [icon](https://www.w3school.com.cn/cssref/pr_icon.asp "CSS3 icon 属性")                               | 为创作者提供使用图标化等价物来设置元素样式的能力。    | 3   |
| [nav-down](https://www.w3school.com.cn/cssref/pr_nav-down.asp "CSS3 nav-down 属性")                   | 规定在使用 arrow-down 导航键时向何处导航。  | 3   |
| [nav-index](https://www.w3school.com.cn/cssref/pr_nav-index.asp "CSS3 nav-index 属性")                | 设置元素的 tab 键控制次序。             | 3   |
| [nav-left](https://www.w3school.com.cn/cssref/pr_nav-left.asp "CSS3 nav-left 属性")                   | 规定在使用 arrow-left 导航键时向何处导航。  | 3   |
| [nav-right](https://www.w3school.com.cn/cssref/pr_nav-right.asp "CSS3 nav-right 属性")                | 规定在使用 arrow-right 导航键时向何处导航。 | 3   |
| [nav-up](https://www.w3school.com.cn/cssref/pr_nav-up.asp "CSS3 nav-up 属性")                         | 规定在使用 arrow-up 导航键时向何处导航。    | 3   |
| [outline-offset](https://www.w3school.com.cn/cssref/pr_outline-offset.asp "CSS3 outline-offset 属性") | 对轮廓进行偏移，并在超出边框边缘的位置绘制轮廓。     | 3   |
| [resize](https://www.w3school.com.cn/cssref/pr_resize.asp "CSS3 resize 属性")                         | 规定是否可由用户对元素的尺寸进行调整。          | 3   |

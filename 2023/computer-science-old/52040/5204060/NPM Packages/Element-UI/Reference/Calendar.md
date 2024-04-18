## [¶](https://element.eleme.cn/#/zh-CN/component/calendar#calendar-calendar) Calendar calendar

显示日期

### [¶](https://element.eleme.cn/#/zh-CN/component/calendar#ji-ben) 基本

| 一 | 二 | 三 | 四 | 五 | 六 | 日 |
| --- | --- | --- | --- | --- | --- | --- |
| 
27

 | 

28

 | 

29

 | 

30

 | 

1

 | 

2

 | 

3

 |
| 

4

 | 

5

 | 

6

 | 

7

 | 

8

 | 

9

 | 

10

 |
| 

11

 | 

12

 | 

13

 | 

14

 | 

15

 | 

16

 | 

17

 |
| 

18

 | 

19

 | 

20

 | 

21

 | 

22

 | 

23

 | 

24

 |
| 

25

 | 

26

 | 

27

 | 

28

 | 

29

 | 

30

 | 

31

 |
| 

1

 | 

2

 | 

3

 | 

4

 | 

5

 | 

6

 | 

7

 |

### [¶](https://element.eleme.cn/#/zh-CN/component/calendar#zi-ding-yi-nei-rong) 自定义内容

| 一 | 二 | 三 | 四 | 五 | 六 | 日 |
| --- | --- | --- | --- | --- | --- | --- |
| 
06-27

 | 

06-28

 | 

06-29

 | 

06-30

 | 

07-01

 | 

07-02

 | 

07-03

 |
| 

07-04

 | 

07-05

 | 

07-06

 | 

07-07

 | 

07-08

 | 

07-09

 | 

07-10

 |
| 

07-11

 | 

07-12

 | 

07-13

 | 

07-14

 | 

07-15

 | 

07-16

 | 

07-17

 |
| 

07-18

 | 

07-19

 | 

07-20

 | 

07-21

 | 

07-22

 | 

07-23

 | 

07-24

 |
| 

07-25

 | 

07-26

 | 

07-27

 | 

07-28

 | 

07-29

 | 

07-30

 | 

07-31

 |
| 

08-01

 | 

08-02

 | 

08-03

 | 

08-04

 | 

08-05

 | 

08-06

 | 

08-07

 |

### [¶](https://element.eleme.cn/#/zh-CN/component/calendar#zi-ding-yi-fan-wei) 自定义范围

| 一 | 二 | 三 | 四 | 五 | 六 | 日 |
| --- | --- | --- | --- | --- | --- | --- |
| 
4

 | 

5

 | 

6

 | 

7

 | 

8

 | 

9

 | 

10

 |
| 

11

 | 

12

 | 

13

 | 

14

 | 

15

 | 

16

 | 

17

 |
| 

18

 | 

19

 | 

20

 | 

21

 | 

22

 | 

23

 | 

24

 |

### [¶](https://element.eleme.cn/#/zh-CN/component/calendar#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | Date/string/number | — | — |
| range | 时间范围，包括开始时间与结束时间。开始时间必须是周一，结束时间必须是周日，且时间跨度不能超过两个月。 | Array | — | — |
| first-day-of-week | 周起始日 | Number | 1 到 7 | 1 |

### [¶](https://element.eleme.cn/#/zh-CN/component/calendar#datecell-scoped-slot-can-shu) dateCell scoped slot 参数

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| date | 单元格代表的日期 | Date | — | — |
| data | { type, isSelected, day}，`type` 表示该日期的所属月份，可选值有 prev-month，current-month，next-month；`isSelected` 标明该日期是否被选中；`day` 是格式化的日期，格式为 yyyy-MM-dd | Object | — | — |
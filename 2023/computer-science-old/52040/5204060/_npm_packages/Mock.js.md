<!-- @format -->

# Mock.js

[Official](http://mockjs.com/examples.html) | [GitHub](https://github.com/nuysoft/Mock/wiki/Getting-Started)

## Basic

### Node (CommonJS)

```js
// 使用 Mock
var Mock = require('mockjs');
var data = Mock.mock({
  // 属性 list 的值是一个数组，其中含有 1 到 10 个元素
  'list|1-10': [
    {
      // 属性 id 是一个自增数，起始值为 1，每次增 1
      'id|+1': 1,
    },
  ],
});
// 输出结果
console.log(JSON.stringify(data, null, 4));
```

### Bower

```shell
# 安装
npm install -g bower
bower install --save mockjs
```

```html
<script type="text/javascript" src="./bower_components/mockjs/dist/mock.js"></script>
```

### RequireJS (AMD)

```js
// 配置 Mock 路径
require.config({
  paths: {
    mock: 'http://mockjs.com/dist/mock',
  },
});
// 加载 Mock
require(['mock'], function (Mock) {
  // 使用 Mock
  var data = Mock.mock({
    'list|1-10': [
      {
        'id|+1': 1,
      },
    ],
  });
  // 输出结果
  document.body.innerHTML += '<pre>' + JSON.stringify(data, null, 4) + '</pre>';
});
```

```js
// ==>
{
    "list": [
        {
            "id": 1
        },
        {
            "id": 2
        },
        {
            "id": 3
        }
    ]
}
```

[JSFiddle](http://jsfiddle.net/nzcsxd76/)

### Sea.js (CMD)

因为 Sea.js 社区尚未提供 webpack 插件，所以 Mock.js 暂**不完整**支持通过 Sea.js 加载。

一种变通的方式是，依然通过 Sea.js 配置和加载 Mock.js，然后访问全局变量 Mock。

```js
// 配置 Mock 路径
seajs.config({
  alias: {
    mock: 'http://mockjs.com/dist/mock.js',
  },
});

// 加载 Mock
seajs.use('mock', function (__PLACEHOLDER) {
  // 使用 Mock（全局变量）
  var data = Mock.mock({
    'list|1-10': [
      {
        'id|+1': 1,
      },
    ],
  });
  document.body.innerHTML += '<pre>' + JSON.stringify(data, null, 4) + '</pre>';
});
```

[JSFiddle](http://jsfiddle.net/3za48nwd/1/)

### Random CLI

```shell
# 全局安装
$ npm install mockjs -g

# 执行
$ random url
# => http://rmcpx.org/funzwc

# 帮助
random -h
```

### Sea.js (CMD)

因为 Sea.js 社区尚未提供 webpack 插件，所以 Mock.js 暂**不完整**支持通过 Sea.js 加载。

一种变通的方式是，依然通过 Sea.js 配置和加载 Mock.js，然后访问全局变量 Mock。

````js
// 配置 Mock 路径
seajs.config({
    alias: {
        mock: 'http://mockjs.com/dist/mock.js'
    }
})

// 加载 Mock
seajs.use('mock', function(__PLACEHOLDER) {
    // 使用 Mock（全局变量）
### Usage


```json
// Random.range( stop )
[0,1,2,3,4,5,6,7,8,9]
[0,1,2,3,4,5,6,7,8,9]

// Random.range( start, stop )
[3,4,5,6]
[3,4,5,6]

// Random.range( start, stop, step )
[1,3,5,7,9]
[1,4,7]

[1,3,5,7,9]
[1,4,7]
````

    var data = Mock.mock({
        'list|1-10': [{
            'id|+1': 1
        }]
    });
    document.body.innerHTML +=
        '<pre>' +
        JSON.stringify(data, null, 4) +
        '</pre>'

})

````

[JSFiddle](http://jsfiddle.net/3za48nwd/1/)
### String
#### `'name|min-max': string`

```js
Mock.mock({
  'string|1-10': '★',
});
````

Result

```json
{
  "string": "★★★★"
}
```

#### `'name|min-max': string`

```js
Mock.mock({
  'string|1-10': '★',
});
```

Result

```json
{
  "string": "★★★★"
}
```

### Number

#### `'name|+1': number`

```js
Mock.mock({
  'number|+1': 202,
});
```

Result

```json
{
  "number": 201
}
```

#### `'name|min-max': number`

```js
Mock.mock({
  'number|1-100': 100,
});
```

Result

```json
{
  "number": 49
}
```

#### `'name|min-max.dmin-dmax': number`

```js
Mock.mock({
  'number|1-100.1-10': 1,
});
```

Result

```json
{
  "number": 34.568
}
```

```js
Mock.mock({
  'number|123.1-10': 1,
});
```

Result

```json
{
  "number": 123.2851
}
```

```js
Mock.mock({
  'number|123.3': 1,
});
```

Result

```json
{
  "number": 123.603
}
```

```js
Mock.mock({
  'number|123.10': 1.123,
});
```

Result

```json
{
  "number": 123.1233796766
}
```

### Boolean

#### `'name|min-max.dmin-dmax': number`

```js
Mock.mock({
  'number|1-100.1-10': 1,
});
```

Result

```json
{
  "number": 34.568
}
```

```js
Mock.mock({
  'number|123.1-10': 1,
});
```

Result

```json
{
  "number": 123.2851
}
```

```js
Mock.mock({
  'number|123.3': 1,
});
```

Result

```json
{
  "number": 123.603
}
```

```js
Mock.mock({
  'number|123.10': 1.123,
});
```

Result

````json
{
  "number": 123.1233796766
}
#### `'name|1': boolean`

```js
Mock.mock({
  'boolean|1': true,
});
````

Result

```json
{
  "boolean": true
}
```

````
### Object

#### `'name|count': object`

```js
Mock.mock({
  'object|2': {
    310000: '上海市',
    320000: '江苏省',
    330000: '浙江省',
    340000: '安徽省',
  },
});
````

Result

```json
{
  "object": {
    "310000": "上海市",
    "330000": "浙江省"
  }
}
```

#### `'name|min-max': object`

```js
Mock.mock({
  'object|2-4': {
    110000: '北京市',
    120000: '天津市',
    130000: '河北省',
    140000: '山西省',
  },
});
```

Result

```json
{
  "object": {
    "110000": "北京市",
    "120000": "天津市",
    "140000": "山西省"
  }
}
```

### Array

#### `'name|1': array`

```js
Mock.mock({
  'array|1': ['AMD', 'CMD', 'UMD'],
});
```

Result

```json
{
  "array": "CMD"
}
```

#### `'name|+1': array`

```js
Mock.mock({
  'array|+1': ['AMD', 'CMD', 'UMD'],
});
```

Result

```json
{
  "array": "AMD"
}
```

```js
Mock.mock({
  'array|1-10': [
    {
      'name|+1': ['Hello', 'Mock.js', '!'],
    },
  ],
});
```

Result

```json
{
  "array": [
    {
      "name": "Hello"
    },
    {
      "name": "Mock.js"
    }
  ]
}
```

#### `'name|min-max': array`

```js
Mock.mock({
  'array|1-10': ['Mock.js'],
});
```

Result

```json
{
  "array": ["Mock.js", "Mock.js", "Mock.js", "Mock.js", "Mock.js"]
}
```

```js
Mock.mock({
  'array|1-10': ['Hello', 'Mock.js', '!'],
});
```

Result

```json
{
  "array": ["Hello", "Mock.js", "!", "Hello", "Mock.js", "!", "Hello", "Mock.js", "!", "Hello", "Mock.js", "!", "Hello", "Mock.js", "!", "Hello", "Mock.js", "!"]
}
```

#### `'name|count': array`

```js
Mock.mock({
  'array|3': ['Mock.js'],
});
```

Result

```json
{
  "array": ["Mock.js", "Mock.js", "Mock.js"]
}
```

```js
Mock.mock({
  'array|3': ['Hello', 'Mock.js', '!'],
});
```

Result

```json
{
  "array": ["Hello", "Mock.js", "!", "Hello", "Mock.js", "!", "Hello", "Mock.js", "!"]
}
```

### Function

'name': function

```js
Mock.mock({
  foo: 'Syntax Demo',
  name: function () {
    return this.foo;
  },
});
```

Result

```json
{
  "foo": "Syntax Demo",
  "name": "Syntax Demo"
}
```

### RegExp

#### `'name': regexp`

```js
Mock.mock({
  regexp: /[a-z][a-z][0-9]/,
});
```

Result

```json
{
  "regexp": "fT6"
}
```

```js
Mock.mock({
  regexp: /\w\W\s\S\d\D/,
});
```

Result

```json
{
  "regexp": "a}\r21("
}
```

```js
Mock.mock({
  regexp: /\d{5,10}/,
});
```

Result

```json
{
  "regexp": "364182"
}
```

```js
Mock.mock({
  'regexp|3': /\d{5,10}\-/,
});
```

Result

```json
{
  "regexp": "4558771-4586813-72284-7011383-"
}
```

```js
Mock.mock({
  'regexp|1-5': /\d{5,10}\-/,
});
```

Result

```json
{
  "regexp": "777494-906145432-6414882714-155440213-4772380587-625486394-"
}
```

### Path

Absolute Path

```js
Mock.mock({
  foo: 'Hello',
  nested: {
    a: {
      b: {
        c: 'Mock.js',
      },
    },
  },
  absolutePath: '@/foo @/nested/a/b/c',
});
```

Result

```json
{
  "foo": "Hello",
  "nested": {
    "a": {
      "b": {
        "c": "Mock.js"
      }
    }
  },
  "absolutePath": "Hello Mock.js"
}
```

Relative Path

```js
Mock.mock({
  foo: 'Hello',
  nested: {
    a: {
      b: {
        c: 'Mock.js',
      },
    },
  },
  relativePath: {
    a: {
      b: {
        c: '@../../../foo @../../../nested/a/b/c',
      },
    },
  },
});
```

Result

```json
{
  "foo": "Hello",
  "nested": {
    "a": {
      "b": {
        "c": "Mock.js"
      }
    }
  },
  "relativePath": {
    "a": {
      "b": {
        "c": "Hello Mock.js"
      }
    }
  }
}
```

## 数据占位符定义

## 数据占位符定义

#### `Random.boolean( min?, max?, current? )`

```js
// Random.boolean()
Random.boolean();
Mock.mock('@boolean');
Mock.mock('@boolean()');

// Random.boolean( min, max, current )
Random.boolean(1, 9, true);
Mock.mock('@boolean(1, 9, true)');
```

Result

```json

// Random.boolean()
false
false
true

// Random.boolean( min, max, current )
false
false

```

#### `Random.natural( min?, max? )`

```js
// Random.natural()
Random.natural();
Mock.mock('@natural');
Mock.mock('@natural()');

// Random.natural( min )
Random.natural(10000);
Mock.mock('@natural(10000)');

// Random.natural( min, max )
Random.natural(60, 100);
Mock.mock('@natural(60, 100)');
```

Result

```json
// Random.natural()
704349161488920
7392433134411996
63170797008507

// Random.natural( min )
2646536878548652
2118588825260443

// Random.natural( min, max )
76
91
```

#### `Random.integer( min?, max? )`

```js
// Random.integer()
Random.integer();
Mock.mock('@integer');
Mock.mock('@integer()');

// Random.integer( min )
Random.integer(10000);
Mock.mock('@integer(10000)');

// Random.integer( min, max )
Random.integer(60, 100);
Mock.mock('@integer(60, 100)');
```

Result

```json
// Random.integer()
5954071820529336
7093546499779856
5686482116057458

// Random.integer( min )
8371436398279726
4064265854955771

// Random.integer( min, max )
88
88
```

#### `Random.float( min?, max?, dmin?, dmax? )`

```js
// Random.float()
Random.float();
Mock.mock('@float');
Mock.mock('@float()');

// Random.float( min )
Random.float(0);
Mock.mock('@float(0)');

// Random.float( min, max )
Random.float(60, 100);
Mock.mock('@float(60, 100)');

// Random.float( min, max, dmin )
Random.float(60, 100, 3);
Mock.mock('@float(60, 100, 3)');

// Random.float( min, max, dmin, dmax )
Random.float(60, 100, 3, 5);
Mock.mock('@float(60, 100, 3, 5)');
```

Result

```json
// Random.float()
-5001210940075489
-2834095511136630.5
-6056966097490601

// Random.float( min )
7665220647039834
5340317881258613

// Random.float( min, max )
80.7227432
65.9

// Random.float( min, max, dmin )
89.8764396
61.14137640326942

// Random.float( min, max, dmin, dmax )
97.3015
70.3077
```

#### `Random.character( pool? )`

```js
// Random.character()
Random.character();
Mock.mock('@character');
Mock.mock('@character()');

// Random.character( 'lower/upper/number/symbol' )
Random.character('lower');
Random.character('upper');
Random.character('number');
Random.character('symbol');

Mock.mock('@character("lower")');
Mock.mock('@character("upper")');
Mock.mock('@character("number")');
Mock.mock('@character("symbol")');

// Random.character( pool )
Random.character('aeiou');
Mock.mock('@character("aeiou")');
```

Result

```json
// Random.character()
"n"
"w"
"K"

// Random.character( 'lower/upper/number/symbol' )
"j"
"P"
"5"
"!"

"n"
"D"
"1"
")"

// Random.character( pool )
"i"
"o"
```

#### `Random.string( pool?, min?, max? )`

```js
// Random.string()
Random.string();
Mock.mock('@string');
Mock.mock('@string()');

// Random.string( length )
Random.string(5);
Mock.mock('@string(5)');

// Random.string( pool, length )
Random.string('lower', 5);
Random.string('upper', 5);
Random.string('number', 5);
Random.string('symbol', 5);
Random.string('aeiou', 5);

Mock.mock('@string("lower", 5)');
Mock.mock('@string("upper", 5)');
Mock.mock('@string("number", 5)');
Mock.mock('@string("symbol", 5)');
Mock.mock('@string("aeiou", 5)');

// Random.string( min, max )
Random.string(7, 10);
Mock.mock('@string(7, 10)');

// Random.string( pool, min, max )
Random.string('lower', 1, 3);
Random.string('upper', 1, 3);
Random.string('number', 1, 3);
Random.string('symbol', 1, 3);
Random.string('aeiou', 1, 3);

Mock.mock('@string("lower", 1, 3)');
Mock.mock('@string("upper", 1, 3)');
Mock.mock('@string("number", 1, 3)');
Mock.mock('@string("symbol", 1, 3)');
Mock.mock('@string("aeiou", 1, 3)');
```

Result

```json
// Random.string()
"6hh4O"
"S^euYv"
"t)Kw(("

// Random.string( length )
"M43hf"
"j6PH\*"

// Random.string( pool, length )
"ixesx"
"PWCDH"
"85460"
"^[)]#"
"ooaai"

"hosvk"
"TSKIU"
"34755"
"\*$^^#"
"uuoio"

// Random.string( min, max )
"70unqSSLF"
"cb\*Ooh!6r"

// Random.string( pool, min, max )
"c"
"H"
"64"
"#]"
"ii"

"ipa"
"SD"
"677"
"$@"
"aoi"
```

#### `Random.range(start?, stop, step?)`

```js
// Random.range( stop )
Random.range(10);
Mock.mock('@range(10)');

// Random.range( start, stop )
Random.range(3, 7);
Mock.mock('@range(3, 7)');

// Random.range( start, stop, step )
Random.range(1, 10, 2);
Random.range(1, 10, 3);

Mock.mock('@range(1, 10, 2)');
Mock.mock('@range(1, 10, 3)');
```

Result

```json
// Random.range( stop )
[0,1,2,3,4,5,6,7,8,9]
[0,1,2,3,4,5,6,7,8,9]

// Random.range( start, stop )
[3,4,5,6]
[3,4,5,6]

// Random.range( start, stop, step )
[1,3,5,7,9]
[1,4,7]

[1,3,5,7,9]
[1,4,7]
```

### Date

#### `Random.range(start?, stop, step?)`

```js
// Random.range( stop )
Random.range(10);
Mock.mock('@range(10)');

// Random.range( start, stop )
Random.range(3, 7);
Mock.mock('@range(3, 7)');

// Random.range( start, stop, step )
Random.range(1, 10, 2);
Random.range(1, 10, 3);

Mock.mock('@range(1, 10, 2)');
Mock.mock('@range(1, 10, 3)');
```

Result

```json
// Random.range( stop )
[0,1,2,3,4,5,6,7,8,9]
[0,1,2,3,4,5,6,7,8,9]

// Random.range( start, stop )
[3,4,5,6]
[3,4,5,6]

// Random.range( start, stop, step )
[1,3,5,7,9]
[1,4,7]

[1,3,5,7,9]
[1,4,7]
```

#### `Random.time( format? )`

```js
// Random.time()
Random.time();
Mock.mock('@time');
Mock.mock('@time()');

// Random.time( format )
Random.time('A HH:mm:ss');
Random.time('a HH:mm:ss');
Random.time('HH:mm:ss');
Random.time('H:m:s');

Mock.mock('@time("A HH:mm:ss")');
Mock.mock('@time("a HH:mm:ss")');
Mock.mock('@time("HH:mm:ss")');
Mock.mock('@time("H:m:s")');

Mock.mock('@datetime("HH H hh h mm m ss s SS S A a T")');
```

Result

```json
// Random.time()
"02:00:53"
"05:28:54"
"11:58:55"

// Random.time( format )
"AM 08:39:19"
"pm 20:55:45"
"23:49:41"
"5:44:21"

"PM 17:13:15"
"am 03:00:29"
"05:16:28"
"21:41:12"

"05 5 05 5 17 17 25 25 370 370 AM am 677103445370"
```

#### `Random.datetime( format? )`

```js
// Random.datetime()
Random.datetime();
Mock.mock('@datetime');
Mock.mock('@datetime()');

// Random.datetime( format )
Random.datetime('yyyy-MM-dd A HH:mm:ss');
Random.datetime('yy-MM-dd a HH:mm:ss');
Random.datetime('y-MM-dd HH:mm:ss');
Random.datetime('y-M-d H:m:s');

Mock.mock('@datetime("yyyy-MM-dd A HH:mm:ss")');
Mock.mock('@datetime("yy-MM-dd a HH:mm:ss")');
Mock.mock('@datetime("y-MM-dd HH:mm:ss")');
Mock.mock('@datetime("y-M-d H:m:s")');

Mock.mock('@datetime("yyyy yy y MM M dd d HH H hh h mm m ss s SS S A a T")');
```

Result

```json
// Random.datetime()
"1974-09-15 17:04:24"
"2016-09-17 20:22:48"
"1980-10-21 07:08:59"

// Random.datetime( format )
"1986-08-16 AM 00:02:22"
"94-01-16 am 02:11:21"
"93-10-24 19:30:17"
"83-5-4 19:10:57"

"2008-09-26 PM 23:28:32"
"74-11-13 am 11:42:08"
"04-10-08 17:32:05"
"75-8-18 1:40:30"

"2016 16 16 10 10 21 21 21 21 09 9 14 14 16 16 005 5 PM pm 1477055656005"
```

#### `Random.now( unit?, format? )`

```js
// Ranndom.now()
Random.now();
Mock.mock('@now');
Mock.mock('@now()');

// Ranndom.now( unit )
Random.now('year');
Random.now('month');
Random.now('week');
Random.now('day');
Random.now('hour');
Random.now('minute');
Random.now('second');

// Ranndom.now( format )
Random.now('yyyy-MM-dd HH:mm:ss SS');

// Ranndom.now( unit, format )
Random.now('day', 'yyyy-MM-dd HH:mm:ss SS');
```

Result

```json
// Ranndom.now()
"2023-03-01 14:55:33"
"2023-03-01 14:55:33"
"2023-03-01 14:55:33"

// Ranndom.now( unit )
"2023-01-01 00:00:00"
"2023-03-01 00:00:00"
"2023-02-26 00:00:00"
"2023-03-01 00:00:00"
"2023-03-01 14:00:00"
"2023-03-01 14:55:00"
"2023-03-01 14:55:33"

// Ranndom.now( format )
"2023-03-01 14:55:33 445"

// Ranndom.now( unit, format )
"2023-03-01 00:00:00 000"
```

### Image

#### `Random.image( size?, background?, foreground?, format?, text? )`

```js
// Random.image()
Random.image();
// Random.image( size )
Random.image('200x100');
// Random.image( size, background )
Random.image('200x100', '#FF6600');
// Random.image( size, background, text )
Random.image('200x100', '#4A7BF7', 'Hello');
// Random.image( size, background, foreground, text )
Random.image('200x100', '#50B347', '#FFF', 'Mock.js');
// Random.image( size, background, foreground, format, text )
Random.image('200x100', '#894FC4', '#FFF', 'png', '!');
```

Result

### `Random.dataImage( size?, text? )`

```js
// Random.dataImage()
Random.dataImage();

// Random.dataImage( size )
Random.dataImage('200x100');

// Random.dataImage( size, text )
Random.dataImage('200x100', 'Hello Mock.js!');
```

Result

### Color

#### `Random.color()`

```js
// Random.color()
Random.color();
Mock.mock('@color');
Mock.mock('@color()');
```

Result

```json
// Random.color()
"#a1f279"
"#f279c4"
"#79e7f2"
```

#### `Random.hex()`

```js
// Random.hex()
Random.hex();
Mock.mock('@hex');
Mock.mock('@hex()');
```

Result

```json
// Random.hex()
"#f2d979"
"#b679f2"
"#79f292"
```

#### `Random.rgb()`

```js
// Random.rgb()
Random.rgb();
Mock.mock('@rgb');
Mock.mock('@rgb()');
```

Result

```json
// Random.rgb()
"rgb(242, 121, 130)"
"rgb(121, 166, 242)"
"rgb(201, 242, 121)"
```

#### `Random.rgba()`

```js
// Random.rgba()
Random.rgba();
Mock.mock('@rgba');
Mock.mock('@rgba()');
```

Result

```json
// Random.rgba()
"rgba(242, 121, 236, 0.45)"
"rgba(121, 242, 212, 0.04)"
"rgba(242, 176, 121, 0.54)"
```

#### `Random.hsl()`

```js
// Random.hsl()
Random.hsl();
Mock.mock('@hsl');
Mock.mock('@hsl()');
```

Result

```json
// Random.hsl()
"hsl(250, 82, 71)"
"hsl(112, 82, 71)"
"hsl(335, 82, 71)"
```

### Text

#### `Random.paragraph( min?, max? )`

```js
// Random.paragraph()
Random.paragraph();

Mock.mock('@paragraph');

Mock.mock('@paragraph()');

// Random.paragraph( len )
Random.paragraph(2);

Mock.mock('@paragraph(2)');

// Random.paragraph( min, max )
Random.paragraph(1, 3);

Mock.mock('@paragraph(1, 3)');
```

Result

```json
// Random.paragraph()
"Wruzoqhsea ohriwd qcnz lasfg iuwhmz vcykzwkef fqes kcxfaavqx fjweu dnvenhiof oxaspfdcci dvyxhajt sgzgdnup berqbib ofmesfbcn umperby mvshn. Jezghynkia vhgbgs sihw gkyrqdw ymxofg msc jmevexob djghbgf qmyccsvsu bmxcb onhu hgkmamt blncmmmlvu. Stjuhpc dni piiyb nkhb hccnaqc vblcnuj cfwntpr ujcantv qudwzhdwg ldhfwpm zoulg cnm booxjw funnomfv. Qpsvoefxro ikwvffiu gvmeum xvhbbx tvqkqhmdw fcbfw uumb wgkbk bdk lfxfb dlzeldzgf phvvkq oskcv uhpps zdjje ybvx."

"Wqmi zrghm ssfdrtdq ibdvsuivi lxfekhri yfa lxnhnn gokptznd lpmk btdfruxo hmxjlry sqevnwvv juq bochmr qeddu lvmxo svglc amh. Dhpj cenwxf xlscg uhl trinkd luojcoslks thifddp fyuocnmcrm euo ymyuxqfz uuhrkq wyqqps swsypn qqewonwhl ihhlnqovc tvuqwiuy. Ivivojius flwbb yqtzqgx wplldpole noqsiuigxv rmlv ighmn jxitbfl qclg joerdppwyr bhwinyfxf epjqod jvxgovywl uubt reqlp yvrvrende pwvazgsez bpkfnzmt. Wjpomq ikctk bodf iido iximyp ogkgqm jfr syfpatc iwidgglfgd bfyd fba tjzvxelde iemw. Fatdvfo rkelkt ohdv qovwry opkyc srnbn teqlgtqkq xqxeqdj kullcbv htpjn gdphxyouc mfcfdwa qcugzp cgpe fyfsbvxp rcbkqgwk. Pxohq mnstiki ckoy yxvrdj rxmpnqss arcgg terogreexu wmh gdqnfthaln rzwt itoj hxf dhcskrjh znorgyc ipmcswi nzwoyqvt kbxqtx. Xhalw sdnkb rqoh mfngismvj rsnywim xnsnyntle ojtnmgcg dmj cfyjqub ekft fhccwmg nsjnhromv apaf ocbukt."

"Ralmw svqkzxupg gucjyt xdo wtnmocyc mqqd rrfkskupi jryp povocekp tfdectlaks yhoxclu yynallhrm lvcbvyg uqzxddtx. Upo nhlkmqql fhkfkwo jbfxtoxnb vifyjhyoba nthlb mdysnu vriviomue afaomhdw iqclxqa aopazidpeg vtwmohllv. Bsoflh ccgwkupwlc bsncxwr ypnjqojnl imfu vxbnjmuss riumnk pbbmi svcrknpk iydiwhh bqkfnoq onncezhj kajs halt lia ndiuvg. Axno iryd upf pykuqaq ckogs ogkfl tvvikdbgam jymiwro wumsfofn cdesleqj vvcqfgo iisfxbern uutlkfpe. Wdxuaoyp ukett cqxfkcca iqle sbibuk ndamvs exujdt cghwylg zhppa ffnzvyjei hsxb hcxqftf zlkefqxye hcouccnj cxjrxll fqjkukdb hjbauk."

// Random.paragraph( len )
"Mpukue urimy fypqq pejo anxzv nzperxqn yruo rcd ptsaxz xoobw vqebg uomad pwgmlfg qfis epsbhs wvtosfm. Bocnfogee kmc ymjjxobt rixufdgxp zmyabfhxv lqmlu mcitc oemi yqhlvvzoy rvpeq ixrv htsl mwitifajt."

"Dwhsupne jbztopinej wnhojwfl cewxgydc qjmtduylyx fuuvr osonifyxb hwdxywy jrcq syeh wyurcqohq kvxup mmvylmqas bokypthefv tbddmk. Vhbrdosfl nurxospn hfetk etkdwdun ztmkiw njctwcxs yzfe yiin pruisd wlfrvrmsnh oviezxxi gxtfoqg gkqy rbk jto iesvg svrn."

// Random.paragraph( min, max )
"Bonq vpdt cnmvk stvricm sratls jrmoognl agpxymfqyj exmr jjowbvnkn mfokltkde fkti qvngi vrirmfsn mtgnk nrukyd oessc mbdldecxg. Ykdmq mknpwbfu txwqhdhjz mptmpn kywhc ruvi uhto piw ovuzqdvirt snwyqc obvgnwr wak psrukdcl kqptmabu."

"Doxxybyaqw rsocbx vpojogcwh ejivuknbfc regubis okhwwqh zxuv enlgxdtul mwglc rrro vjvlhr xehme afpybfz bphkvhymm npr hdbobash. Tcxmlk tequ hbnoophnp nwd ffbrxpujj cvj tbk eomejrojih iun mnicg qosesvd ngubwe osklb sfmqe tlyfmzrxl fqrgcd hzwkqb."
```

#### `Random.sentence( min?, max? )`

```js
// Random.sentence()
Random.sentence();
Mock.mock('@sentence');
Mock.mock('@sentence()');

// Random.sentence( len )
Random.sentence(5);
Mock.mock('@sentence(5)');

// Random.sentence( min, max )
Random.sentence(3, 5);
Mock.mock('@sentence(3, 5)');
```

Result

```json
// Random.sentence()
"Lrslh llfspaj wao gmiud mphriylqw agx buqjh low ncrxchqj jyfcs qevt mbzrs scqdn ctdhpgoprv sudmmmg."
"Qqhnuboy hecnge xesif rtoiuqtjb amifan kpkcb buj hwznledsd gouohad sndl dmpbh gkeqo mmpxtbrqmg."
"Kwdbjv cxhjwofjz vygvvajrl npnmuidtm bki tvtpfmpul tceomyy mqr nmhlfcpcyh csimwdxuf ijwyecv fxoivyglsf gxssqescr."

// Random.sentence( len )
"Uehp nrowk ocfrrd kbqufblpw spwikk."
"Oxgdcxuw rlrsvp wpxrms veqq ebntp."

// Random.sentence( min, max )
"Ahtoj mouj kfgxzbwic pcqkmvcfmh."
"Bailc uouhr tybeu wqntiqdern hbji."
```

#### `Random.word( min?, max? )`

```js
// Random.word()
Random.word();
Mock.mock('@word');
Mock.mock('@word()');

// Random.word( len )
Random.word(5);
Mock.mock('@word(5)');

// Random.word( min, max )
Random.word(3, 5);
Mock.mock('@word(3, 5)');
```

Result

```json
// Random.word()
"ljdvywr"
"iojttkwtx"
"aevtkyqpa"

// Random.word( len )
"jicsb"
"jiknl"

// Random.word( min, max )
"ixfg"
"wow"
```

#### `Random.title( min?, max? )`

```js
// Random.title()
Random.title();
Mock.mock('@title');
Mock.mock('@title()');

// Random.title( len )
Random.title(5);
Mock.mock('@title(5)');

// Random.title( min, max )
Random.title(3, 5);
Mock.mock('@title(3, 5)');
```

Result

```json
// Random.title()
"Rfstescnj Uqeo Hhfjlqub Yvayfwqcgq Ipoktw Jyhymrvxr"
"Ottg Djz Gveicdy Sreyykcxn Curzhtzjs Pmp"
"Crobqjgop Khucn Xsx"

// Random.title( len )
"Rsgqfa Dcapxjseme Nxnncxh Lxeb Xhnettm"
"Wdqc Zhlgqp Wcdy Hfhtw Oexdjq"

// Random.title( min, max )
"Rilxfub Unypj Ypnpvp Qjnisaxpqa Lpllek"
"Ypwepoyd Dydqwfxj Gdxwn Ydfynthqu Uai"
```

#### `Random.cparagraph( min?, max? )`

```js
// Random.cparagraph()
Random.cparagraph();

Mock.mock('@cparagraph');

Mock.mock('@cparagraph()');

// Random.cparagraph( len )
Random.cparagraph(2);

Mock.mock('@cparagraph(2)');

// Random.cparagraph( min, max )
Random.cparagraph(1, 3);

Mock.mock('@cparagraph(1, 3)');
```

Result

```json
// Random.cparagraph()
"特把反中理该连照石越王况张人。观量两去住影称过先型山回始斗党空他。理起条京极究则来心级须约战么所省。位却品写才光公素如始少却。机在当称克十化习中生装化回保年存议。特容分石员计太党白西广各华认北七。选复江经克造信可现方社比装东高选。"

"反行发候就列也速青半口照向毛斗里集公。高江白效南之果使等红进条多定都办代。断任思按时号色格状干样切院团龙组矿日。出何做是确江等况复基满边。结表委员派白省看引集率三提料复以。只般义品将越道外多方铁光交品了应开。"

"同果研前矿世么主统局料精出文风京。构几等高际工到革当动交米使元道话们。手并正到条回例争及部种电包两。"

// Random.cparagraph( len )
"象出常识支样难布步效目也素例油素。而速龙需近行且号处保每到三想。"

"四用求人名领精起较点和细率广色利少半。团型近际种却标心动军七知划。"

// Random.cparagraph( min, max )
"快按可包两业军布中专每论公专。回装维通通方维完立计信当就半内原标气。"

"快容回打可见确展可内装消约。题改利近又技信天交张书单老完将花。族代并社国但后者用住正放华就听道七持。"
```

#### `Random.csentence( min?, max? )`

```js
// Random.csentence()
Random.csentence();
Mock.mock('@csentence');
Mock.mock('@csentence()');

// Random.csentence( len )
Random.csentence(5);
Mock.mock('@csentence(5)');

// Random.csentence( min, max )
Random.csentence(3, 5);
Mock.mock('@csentence(3, 5)');
```

Result

```json
// Random.csentence()
"白厂类听了话里很内只名切王次。"
"引进局引长求门而权度就政而事。"
"素重精今听无于前则我极效业容照百。"

// Random.csentence( len )
"千又利可或。"
"化民包易只。"

// Random.csentence( min, max )
"者家族府。"
"声半话半原。"
```

#### `Random.cword( pool?, min?, max? )`

```js
// Random.cword()
Random.cword();
Mock.mock('@cword');
Mock.mock('@cword()');

// Random.cword( pool )
Random.cword('零一二三四五六七八九十');
Mock.mock('@cword("零一二三四五六七八九十")');

// Random.cword( length )
Random.cword(3);
Mock.mock('@cword(3)');

// Random.cword( pool, length )
Random.cword('零一二三四五六七八九十', 3);
Mock.mock('@cword("零一二三四五六七八九十", 3)');

// Random.cword( min, max )
Random.cword(3, 5);
Mock.mock('@cword(3, 5)');

// Random.cword( pool, min, max )
Random.cword('零一二三四五六七八九十', 5, 7);
Mock.mock('@cword("零一二三四五六七八九十", 5, 7)');
```

Result

```json
// Random.cword()
"六"
"下"
"地"

// Random.cword( pool )
"七"
"零"

// Random.cword( length )
"无清信"
"说在情"

// Random.cword( pool, length )
"八五一"
"六五五"

// Random.cword( min, max )
"军原军按队"
"易克布能小"

// Random.cword( pool, min, max )
"八五六三三"
"七七一五九"
```

#### `Random.ctitle( min?, max? )`

```js
// Random.ctitle()
Random.ctitle();
Mock.mock('@ctitle');
Mock.mock('@ctitle()');

// Random.ctitle( len )
Random.ctitle(5);
Mock.mock('@ctitle(5)');

// Random.ctitle( min, max )
Random.ctitle(3, 5);
Mock.mock('@ctitle(3, 5)');
```

Result

```json
// Random.ctitle()
"火验除任无专"
"派变想消现拉务"
"报现论工"

// Random.ctitle( len )
"规象群七与"
"还力世或管"

// Random.ctitle( min, max )
"明办水解整"
"适头海展"
```

### Name

#### `Random.first()`

```js
// Random.first()
Random.first();
Mock.mock('@first');
Mock.mock('@first()');
```

Result

```json
// Random.first()
"Margaret"
"Jason"
"Karen"
```

#### `Random.last()`

```js
// Random.last()
Random.last();
Mock.mock('@last');
Mock.mock('@last()');
```

Result

```json
// Random.last()
"Harris"
"Robinson"
"White"
```

#### `Random.name( middle? )`

```js
// Random.name()
Random.name();
Mock.mock('@name');
Mock.mock('@name()');

// Random.name( middle )
Random.name(true);
Mock.mock('@name(true)');
```

Result

```json
// Random.name()
"Donna Taylor"
"Daniel Johnson"
"Elizabeth White"

// Random.name( middle )
"Ronald Brian Taylor"
"Joseph Jose Wilson"
```

#### `Random.cfirst()`

```js
// Random.cfirst()
Random.cfirst();
Mock.mock('@cfirst');
Mock.mock('@cfirst()');
```

Result

```json
// Random.cfirst()
"万"
"史"
"宋"
```

#### `Random.clast()`

```js
// Random.clast()
Random.clast();
Mock.mock('@clast');
Mock.mock('@clast()');
```

Result

```json
// Random.clast()
"明"
"军"
"杰"
```

#### `Random.cname()`

```js
// Random.cname()
Random.cname();
Mock.mock('@cname');
Mock.mock('@cname()');
```

Result

```json
// Random.cname()
"彭秀英"
"熊丽"
"郝超"
```

### Web

#### `Random.url()`

```js
// Random.url()
Random.url();
Mock.mock('@url');
Mock.mock('@url()');
```

Result

```json
// Random.url()
"cid://mksufzko.org/mfuvr"
"prospero://kwiq.mr/kbjudttt"
"prospero://jsben.bv/tvtjfmg"
```

#### `Random.domain()`

```js
// Random.domain()
Random.domain();
Mock.mock('@domain');
Mock.mock('@domain()');
```

Result

```json
// Random.domain()
"ynr.eh"
"esalqvuh.tr"
"mwetp.name"
```

#### `Random.protocol()`

```js
// Random.protocol()
Random.protocol();
Mock.mock('@protocol');
Mock.mock('@protocol()');
```

Result

```json
// Random.protocol()
"cid"
"cid"
"mid"
```

#### `Random.tld()`

```js
// Random.tld()
Random.tld();
Mock.mock('@tld');
Mock.mock('@tld()');
```

Result

```json
// Random.tld()
"kh"
"ye"
"ye"
```

#### `Random.email()`

```js
// Random.email()
Random.email();
Mock.mock('@email');
Mock.mock('@email()');
```

Result

```json
// Random.email()
"k.brircuu@qpbepne.vu"
"f.oufxyyohhm@kwte.cf"
"k.ecevxxk@gqj.es"
```

#### `Random.ip()`

```js
// Random.ip()
Random.ip();
Mock.mock('@ip');
Mock.mock('@ip()');
```

Result

```json
// Random.ip()
"202.126.237.110"
"77.53.236.145"
"58.234.192.159"
```

### Address

#### `Random.region()`

```js
// Random.region()
Random.region();
Mock.mock('@region');
Mock.mock('@region()');
```

Result

```json
// Random.region()
"华南"
"西北"
"华东"
```

#### `Random.province()`

```js
// Random.province()
Random.province();
Mock.mock('@province');
Mock.mock('@province()');
```

Result

```json
// Random.province()
"上海"
"云南省"
"江苏省"
```

#### `Random.city( prefix? )`

```js
// Random.city()
Random.city();
Mock.mock('@city');
Mock.mock('@city()');
// Random.city( prefix )
Random.city(true);
Mock.mock('@city(true)');
```

Result

```json
// Random.city()
"新余市"
"黄南藏族自治州"
"大连市"
// Random.city( prefix )
"海南省 三亚市"
"吉林省 通化市"
```

#### `Random.county( prefix? )`

```js
// Random.county()
Random.county();
Mock.mock('@county');
Mock.mock('@county()');
// Random.county( prefix )
Random.county(true);
Mock.mock('@county(true)');
```

Result

```json
// Random.county()
"东丽区"
"深水埗区"
"金湾区"
// Random.county( prefix )
"广西壮族自治区 贵港市 覃塘区"
"山东省 东营市 广饶县"
```

#### `Random.zip()`

```js
// Random.zip()
Random.zip();
Mock.mock('@zip');
Mock.mock('@zip()');
```

Result

```json
// Random.zip()
"048851"
"838126"
"295646"
```

### Helper

#### `Random.capitalize( word )`

```js
// Random.capitalize( word )
Random.capitalize('hello');
Mock.mock('@capitalize("hello")');
```

Result

```json
// Random.capitalize( word )
"Hello"
"Hello"
```

#### `Random.upper( str )`

```js
// Random.upper( str )
Random.upper('hello');
Mock.mock('@upper("hello")');
```

Result

```json
// Random.upper( str )
"HELLO"
"HELLO"
```

#### `Random.lower( str )`

```js
// Random.lower( str )
Random.lower('HELLO');
Mock.mock('@lower("HELLO")');
```

Result

```json
// Random.lower( str )
"hello"
"hello"
```

#### `Random.pick( arr )`

```js
// Random.pick( arr )
Random.pick(['a', 'e', 'i', 'o', 'u']);
Mock.mock('@pick(["a", "e", "i", "o", "u"])');
```

Result

```json
// Random.pick( arr )
"i"
"o"
```

#### `Random.shuffle( arr )`

```js
// Random.shuffle( arr )
Random.shuffle(['a', 'e', 'i', 'o', 'u']);
Mock.mock('@shuffle(["a", "e", "i", "o", "u"])');
```

Result

```json
// Random.shuffle( arr )
["i","e","u","a","o"]
["i","e","o","a","u"]
```

### Miscellaneous

#### `Random.guid()`

```js
// Random.guid()
Random.guid();
Mock.mock('@guid');
Mock.mock('@guid()');
```

Result

```json
// Random.guid()
"3D3d8aF8-11C8-F1A4-7d2F-E4b3c73becd8"
"2cF7d768-8BFf-DAEF-F15f-BB1dCaABa17d"
"Ac1b98Bd-EAEF-65Bf-D019-EF989BE5caeA"
```

#### `Random.id()`

```js
// Random.id()
Random.id();
Mock.mock('@id');
Mock.mock('@id()');
```

Result

```json
// Random.id()
"510000201208253834"
"130000198111231270"
"530000199903099262"
```

#### `Random.increment( step? )`

```js
// Random.increment()
Random.increment();
Mock.mock('@increment');
Mock.mock('@increment()');

// Random.increment( step )
Random.increment(100);
Mock.mock('@increment(100)');
Random.increment(1000);
Mock.mock('@increment(1000)');
```

Result

```json
// Random.increment()
1
2
3

// Random.increment( step )
103
203
1203
2203
```

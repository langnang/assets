# input type=file

- [显示 .xls, .xlsx, .csv 文件...](#显示-xls-xlsx-csv-文件)
- [只显示 Excel (.xlsx) 文件...](#只显示-excel-xlsx-文件)
- [只显示 Excel (.xls) 文件...](#只显示-excel-xls-文件)
- [只显示图片.](#只显示图片)
- [只显示文本文件...](#只显示文本文件)
- [只显示 html 文件.](#只显示-html-文件)
- [只显示 video 文件..](#只显示-video-文件)
- [只显示 audio 文件...](#只显示-audio-文件)
- [只显示 .WAV 文件...](#只显示-wav-文件)
- [只显示 .PDF 文件...](#只显示-pdf-文件)

## 显示 .xls, .xlsx, .csv 文件...

```html
<input
	type="file"
	accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
	id="fileSelect"
	runat="server"
/>
```

## 只显示 Excel (.xlsx) 文件...

```html
<input
	type="file"
	accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
	id="fileSelect"
	runat="server"
/>
```

## 只显示 Excel (.xls) 文件...

```html
<input
	type="file"
	accept="application/vnd.ms-excel"
	id="fileSelect"
	runat="server"
/>
```

## 只显示图片.

```html
<input type="file" accept="image/*" id="fileSelect" runat="server" />
```

## 只显示文本文件...

```html
<input type="file" accept="text/plain" id="fileSelect" runat="server" />
```

## 只显示 html 文件.

```html
<input type="file" accept="text/html" id="fileSelect" runat="server" />
```

## 只显示 video 文件..

```html
<input type="file" accept="video/*" id="fileSelect" runat="server" />
```

## 只显示 audio 文件...

```html
<input type="file" accept="audio/*" id="fileSelect" runat="server" />
```

## 只显示 .WAV 文件...

```html
<input type="file" accept=".wav" id="fileSelect" runat="server" />
```

## 只显示 .PDF 文件...

```html
<input type="file" accept=".pdf" id="fileSelect" runat="server" />
```

<!-- @format -->

# Windows Bat

## 遍历当前目录下所有文件

```
%%cmd
for
```

```
%%cmd
notedown --version
cd D:\OneDrive\langnang.chen@outlook.com\OneDrive\Nutstore\Langnang\Computer_Science_npm_packages\element-ui\2.15.10
for %%i in (.\*.md) do notedown "%%i" > "%%~dpni.ipynb"
```

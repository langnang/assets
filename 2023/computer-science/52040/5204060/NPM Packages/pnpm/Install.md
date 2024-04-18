# 安装

## 通过脚本安装

在 POSIX 类系统上，即使尚未安装 Node.js，也可以使用以下脚本安装 pnpm：

```sh
curl -fsSL https://get.pnpm.io/install.sh | sh -
```

如果没有安装 curl，可以使用 wget：

```sh
wget -qO- https://get.pnpm.io/install.sh | sh -
```

在 Windows 系统上（PowerShell）：

```powershell
iwr https://get.pnpm.io/install.ps1 -useb | iex
```

然后就可以使用 [pnpm env](https://www.pnpm.cn/cli/env) 命令来安装 Node.js 了。

## Using Corepack

Since v16.13, Node.js is shipping [Corepack](https://nodejs.org/api/corepack.html) for managing package managers. This is an experimental feature, so you need to enable it by running:

```text
corepack enable
```

This will automatically install pnpm on your system. However, it probably  won't be the latest version of pnpm. To upgrade it, check what is the [latest pnpm version](https://github.com/pnpm/pnpm/releases/latest) and run:

```text
corepack prepare pnpm@<version> --activate
```

## 使用 npm

```sh
npm install -g pnpm
```

## 使用 Homebrew 安装 pnpm

如果你已经安装了 Homebrew 软件包管理器，则可以使用如下命令赖安装 pnpm：

```text
brew install pnpm
```

## 使用 Scoop 安装 pnpm

如果你已经安装了 Scoop，就可以通过一下命令安装 pnpm：

```text
scoop install nodejs-lts pnpm
```

##### 

##### tip

你是否需要在 CI 服务器上使用 pnpm？请参阅 [持续集成](https://www.pnpm.cn/continuous-integration) 章节。

## 兼容性

以下列表列出了以往的 pnpm 版本和对应支持的 Node.js 版本。

| Node.js    | pnpm 4 | pnpm 5 | pnpm 6 | pnpm 7 |
| ---------- | ------ | ------ | ------ | ------ |
| Node.js 10 | ✔️      | ✔️      | ❌      | ❌      |
| Node.js 12 | ✔️      | ✔️      | ✔️      | ❌      |
| Node.js 14 | ✔️      | ✔️      | ✔️      | ✔️      |
| Node.js 16 | ?️      | ?️      | ✔️      | ✔️      |
| Node.js 18 | ?️      | ?️      | ✔️      | ✔️      |

## 故障排查

如果 pnpm 损坏并且无法通过重装来修复的话，你可能需要从 PATH 环境变量中将其手动删除。

加如你在执行 `pnpm install` 命令时遇到如下报错：

```text
C:\src>pnpm install
internal/modules/cjs/loader.js:883
  throw err;
  ^



Error: Cannot find module 'C:\Users\Bence\AppData\Roaming\npm\pnpm-global\4\node_modules\pnpm\bin\pnpm.js'
←[90m    at Function.Module._resolveFilename (internal/modules/cjs/loader.js:880:15)←[39m
←[90m    at Function.Module._load (internal/modules/cjs/loader.js:725:27)←[39m
←[90m    at Function.executeUserEntryPoint [as runMain] (internal/modules/run_main.js:72:12)←[39m
←[90m    at internal/main/run_main_module.js:17:47←[39m {
  code: ←[32m'MODULE_NOT_FOUND'←[39m,
  requireStack: []
}
```

首先，请尝试通过运行 `which pnpm` 命令来确定 pnpm 的安装位置。如果你使用的是 Windows 系统，请在 Git Bash 中运行此命令。 上述命令执行后，你将获得 pnpm 的安装位置，例如：

```text
$ which pnpm
/c/Program Files/nodejs/pnpm
```

现在你知道 pnpm CLI 的安装位置了，请打开该位置的目录并删除所有于 pnpm 相关的文件（例如 `pnpm.cmd`、`pnpx.cmd`、 `pnpm` 等）。 执行上述操作后，再重新安装 pnpm，应该就能用了。

## 卸载 pnpm

如果你需要从系统中删除 pnpm CLI 以及其写入到磁盘中的所有文件的话，请参阅 [卸载 pnpm](https://www.pnpm.cn/uninstall)。
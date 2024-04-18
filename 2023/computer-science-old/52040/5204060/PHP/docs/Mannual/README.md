---
created: 2022-07-27T20:08:22 (UTC +08:00)
tags: []
source: https://www.php.net/manual/zh/index.php
author: 作者:
   
     Mehdi  Achour
---

# PHP: PHP 手册 - Manual

> ## Excerpt
> Friedhelm  Betz

---
Friedhelm Betz

Antony Dovgal

Nuno Lopes

Hannes Magnusson

Georg Richter

Damien Seguy

Jakub Vrana

2022-07-27

中文翻译人员：

戴劼

乔楚

袁玉强

王远之

段小强

陈伯乐

周梦康

肖理达

肖盛文

褚兆玮

© 1997-2022 PHP 文档组

-   [版权信息](https://www.php.net/manual/zh/copyright.php)
-   [PHP 手册](https://www.php.net/manual/zh/manual.php)
    -   [序言](https://www.php.net/manual/zh/preface.php)
-   [入门指引](https://www.php.net/manual/zh/getting-started.php)
    -   [简介](https://www.php.net/manual/zh/introduction.php)
    -   [简明教程](https://www.php.net/manual/zh/tutorial.php)
-   [安装与配置](https://www.php.net/manual/zh/install.php)
    -   [安装前需要考虑的事项](https://www.php.net/manual/zh/install.general.php)
    -   [Unix 系统下的安装](https://www.php.net/manual/zh/install.unix.php)
    -   [macOS 系统下的安装](https://www.php.net/manual/zh/install.macosx.php)
    -   [Windows 系统下的安装](https://www.php.net/manual/zh/install.windows.php)
    -   [云计算平台上的安装](https://www.php.net/manual/zh/install.cloud.php)
    -   [FastCGI 进程管理器（FPM）](https://www.php.net/manual/zh/install.fpm.php)
    -   [PECL 扩展库安装](https://www.php.net/manual/zh/install.pecl.php)
    -   [还有问题？](https://www.php.net/manual/zh/install.problems.php)
    -   [运行时配置](https://www.php.net/manual/zh/configuration.php)
-   [语言参考](https://www.php.net/manual/zh/langref.php)
    -   [基本语法](https://www.php.net/manual/zh/language.basic-syntax.php)
    -   [类型](https://www.php.net/manual/zh/language.types.php)
    -   [变量](https://www.php.net/manual/zh/language.variables.php)
    -   [常量](https://www.php.net/manual/zh/language.constants.php)
    -   [表达式](https://www.php.net/manual/zh/language.expressions.php)
    -   [运算符](https://www.php.net/manual/zh/language.operators.php)
    -   [流程控制](https://www.php.net/manual/zh/language.control-structures.php)
    -   [函数](https://www.php.net/manual/zh/language.functions.php)
    -   [类与对象](https://www.php.net/manual/zh/language.oop5.php)
    -   [命名空间](https://www.php.net/manual/zh/language.namespaces.php)
    -   [枚举](https://www.php.net/manual/zh/language.enumerations.php)
    -   [错误](https://www.php.net/manual/zh/language.errors.php)
    -   [异常](https://www.php.net/manual/zh/language.exceptions.php)
    -   [纤程](https://www.php.net/manual/zh/language.fibers.php)
    -   [生成器](https://www.php.net/manual/zh/language.generators.php)
    -   [注解](https://www.php.net/manual/zh/language.attributes.php)
    -   [引用的解释](https://www.php.net/manual/zh/language.references.php)
    -   [预定义变量](https://www.php.net/manual/zh/reserved.variables.php)
    -   [预定义异常](https://www.php.net/manual/zh/reserved.exceptions.php)
    -   [预定义接口](https://www.php.net/manual/zh/reserved.interfaces.php)
    -   [上下文（Context）选项和参数](https://www.php.net/manual/zh/context.php)
    -   [支持的协议和封装协议](https://www.php.net/manual/zh/wrappers.php)
-   [安全](https://www.php.net/manual/zh/security.php)
    -   [简介](https://www.php.net/manual/zh/security.intro.php)
    -   [总则](https://www.php.net/manual/zh/security.general.php)
    -   [以 CGI 模式安装时](https://www.php.net/manual/zh/security.cgi-bin.php)
    -   [以 Apache 模块安装时](https://www.php.net/manual/zh/security.apache.php)
    -   [会话（Session）安全](https://www.php.net/manual/zh/security.sessions.php)
    -   [文件系统安全](https://www.php.net/manual/zh/security.filesystem.php)
    -   [数据库安全](https://www.php.net/manual/zh/security.database.php)
    -   [错误报告](https://www.php.net/manual/zh/security.errors.php)
    -   [用户提交的数据](https://www.php.net/manual/zh/security.variables.php)
    -   [隐藏 PHP](https://www.php.net/manual/zh/security.hiding.php)
    -   [保持更新](https://www.php.net/manual/zh/security.current.php)
-   [特点](https://www.php.net/manual/zh/features.php)
    -   [用 PHP 进行 HTTP 认证](https://www.php.net/manual/zh/features.http-auth.php)
    -   [Cookie](https://www.php.net/manual/zh/features.cookies.php)
    -   [会话](https://www.php.net/manual/zh/features.sessions.php)
    -   [处理 XForms](https://www.php.net/manual/zh/features.xforms.php)
    -   [文件上传处理](https://www.php.net/manual/zh/features.file-upload.php)
    -   [使用远程文件](https://www.php.net/manual/zh/features.remote-files.php)
    -   [连接处理](https://www.php.net/manual/zh/features.connection-handling.php)
    -   [数据库持久连接](https://www.php.net/manual/zh/features.persistent-connections.php)
    -   [PHP 的命令行模式](https://www.php.net/manual/zh/features.commandline.php)
    -   [垃圾回收机制](https://www.php.net/manual/zh/features.gc.php)
    -   [DTrace 动态跟踪](https://www.php.net/manual/zh/features.dtrace.php)
-   [函数参考](https://www.php.net/manual/zh/funcref.php)
    -   [影响 PHP 行为的扩展](https://www.php.net/manual/zh/refs.basic.php.php)
    -   [音频格式操作](https://www.php.net/manual/zh/refs.utilspec.audio.php)
    -   [身份认证服务](https://www.php.net/manual/zh/refs.remote.auth.php)
    -   [针对命令行的扩展](https://www.php.net/manual/zh/refs.utilspec.cmdline.php)
    -   [压缩与归档扩展](https://www.php.net/manual/zh/refs.compression.php)
    -   [加密扩展](https://www.php.net/manual/zh/refs.crypto.php)
    -   [数据库扩展](https://www.php.net/manual/zh/refs.database.php)
    -   [日期与时间相关扩展](https://www.php.net/manual/zh/refs.calendar.php)
    -   [文件系统相关扩展](https://www.php.net/manual/zh/refs.fileprocess.file.php)
    -   [国际化与字符编码支持](https://www.php.net/manual/zh/refs.international.php)
    -   [图像生成和处理](https://www.php.net/manual/zh/refs.utilspec.image.php)
    -   [邮件相关扩展](https://www.php.net/manual/zh/refs.remote.mail.php)
    -   [数学扩展](https://www.php.net/manual/zh/refs.math.php)
    -   [非文本内容的 MIME 输出](https://www.php.net/manual/zh/refs.utilspec.nontext.php)
    -   [进程控制扩展](https://www.php.net/manual/zh/refs.fileprocess.process.php)
    -   [其它基本扩展](https://www.php.net/manual/zh/refs.basic.other.php)
    -   [其它服务](https://www.php.net/manual/zh/refs.remote.other.php)
    -   [搜索引擎扩展](https://www.php.net/manual/zh/refs.search.php)
    -   [针对服务器的扩展](https://www.php.net/manual/zh/refs.utilspec.server.php)
    -   [Session 扩展](https://www.php.net/manual/zh/refs.basic.session.php)
    -   [文本处理](https://www.php.net/manual/zh/refs.basic.text.php)
    -   [变量与类型相关扩展](https://www.php.net/manual/zh/refs.basic.vartype.php)
    -   [Web 服务](https://www.php.net/manual/zh/refs.webservice.php)
    -   [Windows 专用扩展](https://www.php.net/manual/zh/refs.utilspec.windows.php)
    -   [XML 操作](https://www.php.net/manual/zh/refs.xml.php)
    -   [图形用户界面(GUI) 扩展](https://www.php.net/manual/zh/refs.ui.php)
-   [FAQ](https://www.php.net/manual/zh/faq.php) — FAQ：常见问题
    -   [一般信息](https://www.php.net/manual/zh/faq.general.php)
    -   [邮件列表](https://www.php.net/manual/zh/faq.mailinglist.php)
    -   [获取 PHP](https://www.php.net/manual/zh/faq.obtaining.php)
    -   [数据库问题](https://www.php.net/manual/zh/faq.databases.php)
    -   [安装](https://www.php.net/manual/zh/faq.installation.php) — 安装常见问题
    -   [编译问题](https://www.php.net/manual/zh/faq.build.php)
    -   [使用 PHP](https://www.php.net/manual/zh/faq.using.php)
    -   [密码散列](https://www.php.net/manual/zh/faq.passwords.php) — 密码散列安全
    -   [PHP 和 HTML](https://www.php.net/manual/zh/faq.html.php)
    -   [PHP 和 COM](https://www.php.net/manual/zh/faq.com.php)
    -   [其他问题](https://www.php.net/manual/zh/faq.misc.php)
-   [附录](https://www.php.net/manual/zh/appendices.php)
    -   [PHP 及其相关工程的历史](https://www.php.net/manual/zh/history.php)
    -   [从 PHP 8.0.x 移植到 PHP 8.1.x](https://www.php.net/manual/zh/migration81.php)
    -   [从 PHP 7.4.x 移植到 PHP 8.0.x](https://www.php.net/manual/zh/migration80.php)
    -   [从 PHP 7.3.x 移植到 PHP 7.4.x](https://www.php.net/manual/zh/migration74.php)
    -   [从 PHP 7.2.x 移植到 PHP 7.3.x](https://www.php.net/manual/zh/migration73.php)
    -   [从 PHP 7.1.x 移植到 PHP 7.2.x](https://www.php.net/manual/zh/migration72.php)
    -   [从 PHP 7.0.x 移植到 PHP 7.1.x](https://www.php.net/manual/zh/migration71.php)
    -   [从 PHP 5.6.x 移植到 PHP 7.0.x](https://www.php.net/manual/zh/migration70.php)
    -   [从 PHP 5.5.x 移植到 PHP 5.6.x](https://www.php.net/manual/zh/migration56.php)
    -   [PHP 的调试](https://www.php.net/manual/zh/debugger.php)
    -   [配置选项](https://www.php.net/manual/zh/configure.php)
    -   [php.ini 配置](https://www.php.net/manual/zh/ini.php)
    -   [扩展库列表／归类](https://www.php.net/manual/zh/extensions.php)
    -   [函数别名列表](https://www.php.net/manual/zh/aliases.php)
    -   [保留字列表](https://www.php.net/manual/zh/reserved.php)
    -   [资源类型列表](https://www.php.net/manual/zh/resource.php)
    -   [可用过滤器列表](https://www.php.net/manual/zh/filters.php)
    -   [所支持的套接字传输器（Socket Transports）列表](https://www.php.net/manual/zh/transports.php)
    -   [PHP 类型比较表](https://www.php.net/manual/zh/types.comparisons.php)
    -   [解析器代号列表](https://www.php.net/manual/zh/tokens.php)
    -   [用户空间命名指南](https://www.php.net/manual/zh/userlandnaming.php)
    -   [关于本手册](https://www.php.net/manual/zh/about.php)
    -   [Creative Commons Attribution 3.0](https://www.php.net/manual/zh/cc.license.php)
    -   [索引](https://www.php.net/manual/zh/indexes.php)
    -   [更新日志](https://www.php.net/manual/zh/doc.changelog.php)

There are no user contributed notes for this page.

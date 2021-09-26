## 目录
- iTop 是什么，为什么要用 iTop
- iTop 怎么用
- iTop 定制开发
- 案例及插件介绍

# iTop 是什么

## iTop 是什么

![](images/logo.svg){height=11%}
![](images/itil.svg){height=11%}
![](images/cmdb.svg){height=11%}
![](images/php.svg){height=11%}
![](images/mysql.svg){height=11%}
![](images/github.svg){height=11%}
![](images/agpl.svg){height=11%}
![](images/plugin.svg){height=11%}
![](images/api.svg){height=11%}

- iTop 是一个 ITSM 解决方案，提供一个灵活的 CMDB 管理配置项及其关系
- iTop 基于 ITIL^[ITIL 是 CCTA（英国国家电脑局）于 1980 年开发的一套 IT 服务管理（IT Service Management，ITSM）标准库。它把英国在 IT 管理方面的方法归纳起来，变成规范，为企业的 IT 部门提供一套从计划、研发、实施到运维的标准方法]，能够管理用户请求、事件、问题、变更和服务目录
- iTop 是使用 AGPLv3 协议的开源软件，可以从 Github 免费获取代码
- iTop 使用 PHP 语言和 MySQL 数据库
- iTop 支持插件机制，提供 API，可以方便的扩展功能，集成其他系统
- iTop Hub 提供插件下载（部分付费）以及完善的文档

## iTop 界面

\begin{center}
\includegraphics[height=0.85\textheight]{images/itop-page.pdf}
\end{center}

## 为什么要用 iTop
\begin{center}
\includegraphics[]{images/itop.pdf}
\end{center}

## iTop 功能特性 - 关联关系可视化分析
\begin{center}
\includegraphics[]{images/impacts.pdf}
\end{center}

## iTop 功能特性- 审计

\begin{center}
\includegraphics[]{images/audit.pdf}
\end{center}

## iTop 功能特性 - 仪表盘
\begin{center}
\includegraphics[]{images/dashboard.pdf}
\end{center}

## iTop 功能特性 - OQL 查询
\begin{center}
\includegraphics[]{images/oql.pdf}
\end{center}
## iTop 功能特性 - 批量导入导出

\begin{center}
\includegraphics[]{images/import.pdf}
\end{center}

# iTop 怎么用

## 收益

# iTop 定制开发

## iTop 架构

::::{.columns}
:::{.column}
![](images/itop-architecture.pdf)
:::
:::{.column}
- 模型定制
- UI 定制
:::
::::

## 数据存储方式
## 自定义模型

## 查看数据模型
\begin{center}
\includegraphics[0.85\textheight]{images/datamodel.pdf}
\end{center}

## 生命周期

```{#fig:userrequest2 .plot:dot height=85% caption="UserRequest 生命周期"}
digraph finite_state_machine {
	rankdir=LR;
	node [style=filled fillcolor="#ffffff" ];
	new -> assigned [ label="指派"];
	new -> escalated_tto [ label="超时"];
	new -> waiting_for_approval [ label="等待审批"];
	new -> resolved [ label="自动解决"];
	escalated_tto -> assigned [ label="指派"];
	assigned -> pending [ label="暂挂"];
	assigned -> resolved [ label="标记为解决"];
	assigned -> assigned [ label="重指派"];
	assigned -> escalated_ttr [ label="超时"];
	assigned -> resolved [ label="自动解决"];
	assigned -> rejected [ label="拒绝",color=red,style=bold,fontcolor=red];
	escalated_ttr -> pending [ label="暂挂"];
	escalated_ttr -> resolved [ label="标记为解决"];
	escalated_ttr -> assigned [ label="重指派"];
	escalated_ttr -> resolved [ label="自动解决"];
	waiting_for_approval -> approved [ label="审批"];
	waiting_for_approval -> rejected [ label="拒绝"];
	approved -> escalated_tto [ label="超时"];
	approved -> assigned [ label="指派"];
	approved -> resolved [ label="自动解决"];
	rejected -> new [ label="重新打开"];
	rejected -> closed [ label="关闭这个请求",color=red,style=bold,fontcolor=red];
	pending -> assigned [ label="指派"];
	pending -> resolved [ label="自动解决"];
	resolved -> closed [ label="关闭这个请求"];
	resolved -> assigned [ label="重新打开"];
	resolved -> resolved [ label="自动解决"];
	new [ shape=circle,label="新建"];
	escalated_tto [ shape=circle,label="升级 \n 响应 \n 时间"];
	assigned [ shape=circle,label="指派"];
	escalated_ttr [ shape=circle,label="升级 \n 解决 \n 时间"];
	waiting_for_approval [ shape=circle,label="待批"];
	approved [ shape=circle,label="批准"];
	rejected [ shape=circle,label="拒绝"];
	pending [ shape=circle,label="暂挂"];
	resolved [ shape=circle,label="已解决"];
	closed [ shape=doublecircle,label="关闭"];
}
```

## 开发辅助工具 - Toolkit
\begin{center}
\includegraphics[]{images/toolkit-page.pdf}
\end{center}

## 集成其他系统

# 案例

## URL 自助监控

## 央行金融业数据上报

## iTop 3.0 界面

\begin{center}
\includegraphics[]{images/iTop3.pdf}
\end{center}

## 参考资料

本次分享结束，感谢您的聆听。通过以下链接可以获取 iTop 的更多信息。

- Combodo 主页：https://www.combodo.com/
- 源码：https://github.com/Combodo/iTop
- 下载：https://sourceforge.net/projects/itop/
- 文档：https://www.itophub.io/wiki/page
- iTopHub：https://www.itophub.io/
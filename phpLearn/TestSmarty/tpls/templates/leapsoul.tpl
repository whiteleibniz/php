<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><{$title}></title>
</head>
<body>
<{$content}>

<div align="center">
    <{section loop=$news name="sec"}>
    <h1><{$news[sec].title}></h1>
    <div align="center">
        <{$news[sec].content}>
    </div>
    <div align="right">
        发表时间：<{$news[sec].time|date_format:"%Y-%m-%d %H:%I:%S"}>
    </div>
    <{/section}>
</div>
</body>
</html>
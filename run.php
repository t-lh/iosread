<?php

# php 7.4.30

function run()
{
    // 获取html内容
    $html = htmlData();
    // 打开要写入的文件
    $file = fopen("iosread.html", "w");
    // 写入内容
    if (fwrite($file, $html)) {
        // 关闭句柄
        fclose($file);
        echo "写入模板成功";
    } else {
        echo "写入模板失败!";
    }
}

function htmlData(): string
{
    return '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>爱阅书香收集的书源仓库合集</title>
    <meta name="description" content="  介绍介绍爱阅书香：根据书源，将相应网站的内容映射到软件中！！！书源：一个网站的规则描述文件，可能包括有多个来源;来源：聚合网站包括多个网站的内容，一个来源表示其中一个网站。仓库，存储书源的地方，可能有多个书源；">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_8v3czwksspqlg14i.css">
  </head>
  <body>

<div class="page clearfix" >
    <div class="left">
        <h1>爱阅书香收集的书源仓库合集</h1>
        <hr>
        <article itemscope itemtype="http://schema.org/BlogPosting">
            <h1 id="收集的书源仓库">收集的书源仓库</h1>
            ' . linkData() . '

        </article>
        <hr>
    </div>
</div>
    <script>' . "
    /**
     * target _blank
     */
    (function() {
        var aTags = document.querySelectorAll('article a:not([id])')
        for (var i = 0; i < aTags.length; i++) {
            aTags[i].setAttribute('target', '_blank')
        }
    }());" . '
    </script>
  </body>
</html>';
}

function linkData(): string
{
    $links = [
        [
            'name' => '相逢应不识',
            'link' => 'https://gitee.com/ift123/iFreeTimeBookConfigs'
        ]
    ];
    $tr = '';
    foreach ($links as $link) {
        $tr .= '<tr>
                    <td><strong>' . $link['name'] . '</strong></td>
                    <td><a href="' . $link['link'] . '">' . $link['link'] . '</a>
                    </td>
                    <td><a href="ifreetime://configs/' . $link['link'] . '">点击导入</a></td>
                </tr>
        ';
    }

    return '
            <table>
                <tbody>
                <tr>
                    <td>书源作者</td>
                    <td>地址</td>
                    <td>操作</td>
                </tr>
                ' . $tr . '
                <tr>
                    <td><strong>abc君</strong></td>
                    <td><a href="https://gitee.com/weiniff/ibooks">https://gitee.com/weiniff/ibooks</a></td>
                    <td><a href="ifreetime://configs/https://gitee.com/weiniff/ibooks">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>BlackTouma</strong></td>
                    <td><a href="https://gitee.com/BlackTouma/iFreeTimeBookConfigs">https://gitee.com/BlackTouma/iFreeTimeBookConfigs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/BlackTouma/iFreeTimeBookConfigs">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>纲吉</strong></td>
                    <td><a href="https://gitee.com/gangxiaoji/bookConfigs">https://gitee.com/gangxiaoji/bookConfigs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/gangxiaoji/bookConfigs">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>feifeiadmim</strong></td>
                    <td><a href="https://gitee.com/feifeiadmim/book_yuan">https://gitee.com/feifeiadmim/book_yuan</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/feifeiadmim/book_yuan">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>曙光</strong></td>
                    <td><a href="https://gitee.com/shuguanga/aiyue">https://gitee.com/shuguanga/aiyue</a></td>
                    <td><a href="ifreetime://configs/https://gitee.com/shuguanga/aiyue">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>zxhzxhz</strong></td>
                    <td><a href="https://gitee.com/zxhzxhz/booksource">https://gitee.com/zxhzxhz/booksource</a></td>
                    <td><a href="ifreetime://configs/https://gitee.com/zxhzxhz/booksource">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>Liquor030</strong></td>
                    <td><a href="https://gitee.com/Liquor030/iFreeTimeBookConfigs">https://gitee.com/Liquor030/iFreeTimeBookConfigs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/Liquor030/iFreeTimeBookConfigs">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>Mxy</strong></td>
                    <td><a href="https://gitee.com/mxyseo/iosread">https://gitee.com/mxyseo/iosread</a></td>
                    <td><a href="ifreetime://configs/https://gitee.com/mxyseo/iosread">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>灰太狼</strong></td>
                    <td><a href="https://gitee.com/Goodyaoshi/iFreeTimeBookConfigs">https://gitee.com/Goodyaoshi/iFreeTimeBookConfigs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/Goodyaoshi/iFreeTimeBookConfigs">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>wjc是竟成</strong></td>
                    <td><a href="https://gitee.com/weijingcheng4/aiyueshuxiang">https://gitee.com/weijingcheng4/aiyueshuxiang</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/weijingcheng4/aiyueshuxiang">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>在这</strong></td>
                    <td><a href="https://gitee.com/adolphz/iFreeTimebookConfigs">https://gitee.com/adolphz/iFreeTimebookConfigs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/adolphz/iFreeTimebookConfigs">点击导入</a></td>
                </tr>
                <tr>
                    <td><strong>bug退散</strong></td>
                    <td><a href="https://gitee.com/songshu079/i-free-timebook-configs">https://gitee.com/songshu079/i-free-timebook-configs</a>
                    </td>
                    <td><a href="ifreetime://configs/https://gitee.com/songshu079/i-free-timebook-configs">点击导入</a></td>
                </tr>
                </tbody>
            </table>';
}

run();
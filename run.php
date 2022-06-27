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
  </head>
  <body>

<div class="page clearfix" >
    <div class="left">
        <h1>爱阅书香收集的书源仓库合集</h1>
        <hr>
        <article itemscope itemtype="http://schema.org/BlogPosting">
            <h1 id="收集的书源仓库">收集的书源仓库</h1>
            <h4> 书源作者不一定为原作者 </h4>
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

function linkReplace($link)
{
    return str_replace('github.com', 'hub.fastgit.xyz', $link);
}

function linkData(): string
{
    $links_file = file_get_contents('link.json');
    $links = json_decode($links_file, true);
    $tr = '';
    foreach ($links as $link) {
        foreach ($link['link'] as $value) {
            $tr .= '
                <tr>
                    <td><strong>' . $link['name'] . '</strong></td>
                    <td><a href="https://github.com' . $value . '">https://github.com' . $value . '</a>
                    </td>
                    <td><a href="ifreetime://configs/https://hub.fastgit.xyz' . $value . '">点击导入</a></td>
                </tr>
        ';
        }
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
                </tbody>
            </table>';
}

function getLinks()
{
    $data = [];
    $github_item = [
        [
            'name' => 'lyhfree',
            'item' => 'aiyueshuxiang',
            'value' => [
                '116@23meigui.ibs', '171@171xiaoshuo.ibs', '24k@24kwx.ibs', '2K@2kzw.ibs', '2k@fpzw.ibs', '3040@130140.ibs',
                '56@liuxs.ibs', '58@wbsxw.ibs', '88@baka.ibs', 'KING@kingxs.ibs', 'SF@sfacg.ibs', 'po18@po18vip.ibs',
                '万相@yuanzun8.ibs', '丹书铁卷@dstiejuan.ibs', '乐文@lewenlewen.ibs', '乐文@lewentxt.ibs', '乐文@lwtxt.ibs',
                '九桃@9taoxs.ibs', '书仓@shucang.ibs', '书本@bookben.ibs', '书本@xbookben.ibs', '书海阁@xinshuhaige.ibs',
                '元宝@ybwzx9.ibs', '兔九三@tu93.ibs', '全本@qb5.ibs', '八八@fenxbook.ibs', '千千@qqxsnew.ibs', '古典@cngdwx.ibs',
                '哩哔@linovelib.ibs', '夜伴@yeban360.ibs', '大文学@wucuoxs.ibs', '大河@dahexs.ibs', '大白@dabaipc.ibs',
                '大雪天@daxuetian.ibs', '天籁@tianlaixsw.ibs', '奇书@kankezw.ibs', '妙笔@mbtxt.ibs', '妙笔阁@imiaobige.ibs',
                '妙笔阁@imiaobige.ibs', '宙斯@zhousixs.ibs', '小小说@xiaoxs.ibs', '小说路上@xs63.ibs', '懒人@lanrenwx.ibs',
                '文学迷@123wenxue.ibs', '斋书苑@zhaishuyuan.ibs', '旧时光@lanrenyuhai.ibs', '明月@56bok.ibs', '晋江@jjwxc.ibs',
                '武林@50zw.ibs', '汝慕@rmipoz.ibs', '海棠@lovehtbooks.ibs', '火星女频@iceread.ibs', '灯笔@dengbi.ibs',
                '热门@xinremenxs.ibs', '燃文@ranwen.ibs', '燃文@ranwen8.ibs', '爱奇艺@iqiyi.ibs', '爱尚@asxs.ibs',
                '甜梦@tmwk9.ibs', '看书啦@kanshu5.ibs', '着笔@zbzw.ibs', '神凑@shencou.ibs', '笔下@bixia66.ibs',
                '笔下@bxwxorg.ibs', '笔下@bxzww.ibs', '笔趣阁@8bqg.ibs', '笔趣阁@hananke.ibs', '笔趣阁@mibaoge.ibs',
                '笔趣阁@uubqg.ibs', '笔趣阁@xbiquge.ibs', '笔趣阁@xsbiquge.ibs', '笔趣阁@xxbiquge.ibs', '第九@dijiubook.ibs',
                '第九@dijiuzww.ibs', '米国度@myrics.ibs', '精品@jpxs123.ibs', '纵横@zongheng.ibs', '维C@vcxsw.ibs',
                '耽美@danmei.ibs', '落秋@luoqiuzw.ibs', '读书者@dushuzhe.ibs', '读远@readfar.ibs', '豆腐@doufu.ibs',
                '起点@qidian.ibs', '起舞@75zwz.ibs', '起读书@qidushu.ibs', '连载书@lianzaisu.ibs', '醋溜儿@clewxc.ibs',
                '野鸡@yncjzs.ibs', '镇魂@zhenhunxiaoshuo.ibs', '长佩@gongzicp.ibs', '零点@0dkanshu.ibs', '顶点@23wx.ibs',
                '风华居@fenghuaju.ibs', '飘天@piaotianzw.ibs', '飞卢@faloo.ibs', '饭圈@fqxsw.ibs'
            ]
        ]
    ];

    foreach ($github_item as $github) {
        foreach ($github['value'] as $value) {
            $daum['name'] = $github['name'];
            $daum['link'] = "https://github.com/" . $github['name'] . "/" . $github['item'] . "/blob/master/$value";
            $data[] = $daum;
        }
    }
    return $data;
}

run();
# -*- coding: utf-8 -*-
import json
import time

from requests_html import HTMLSession

github_item = [
    {
        'name': 'fangymzg',
        'url': 'https://github.com/fangymzg/iosread',
        'link': []
    },
    {
        'name': 'blackbox079',
        'url': 'https://github.com/blackbox079/iFreeTimebookConfigs',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread0',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread1',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread2',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread3',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread4',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread5',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread6',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread7',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread8',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread9',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread10',
        'link': []
    },
    {
        'name': 'litao3113',
        'url': 'https://github.com/litao3113/iosread11',
        'link': []
    },
]


def GetLink(url):
    time.sleep(3)
    # 启动
    session = HTMLSession()

    r = session.get(url)
    # 获取链接
    xpath_str_ibs = "//a[@class='js-navigation-open Link--primary']/@href[contains(string(), 'ibs')]"
    return r.html.xpath(xpath_str_ibs)


for github in github_item:
    link = GetLink(github['url'])
    github['link'] = link
    print(github)


with open('link.json', mode='w') as json_data:
    json.dump(github_item, json_data, ensure_ascii=False)

#!/bin/bash
# 启动爬虫脚本

echo "脚本启动..."
# 请求 爬虫配置 接口，查询所有排队中的任务

server=$1
# 模式
# mode=$1
# 环境
# env=$2

workdir=$(cd $(dirname $0); pwd)

# echo $workdir

# 读取INI 文件
# function __readINI() {
#     INIFILE=$1; SECTION=$2; ITEM=$3
#     _readIni=`awk -F '=' '/\['$SECTION'\]/{a=1}a==1&&$1~/'$ITEM'/{print $2;exit}' $INIFILE`
#     echo ${_readIni}
# }

# _IP=( $( __readINI $workdir/../../../.env IP ip ) )

echo "请求接口 '/api/phpspider/list'：查询所有排队中的任务"

res=$(curl -H "Content-Type: application/json" -s -X POST -d '{"type":"post","status":"queue","size":999}' $server/api/phpspider/list)

# echo $res | jq
# echo $res | jq .status

echo "解析数据..."

res_status=$(echo $res | jq .status)
echo '状态码为：'$res_status
res_statusText=$(echo $res | jq .statusText)
echo '状态为：'$res_statusText
res_data_total=$(echo $res | jq .data.total)
echo '任务总数为：'$res_data_total

# res_data=$(echo $res | jq .data)
# # echo '返回数据为：'$res_data

# config=jq . './../php/phpspider/movie_douban_com.json'
# config=$res | jq .data.rows['0']
#     # echo $(php ./../php/phpspider/index.php start $res | jq .data.rows[$i])

# echo $config
# php './../php/phpspider/index.php' start $config
if [ $res_data_total -gt '0' ];then
    echo '存在需要执行的任务'
    for i in $(seq 0 $(expr $res_data_total - 1))
    do
    # echo $(expr $i);
    id=$(echo $res | jq .data.rows[$i].id)
    title=$(echo $res | jq .data.rows[$i].title)

    # 检测别名key(表名)是否设置
    if [ "$title" = "null" ];then
        echo "取消任务$id：任务名称为空"
        continue

    fi

    echo "准备启动任务 $id：$title"

    screen_name=$"PhpSpider.$id"

    if ! screen -list | grep -q $screen_name; then
        screen -dmS $screen_name
    fi

    echo "开始执行任务$screen_name"



    cmd=$"php $workdir/start.php start $id $server";

    screen -x -S $screen_name -p 0 -X stuff "$cmd"
    screen -x -S $screen_name -p 0 -X stuff $'\n'
    # echo ':'$(echo $res | python -c 'import sys, json; print(json.load(sys.stdin)["data"]["rows"]['$i']["slug"])')
    done
    # task=$(php ./../php/phpspider/index.php start)
    # echo $task
fi
# result=$res

# echo $result
# php ./../php/phpspider/index.php start



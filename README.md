### 基于Docker搭建lnmp环境
# 启动后台运行
docker-compose up -d 
# 列出所有运行中容器
docker ps
# 列出所有容器(非运行态的容器)
docker ps -a
# 删除所有非运行态的容器
docker rm $(docker ps -a -q)
# 删除容器
docker rm (CONTAINER ID)
# 停止并删除容器, ps：数据卷不会随之删除。
docker-compose down
# 停掉运行容器
docker kill (CONTAINER ID)
docker stop (CONTAINER ID)
# 进入定义的db容器里面
docker-compose exec db bash
# 创建服务需要的镜像
docker-compose build
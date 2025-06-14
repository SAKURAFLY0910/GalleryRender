
此项目可以在 [RailWay](https://railway.com/) 中使用 [X3 gallery](https://www.photo.gallery/downloads/)

* 项目每次重新部署都会清除上传的文件
* Dockerfile文件中已经配置必须的gd  zip扩展
* 不支持使用Cloudinary等对象储存服务用于远程资源的支持

### 问题
* RailWay部署之后不能支持对象存储所以需要自己的服务器且容器不能持久保存会被清理

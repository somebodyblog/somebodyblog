#!/bin/bash
#本脚本计划做成一个集成了 Git 客户端配置， Git 仓库生成的和 Git 基本操作的综合脚本。
echo "***************************"
echo "****** Push Your Code *****"
echo "***** ZhaoKaifeng.com *****"
echo "* github.com/somebodyblog *"
echo "***************************"

# 从远程仓库拉取代码
#git stash 
#git pull
#git stash pop
#echo "All code has been pull to the local repository."

# 向远程仓库推送代码
git add --all
git commit -m "update"
git push origin
echo "All local code has been push to the remote repository."

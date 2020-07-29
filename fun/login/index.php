<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录 - Linux实验平台</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container_1">
    <div style="flex-direction: column">
        <!--            上下 -->
        <div style="height:150px;text-align: center;padding-top: 60px">
            <span style="font-size: 25px">
                登录 - linux 实验平台
            </span>
        </div>
        <!-- 登录 -->
        <div style="height:160px;text-align: center">
            <form style="text-align: center" action="/fun/login/fun.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" autofocus
                           style="display:inline;width:300px;"autocomplete="off" placeholder="账户名"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="passwd" name="passwd"
                           style="display:inline;width:300px;"autocomplete="off" placeholder="密码" />
                </div>
                <button type="submit" class="btn btn-default">登录</button>
                <a href="/"><button type="button" class="btn btn-default" >返回</button></a>

            </form>
        </div>
        <!-- 登录 -->
<!--        <div style="text-align: center;height: 30px;font-size: 14px">-->
<!--            <a href="#" class="noline">忘记了 Peach ID 或密码？ </a>-->
<!--        </div>-->

        <div style="text-align: center;height: 30px;font-size: 14px">
            没有 ID？
            <a href="/fun/register/" class="noline">立即创建您的账户。 </a>
        </div>
    </div>

</div>
</body>
</html>
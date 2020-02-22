<?php /*a:1:{s:104:"C:\Another\2020-FC-Intelligent-Management-System-Of-Fixture\application\admin\view\admin\modifyPage.html";i:1582076158;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/static/js/jquery.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <h2><?php echo htmlentities($ret['name']); ?>信息修改</h2>
    <form action="http://localhost:8000/admin/handelModify" class="form form-horizontal" method="post">
        <div class="form-group">
            <label for="">用户名</label>
            <input type="text" name="username" value="<?php echo htmlentities($ret['username']); ?>" readonly class="form-control">
        </div>
        <div class="form-group">
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo htmlentities($ret['name']); ?>" readonly class="form-control">
        </div>
        <div class="form-group">
            <label for="">密码</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">请再次输入密码</label>
            <input type="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">电话号码</label>
            <input type="tel" class="form-control" placeholder="<?php echo htmlentities($ret['telephone']); ?>" name="telephone">
        </div>
        <div class="form-group">
            <label for="">邮箱</label>
            <input type="email" class="form-control" placeholder="<?php echo htmlentities($ret['email']); ?>" name="email">
        </div>
        <div class="form-group">
            <label for="">部门</label>
            <input type="text" class="form-control" placeholder="<?php echo htmlentities($ret['workcell']); ?>" name="workcell">
        </div>
        <div class="form-group">
            <label for="">职务</label>
            <select name="role" id="" class="form-control">
                <option value="<?php echo htmlentities($ret['role']); ?>">
                    <?php if($ret['role'] == 0): ?> 管理员
                    <?php elseif($ret['role'] == 1): ?> 初级用户
                    <?php elseif($ret['role'] == 2): ?> 高级用户
                    <?php elseif($ret['role'] == 3): ?> 监管员
                    <?php elseif($ret['role'] == 4): ?> Workcell经理
                    <?php else: ?> 普通用户
                    <?php endif; ?>
                </option>
                <option value="0">Admin 管理员</option>
                <option value="1">OperatorI 初级用户</option>
                <option value="2">OperatorII 高级用户</option>
                <option value="3">Supervisor 监管员</option>
                <option value="4">Manager workcell经理</option>
                <option value="5">Normal User 普通用户</option>
            </select>
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="submit" value="修改" class="btn btn-success">
        </div>
    </form>
</div>
</body>
</html>
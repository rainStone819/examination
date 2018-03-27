<html>
<script src="js/jquery-2.1.3.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>hello hacker</title>
<style>
    pre{margin-bottom: 0;}
    textarea{width:80%;height: 85%}
    body{text-align: center}
    .jumbotron{padding-left:3px;
        padding-right:3px;
        padding-bottom: 0;
        margin-bottom: 0;
    }
</style>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="navbar-brand" href="#">笔试交流系统</div>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="nav-link disabled" href="#"><b>请写上题目描述</b>，修改答案前请<b>刷新</b>，避免覆盖他人的答案O(∩_∩)O~</div>
            </li>
        </ul>
            <button class="btn btn-outline-success my-2 my-sm-0" style="cursor:pointer" id="submit">修改答案</button>
    </div>
</nav>

<div class="jumbotron">
   <pre>
<textarea>
            <?php
            $myfile = fopen("solution.txt", "r") or die("Unable to open file!");
            $solution=fread($myfile,filesize("solution.txt"));
            echo $solution
            ?>
</textarea>
</pre>

</div>

</body>
<script type="text/javascript">
    $('#submit').click(function(){
        var solution = $("textarea").val();
        var data={solution:solution};
        $.post("modify.php",data,function(result){
            alert(result);
        });
    });
</script>
</html>
<!-- Edited from Stylish-portfolio bootstrap template:http://startbootstrap.com/template-overviews/stylish-portfolio/ 
under Apache 2.0 by Start Bootstrap 
 -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>澳联帮 - 遇见未来的校友</title>


    <link href="/css/normalize.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/welcome-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @if($errors->any())        
        <ul class="alert alert-danger">            
        @foreach($errors->all() as $error)                
            <li>{!! $error !!}</li>            
        @endforeach        
        </ul>
    @endif

    <a id="logbtn" class="navBtn btn btn-lg" href="#formModal">登录</a>
    <a id="languagebtn" href="en" class="navBtn btn btn-lg">English</a>

    {!! Form::open(['url'=>'login','style'=>'display:none;','id'=>'formModal']) !!}
    <div id="loginForm">
        <div class="usertype">
            <label>我是</label>
            {!! Form::radio('usertype','student') !!}<label>师弟/师妹</label>
            {!! Form::radio('usertype','consultant') !!}<label>师兄/师姐</label>
        </div>   
        <div class="username">
          <input type="text" name="username" placeholder="用户名"/>
        </div>
        <div class="password">
          <input type="password" name="password" placeholder="密码"/>
        </div>
        <div class="login">
            {!! Form::submit('登录',[]) !!}
        </div> 
    </div>
    {!! Form::close() !!}


    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>澳联帮</h1>
            <h3><br/>申请就那么回事<br/><br/>比起中介，为何不直接找师兄师姐呢？</h3>
            <div class="or-spacer">
              <div class="mask"></div>
            </div>
            <br>
            <a href="student/register" class="link-home"><i class="fa fa-users fa-2x"></i> 我要找师兄</a>
            <a href="consultant/register" class="link-home"><i class="fa fa-user-secret fa-2x"></i> 我就是师兄</a>
            <br><br>
            <a href="#about" class="fa fa-angle-double-down" id="tellMore"></a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>想来澳洲留学 但是信息有限？</h2>
                    <p class="lead">直接和未来的校友聊聊吧。</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>在这里，校友们帮你：</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>申请材料修改</strong>
                                </h4>
                                <p>自述/简历/推荐信<br/>直接让校友帮你改!</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-university fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>院校信息</strong>
                                </h4>
                                <p>院校/专业的排名和中文信息<br/>也可以专门翻译你需要的部分。</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plane fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>接机/住宿</strong>
                                </h4>
                                <p>初来澳洲？<br/>校友帮你安顿下来！</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-user-secret fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>私人顾问</strong>
                                </h4>
                                <p>想要一站式申请服务？<br/>聘请校友当你的顾问吧。</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12 col-sm-12">
                    		<a href="#portfolio" class="fa fa-angle-double-down" id="tellMore"></a>
                    	</div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>澳洲·世界顶级学府</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <hr/>
    <!-- Footer -->
    <footer>
        <div class="container footer">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>澳联帮</strong>
                    </h4>
                    <p>Canberra, Australia</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (+61) 416-365067</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:xuan9230@gmail.com">xuan9230@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; 澳联帮 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $("#logbtn").leanModal({top : 300, overlay : 0.6, closeButton: ".modal_close"} );

    </script>

</body>

</html>

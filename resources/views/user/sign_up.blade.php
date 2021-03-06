@extends('layouts.master')

@section('title', '注册-比乐集')

@section('modules')
    <script src="{{asset('assets/scripts/modules/user/controller.js')}}"></script>
    <script src="{{'https://static.geetest.com/static/tools/gt.js'}}"></script>
    <style type="text/css">
        body {
            position: absolute;
        }

        header, .container {
            padding: 0;
            min-width: 1230px;
        }

        .nav-banner {
            height: 32px;
            width: 1230px;
            margin: auto;
            background-color: #e8e8e8;
        }

        .nav-left {
            padding: 0;
            height: 100%;
            width: 245px;
            display: block;
            float: left;
        }

        .nav-left li {
            float: left;
        }

        .nav-left li div {
            padding: 10px 4px;
            line-height: 1em;
            font-weight: normal;
        }

        .nav-left li:first-child div {
            padding-left: 0;
        }

        .nav-right {
            padding: 0;
            height: 100%;
            width: 245px;
            display: block;
            float: right;
        }

        .nav-right li {
            float: right;
        }

        .nav-right li div {
            padding: 10px 4px;
            line-height: 1em;
            font-weight: normal;
        }

        .nav-right li:first-child div {
            padding-right: 0;
        }

        .nav-right li:first-child div a {
            text-decoration: underline;
        }

        .content {
            padding: 160px 0;
            min-width: 700px;
        }

        .content .sign-up-header {
            width: 55%;
            height: 30px;
            margin: 0 auto;
        }

        .content .sign-up-header .progress-title {
            width: 100%;
            height: 20px;
        }

        .content .sign-up-header .progress-title .step {
            position: relative;
            top: -1px;
            background-color: #ADADAD;
        }

        .content .sign-up-header .progress-title div {
            width: 33.3%;
            min-width: 140px;
            float: left;
        }

        .content .sign-up-header .fine {
            height: 8px;
            width: 100%;
            margin: 5px 0;
        }

        .content .sign-up-header .progress-bar-dot .dot {
            top: -16px;
            left: 30%;
            width: 8px;
            height: 14px;
            border-radius: 7px;
            position: relative;
        }

        .content .sign-up-body {
            width: 300px;
            margin: 30px auto;
        }

        .content .sign-up-body .alter {
            width: 300px;
            text-align: left;
            position: absolute;
        }

        .content .sign-up-body .alter-first {
            top: 4px;
            left: 300px;
        }

        .content .sign-up-body .alter-second {
            top: 45px;
            left: 300px;
        }

        .content .sign-up-body .alter-third {
            top: 86px;
            left: 300px;
        }

        .content .sign-up-body .alter span {
            color: red;
            padding: 5px 0 0 5px;
        }

        .content .sign-up-body .alter .x {
            top: 2px;
        }

        .content .sign-up-body .verify {
            margin: 20px 2px;
        }

        .content .sign-up-body .verify .captcha {
            height: 28px;
            position: relative;
        }

        .content .sign-up-body .more-long {
            width: 100%;
            outline: none;
        }

        .content .sign-up-body .protocol {
            margin: 0 0 18px;
            font-size: 10px;
            text-align: left;
            float: left;
        }

        .content .sign-up-body .protocol div:first-child {
            width: 22px;
            float: left;
            position: relative;
            top: -2px;
            left: 2px;
        }

        .content .sign-up-body .protocol div:last-child {
            width: 278px;
            float: left;
        }

        .content .sign-up-body .protocol a {
            color: #337ab7;
            text-decoration: none;
        }

        .content .sign-up-body .table-space {
            margin: 8px 0;
            height: 34px;
        }

        .content .sign-up-body .verify-code {
            width: 195px;
            float: left;
        }

        .content .sign-up-body .verify-btn {
            width: 100px;
            float: right;
        }

        .content .sign-up-body .sign-up-success {
            height: 200px;
        }

        .content .sign-up-body .sign-up-success h2 {
            color: black;
            font-weight: 300;
            line-height: 200px;
        }

        .content .sign-up-body .sign-up-success h2 a {
            color: #5cb85c;
            text-decoration: underline;
        }

        footer {
            width: 100%;
            height: 56px;
            position: absolute;
            bottom: 0;
        }

        .links {
            width: 446px;
            height: 28px;
            margin: 0 auto;
        }

        .links .separator {
            width: 0;
            height: 12px;
            margin: 8px 4px;
            border-left: 1px solid #ccc;
            display: inline-block;
        }

        .links li {
            float: left;
            height: 28px;
            padding: 4px 0;
        }

        .links li div {
            padding: 0 4px;
            line-height: 20px;
            font-weight: normal;
        }

        .copyright {
            height: 20px;
            line-height: 20px;
            text-align: center;
        }
    </style>
@stop

@section('container')
    <header>
        <div class="nav-banner">
            <ul class="nav-left">
                <li>
                    <div>
                        <a href="{{url('/')}}">
                            <span class="glyphicon glyphicon-home x"></span> 返回首页
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="nav-right">
                <li>
                    <div>
                        己有账号：<a href="{{url('/user/sign_in')}}">去登录</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="content" ng-app="user">
            <div class="sign-up-header">
                <div class="progress-title">
                    <div>
                        <span><span class="badge step">1</span> 验证手机号</span>
                    </div>
                    <div>
                        <span><span class="badge step">2</span> 填写账号信息</span>
                    </div>
                    <div>
                        <span><span class="badge step">3</span> 注册成功</span>
                    </div>
                </div>
                <div>
                    <div class="progress fine">
                        <div id="progress-bar" class="progress-bar progress-bar-success progress-bar-striped active"
                             role="progressbar" style="width: 0;"></div>
                    </div>
                    <div class="progress-bar-dot">
                        <div class="progress fine dot" id="dot">
                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                 role="progressbar" style="width: 0;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div ng-controller="sign_up" class="sign-up-body">
                <form name="step1" id="step1" class="relative">
                    <input type="hidden" id="captcha_token" value="">
                    <div>
                        <input type="text" class="form-control" placeholder="手机号或邮箱" name="ID" username="ID"
                               ng-model="user.ID" id="ID"
                               wrong="@{{ step1.ID.$error.wrong || step1.ID.$error.required }}" required>
                    </div>
                    <div class="alter alter-first">
                        <span ng-show="!step1.ID.$error.required && step1.ID.$error.wrong" class="hide">
                            <span class="glyphicon glyphicon-remove x"></span> 请填写正确的手机号或邮箱
                        </span>
                    </div>

                    <div class="verify">
                        <div id="div_geetest_lib">
                            <div id="captcha" class="captcha">
                                <script src="https://api.geetest.com/get.php?gt=4f80a638af7e2350b04b7d2ce0508386"
                                        async></script>
                            </div>
                        </div>
                    </div>

                    <div class="protocol">
                        <div>
                            <input type="checkbox" checked="checked"/>
                        </div>
                        <div>
                            <p>
                                我己阅读并同意
                                <a class="legal-link" target="_blank">《比乐集服务条款》</a>
                            </p>
                        </div>
                    </div>

                    <div>
                        <button id="check-phone" type="button" class="btn btn-success more-long">下一步</button>
                    </div>
                </form>

                <form name="step2" id="step2" class="relative hide">
                    <div class="table-space">
                        <input type="text" class="form-control" placeholder="您的昵称(4-16位)" id="nickname" name="nickname"
                               nickname="nickname" ng-model="user.nickname"
                               nickname-wrong="@{{ step2.nickname.$error.wrong || step2.nickname.$error.required }}"
                               required>
                    </div>
                    <div class="alter alter-first">
                        <span ng-show="!step2.nickname.$error.required && step2.nickname.$error.wrong" class="hide">
                            <span class="glyphicon glyphicon-remove x"></span> 支持字母、数字、汉字、"-"、"_"的组合
                        </span>
                        <span ng-show="!step2.nickname.$error.required && step2.nickname.$error.less" class="hide">
                            <span class="glyphicon glyphicon-remove x"></span> 昵称太简短了
                        </span>
                        <span ng-show="!step2.nickname.$error.required && step2.nickname.$error.more" class="hide">
                            <span class="glyphicon glyphicon-remove x"></span> 昵称字数太多了
                        </span>
                    </div>

                    <div class="table-space">
                        <input type="password" class="form-control" placeholder="设置密码(6-16位)" id="password"
                               name="password" password="password" ng-model="user.password" required>
                    </div>
                    <div class="alter alter-second">
                        <span ng-show="!step2.password.$error.required && step2.password.$error.less">
                            <span class="glyphicon glyphicon-remove x"></span> 你的密码必须至少包含六个字符
                        </span>
                        <span ng-show="!step2.password.$error.required && step2.password.$error.more">
                            <span class="glyphicon glyphicon-remove x"></span> 密码位数过长
                        </span>
                        <span ng-show="!step2.password.$error.required && step2.password.$error.easy">
                            <span class="glyphicon glyphicon-remove x"></span> 密码太过简单
                        </span>
                    </div>

                    <div class="table-space">
                        <input type="text" class="form-control verify-code" placeholder="短信/邮件验证码" id="verify"
                               name="verify" verify="verify" ng-model="user.verify" required>
                        <button id="resend" type="button" class="btn btn-success verify-btn" ng-click="send_verify()">
                            重发验证码
                        </button>
                    </div>
                    <div class="alter alter-third">
                        <span ng-show="!step2.verify.$error.required && step2.verify.$error.wrong">
                            <span class="glyphicon glyphicon-remove x"></span> 验证码格式错误
                        </span>
                    </div>

                    <div class="table-space">
                        <button id="user-sign-up" type="button" class="btn btn-success more-long" ng-click="sign_up()">
                            下一步
                        </button>
                    </div>
                </form>
                <form name="step3" id="step3" class="relative hide">
                    <div class="sign-up-success">
                        <h2>
                            注册成功, <a href="">enjoy it!</a>
                        </h2>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="links">
            <ul>
                <li>
                    <div>
                        <a>关于我们</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>人才招聘</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>比乐菜谱</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>商家入驻</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>网站合作</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>法律合作</a>
                    </div>
                </li>
                <li class="separator"></li>
                <li>
                    <div>
                        <a>联系我们</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <span>Copyright©2016-2016  比乐集 bileji.com 版权所有</span>
        </div>
    </footer>
@stop
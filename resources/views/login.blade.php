<?php
/**
 * Created by PhpStorm.
 * User: bong
 * Date: 2017. 4. 2.
 * Time: 오후 2:12
 */

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
</head>
<body class="login_wrap">
<div class="container">
    <div class="wrap">
        <h2 class="text-center">HANGRY</h2>
        <div class="con_wrap">
            <div class="title_wrap">
                <h4>Member Login</h4>
                <p>발급 받은 아이디와 패스워드를 입력해주세요</p>
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="login_wrap">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="user_id" id="user_id" placeholder="로그인 아이디" required>

                    <p class="col-red" v-if="user_id_empty_err">@{{user_id_empty_err}}</p>
                </div>
                <div class="form-group">
                    <input v-model="password" type="password" class="form-control" id="password" placeholder="비밀번호" required>
                    <p class="col-red" v-if="password_empty_err">@{{password_empty_err}}</p>
                </div>
                <p class="col-red" v-if="login_message"> @{{ login_message }}</p>
                <button type="submit" class="btn btn-primary" @click="login">로그인 하기</button><br>
                <input type="checkbox" id="session_check"><label for="session_check">내 아이디 기억하기</label>
            </div>
            <div class="find_pw_wrap">
                <a href="###"><i class="glyphicon glyphicon-lock"></i>비밀번호를 잊으셨습니까? </a>
            </div>

        </div>

    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
<script src="{{url('js/login.js')}}"></script>
</html>

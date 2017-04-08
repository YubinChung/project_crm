<?php
/**
 * Created by PhpStorm.
 * User: bong
 * Date: 2017. 4. 9.
 * Time: 오전 12:37
 */

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
</head>
<body>
<div class="admin_wrap">
    <header>
        <a href="#" class="menu"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
        <span class="user_name" v-model="user_id">@{{ user_id }}</span>
        <a href="#" class="pull-right calendar"><i class="glyphicon glyphicon-calendar"></i></a>
        <a href="#" class="pull-right bell"><i class="glyphicon glyphicon-bell"></i><span class="bell_alert">4</span></a>
    </header>
    <div class="col-lg-2">
        <aside>
            <header>
                <img src="" alt="user_profile_img">
                <h3>username</h3>
                <p>user_email</p>
            </header>
        </aside>
    </div>
    <div class="col-lg-10">
        <section class="admin_contents">

        </section>
    </div>

</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
<script src="{{url('js/login.js')}}"></script>
</html>

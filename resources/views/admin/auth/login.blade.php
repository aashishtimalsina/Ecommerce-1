<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form  class="form-signin" action="{{route('admin.login.post')}}" method="POST">
                
                <input type="email" name="email" placeholder="Email ID" class="form-control form-group"> 
                <input type="password" name="password" class="form-control form-group" placeholder="Password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign In</button>
                @csrf
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>
<style type="text/css">
    body,html {
    background-image: url('https://i.imgur.com/xhiRfL6.jpg');
    height: 100%;
}

#profile-img {
    height:180px;
}
.h-80 {
    height: 80% !important;
}
</style>
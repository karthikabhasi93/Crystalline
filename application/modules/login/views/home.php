<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/login/css/style.css')?>">
</head>
<body>
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
            <?php if(!empty($this->session->flashdata('msg'))){?>
            <p style="color:red;text-align:center"><?=$this->session->flashdata('msg')?></p>
            <?php }?>
          </div>
        </div>
        <form class="login-form" action="<?= base_url('login')?>" method="post">
          <input type="text" name="username" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button type="submit">login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>   
</body>
</html>
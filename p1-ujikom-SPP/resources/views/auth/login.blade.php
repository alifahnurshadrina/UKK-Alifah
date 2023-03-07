<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SPEPE</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        body{
            position: relative;
            width: 684px;
            height: 500px;
            background: #1F8A70;
        }
        .content{
            position: absolute;
            width: 684px;
            height: 587px;
            left: -75px;
            top: -8px;
            background: #ffffff;
        }
        .content img{
            position: absolute;
            width: 300px;
            height: 300px;
            left: 230px;
            top: 150px;
            border-radius: 1000px;
        }
        h2{
            position: absolute;
            width: 280px;
            height: 58px;
            left: 900px;
            top: 100px;
            font-family: 'Coiny';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 49px;
            text-align: center;
            color: #ffffff;
        }

        button{
            position: absolute;
            width: 150px;
            height: 35px;
            left: 960px;
            top: 350px;
            background-color: #ADCF9F;
            color:#ffffff;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            line-height: 20px;
            border-radius: 50px;

        }

</style>
</head>
<body>
<div class="content">
    <div class="login">
  @error('username')
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@enderror
<form action="{{ route('login') }}" method="post">
  @csrf
    <img src="/assets/img/logo.png">
    <div class="login">
        <h2>Log In</h2>
        <input type="text" name="username" placeholder="Masukkan Username" style="position: absolute;width: 250px;height: 15px;left: 900px;top: 200px;border: none;outline: none;padding: 8px;border-radius: 15px;border: 1px solid gray;background: #D9D9D9; text-align: center;  ">
        <input type="Password" name="password" placeholder="Masukkan Password"  style="position: absolute;width: 250px;height: 15px;left: 900px;top: 263px;border: none;outline: none;padding: 8px;border-radius: 15px;border: 1px solid gray;background: #D9D9D9; text-align: center;" >
        <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
    </div>
</div>
</html>

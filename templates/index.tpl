<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
<body>

<div id="wrapper">
<div id="box">

{if true == $auth_flg}
<img src="./img/sea.jpg">
<table>
  <tr>
    <th><a href="#">Mypage</a></th>
    <th><a href="./mutter.php">timelime</a></th>
<th><a href="./logout.php">Logout</a></th>
{/if}
  </tr>
</table>
{if false == $auth_flg}
<div id="si">
<h1>New-SignUp</h1>

<form action="./register_fin.php" method="post" class="form form--login">
  <div class="form__field">
  <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="user_id" class="form form--login" placeholder="UserID" required><br/>
</div>
<div class="form__field">
<label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="user_name" placeholder="User Name" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>

<input type="password" name="pw" class="form__input" placeholder="password" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
<input type="password" name="pw2" class="form__input" placeholder="comfirm password" required><br/>
</div>
<div class="form__field">
<input type="submit" value="Signup"><br/>
</form>
</div>
</div>
{/if}

{if false == $auth_flg}
<div id="lo">
<h1>Login</h1>
<form action="./login.php" method="post" class="form form--login">
  <div class="form__field">
  <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
<input type="text" name="id" class="form__input" placeholder="UserID" required><br/>
</div>
<div class="form__field">
  <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>

<input type="password" name="pw" class="form__input" placeholder="password" required><br/>
<br/>
</div>
 <div class="form__field">
<input type="submit" value="Login"><br/>
</form>
</div>
</div>
{/if}



{if true == $auth_flg}

{if true == $if_error_mutter}
  文字数は1～140文字でお願いします。<br/>
{/if}
<form action="./mutter.php" method="post">
<textarea name="mutter" id="textarea" placeholder="How about Your felling today?" required></textarea>


  <input type="submit" value="Post" id="btn">

</form>

{/if}
</div>
{if true == $auth_flg}

<h2>Timeline</h2>
{if $pre_page == true }
<a href="./index.php?page={math equation='x-y' x=$current_page y=1}">pre</a>
{/if}
{if $next_page == true }
<a href="./index.php?page={math equation='x+y' x=$current_page y=1}">next</a>
{/if}
<table border="1" id="tbl">
  <tr>
   <th class="th">USERNAME</th>
   <th class="th">POST</th>
   <th class="th">DATE&TIME</th>
 </tr>

{foreach from=$mutter item=i}

<tr>
<td class="tdid">{$i.login_id}</td>
<td class="example">{$i.mutter_body}</td>
<td class="tdid">{$i.mutter_date}</td>
</tr>
{/foreach}
</table>
{/if}

</div>
</body>
<div id="footer">
<h2>Post by MayThazinsoe</h2>
<h3>Thanks you</h3>

</div>
</html>

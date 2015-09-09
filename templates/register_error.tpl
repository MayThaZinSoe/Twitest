<html>
<meta charset="UTF-8">

なんかエラーです<br/>
<br/>
{if true == $if_error_user_id_must}user_idは必須入力です！<br/>{/if}

{if true == $if_error_user_name_must}user_nameは必須入力です<br/>{/if}

{if true == $if_error_pw_must}pwは必須入力です<br/>{/if}

{if true == $if_error_pw2_must}pw2は必須入力です<br/>{/if}

{if true == $if_error_user_id_alnum}user_idは半角英数で入力<br/>{/if}

{if true == $if_error_user_name_long}user_nameは八文字以内<br/>{/if}

{if true == $if_error_pw_long}pwは6文字以上72文字以内<br/>{/if}

{if true == $if_error_pw_mismatch}pwとpw2同じではない<br/>{/if}

<br/>

</html>



<!-- method="GET"   or    method="POST" -->
<!-- GET حصول -->
<!-- بتظهر في عنوان الرابط -->
<!-- POST دفع او ارسال -->

<form action="form.php" method="POST">
    <label for="user_id">userName</label>
    <input type="text" name="user_id">
    <label for="password">password</label>
    <input type="password" name="password">

    <input type="submit">

</form>

<!-- الكود اللي حيستقبل الحاجات دي -->
<?php
// بنكتب ال name بتاعها

// REQUEST ممكن تستخدمها على طول بس ممكن تعمل تضارب مع الكوكيز
    echo $_REQUEST["user_id"];
    echo $_REQUEST["password"];
?>
<div class="login">
    <?php
    if (isset($_GET['err']) && $_GET['err'] == 'Email_or_Password_incorrect') { ?>
         <u><span class="error small text-danger">Email Or Password incorrect</span></u>
   <?php } 
    if (isset($_GET['err']) && $_GET['err'] == 'You_are_disconnected') { ?>
        <u><span class="error small text-danger">You are disconnected</span></u>
    <?php } ?>
    <form action="index.php?page=login" method="POST">
        <input type="hidden" name="action" value="login">
        <input class="form-control" type="text" name="Email" placeholder="Email">
        <input type="password" class="form-control" name="Password" placeholder="Password">
        <input type="password" class="form-control" name="user_code" placeholder="User_code">
        <button type="submit" name="submit">Sign In</button>
    </form>
</div>
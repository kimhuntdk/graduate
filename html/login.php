<?php 

    session_start();

?>

    <div class="signin-form">
                        <h2 class="form-title">เข้าสู่ระบบ</h2>
                        <form action="check-login.php" method="POST" class="register-form" id="login-form"> 
                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="password" required>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="ล็อกอิน"/>
                            </div>
                        </form>
                    
                    </div>
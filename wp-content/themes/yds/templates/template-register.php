<?php
/* Template Name: Template - Register */

$redirect_to = '';
?>

<section class="c-login py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="">
                    <div class="row c-login-content">
                        <div class="c-login--register col-5 d-flex flex-column justify-content-center text-center">
                            <div class="c-login__part--register px-3">
                                <h5 class="text-white mb-4">Welkom terug!</h5>
                                <div class="text-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="c-login--login col-7 d-flex justify-content-center align-items-center">
                            <form name="loginform" id="loginform" class="text-center" action="<?php echo site_url( '/wp-login.php?action=register' ); ?>" method="post">
                                <p>
                                    <label for="user_login"></label>
                                    <input id="user_login" type="text" value="" name="log" placeholder="Gebruikersnaam">
                                </p>
                                <p>
                                    <label for="user_email"></label>
                                    <input id="user_email" type="email" value="" name="email" placeholder="Email">
                                </p>
                                <p class="mt-6 mb-0">
                                    <input id="wp-submit" class="btn btn-secondary" type="submit" value="Registreer" name="wp-submit">
                                    <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
                                    <input type="hidden" value="1" name="testcookie">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
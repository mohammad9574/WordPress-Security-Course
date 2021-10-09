# Remove WordPress generator meta tag completely
remove_action('wp_head', 'wp_generator');

# Redirect Admin to Home
add_action('template_redirect', 'bwp_template_redirect');
function bwp_template_redirect()
{
if(is_author())
{
wp_redirect(home_url()); exit;
}
}

# Change Error Message On Login Page
function no_wordpress_errors(){
return 'نام کاربری یا رمز عبور اشتباه است!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

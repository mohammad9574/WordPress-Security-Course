# Remove WordPress generator meta tag completely
function remove_generator_tag() {
return'';
}

# Redirect Admin to Home
add_action('template_redirect', 'bwp_template_redirect');
function bwp_template_redirect()
{
if(is_author())
{
wp_redirect(home_url()); exit;
}
}

# Remove Error Message from Login Page
add_filter('login_errors', create_function('$a', "return null;"));

# Change Error Message On Login Page
function no_wordpress_errors(){
return 'نام کاربری یا رمز عبور اشتباه است!';
}
add_filter('login_errors', 'no_wordpress_errors');

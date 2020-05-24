<?PHP 
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Set a Cookie
//cookie are set in header and must be done before any output of script.
$cookie_name = 'user';
$cookie_value = "Kevin Guertin";
$cookie_time = time() + (86400 * 30); // 86400 = 1 day
$cookie_domain = '/'; //Where the cookie will  be for directories, / allows to persist over the entire site.
setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_domain);

print_r($_COOKIE); // Will show all cookies as this is printing the cookie superglobal
echo "<p>" . $_COOKIE[$cookie_name] . "</p>";

// Modifying a Cookie
$cookie_value = "Not Kevin Guertin";
setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_domain);
print_r($_COOKIE);

//Delete a Cookie
setcookie('user', '', time() - 3600, '/'); //manually expiring the cookie
print_r($_COOKIE);

//Check if cookie are enabled
if (count($_COOKIE) > 0) {
  echo "Cookies Enabled";
} else {
  echo "Cookies Not Enabled";
}

?>
<?

// All functions are called from this page

function dd($data) {
    die(var_dump($data));
}

function escape($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}



?>
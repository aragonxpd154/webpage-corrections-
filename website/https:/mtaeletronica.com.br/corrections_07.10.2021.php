public function __construct() {
	if (! empty($this->parent)) {
		$this->parent->admin_notices[] = array(
			'type'    => 'error',
			'msg'     => '<strong>' . __( 'File Permission Issues', 'pinnacle' ) . '</strong><br/>' . sprintf( __( 'We were unable to modify required files. Please check your permissions, or modify your wp-config.php file to contain your FTP login credentials as <a href="%s" target="_blank">outlined here</a>.', 'pinnacle' ), 'https://wordpress.org/support/article/editing-wp-config-php/' ),
			'id'      => 'redux-wp-login',
			'dismiss' => false,
		);
	}
}

/**
 * Add or modify States
 */
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {
  $states['BD'] = array(
	'UTTARA' => __('UTTARA', '1'),
	'BASUNDHARA R/A' => __('BASUNDHARA R/A', '2'),
	'BARIDHARA DIPLOMATIC ZONE' => __('BARIDHARA DIPLOMATIC ZONE', '3'),
	'BARIDHARA J BLOCK' => __('BARIDHARA J BLOCK', '4'),
	'GULSHAN 1' => __('GULSHAN 1', '5'),
	'GULSHAN 2' => __('GULSHAN 2', '6'),
	'BANANI' => __('BANANI', '7'),
	'BANANI DOHS' => __('BANANI DOHS', '8'),
	'NIKETAN- GULSHAN' => __('NIKETAN- GULSHAN', '9'),
	'NIKUNJO 1' => __('NIKUNJO 1', '10'),
	'NIKUNJO 2' => __('NIKUNJO 2', '11'),
	'BADDA' => __('BADDA', '12'),
	'SHAHJADPUR AREA' => __('SHAHJADPUR AREA', '13'),
	'DHANMONDI' => __('DHANMONDI', '14'),
	'LALMATIA' => __('LALMATIA', '15'),
	'MOHAMMADPUR' => __('MOHAMMADPUR', '1617'),
	'MOGHBAZAR' => __('MOGHBAZAR', '17'),
	'NEIGHBOURING' => __('NEIGHBOURING', '18'),
	'MOHAKHALI DOHS' => __('MOHAKHALI DOHS', '19'),
	'BARIDHARA DOHS' => __('BARIDHARA DOHS', '20'),
	'MIRPUR DOHS' => __('MIRPUR DOHS', '21'),
	'MIRPUR 10' => __('MIRPUR 10', '22'),
	'MIRPUR 11' => __('MIRPUR 11', '23'),
	'MIRPUR 12' => __('MIRPUR 12', '24'),	
);
  return $states;
}
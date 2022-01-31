<?php
return [
	'stripe' => [
		'publishableKey' => getenv('STRIPE_PUBLISHABLE_KEY'),
		'apiKey' => getenv('STRIPE_API_KEY'),
		'signingSecret' => getenv('STRIPE_WEBHOOK_SECRET')
	]
];
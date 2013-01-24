<?php

use lithium\net\http\Media;

Media::type('mustache', 'text/x-mustache', array(
	'view' => 'lithium\template\View',
	'loader' => 'Mustache',
	'renderer' => 'Mustache',
	'paths' => array(
		'template' => '{:library}/views/{:controller}/{:template}.{:type}',
		'layout'   => '{:library}/views/layouts/{:layout}.{:type}',
		'element'  => '{:library}/views/elements/{:template}.{:type}'
	)
));

?>
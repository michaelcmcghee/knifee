<?php

return array(
	'name' => 'Knifee',
	'version' =>'1.0.0',
	'author' =>'Michael McGhee',
	'author_url' => 'http://www.papercutinteractive.com/',
	'description' => 'Removes x amount of words between the tag pair and appends ellipses.',
	'namespace' => 'Knifee\Knifee',
	'plugin.usage' => array(
		'description' => 'Removes x amount of words between the tag pair and appends ellipses.',
		'example' => '{exp:knifee}',
		'parameters' => array(
			'words' => array(
				'description' => 'Amount of words you want to show, the rest are truncated.',
				'example' => '{exp:knifee words="6"} {tags} or content {/exp:knifee}'
			),
			'allowtags' => array(
				'description' => 'HTML tags you want to allow, otherwise they are stripped out.',
				'example' => '{exp:knifee allowtags="<br><a>"} {tags} <br> or <a href="#link">content</a> {/exp:knifee}'
			)
		)
	)
);
/* End of file addon.setup.php */ 
/* Location: /system/user/addons/knifee/addon.setup.php */
<?php

namespace ContentKit\ColorsTypical;

add_filter('wp_theme_json_data_default', __NAMESPACE__ . '\\filter_theme_json_theme');
add_action('init', __NAMESPACE__ . '\\add_for_theme_wh_siteeditor');


// reference https://tailwindcss.com/docs/customizing-colors
function get_colors()
{
	$purple = [
		[
			'name' => 'purple 50',
			'slug' => 'purple-50',
			'color' => '#faf5ff',
		],
		[
			'name' => 'purple 100',
			'slug' => 'purple-100',
			'color' => '#f3e8ff',
		],
		[
			'name' => 'purple 200',
			'slug' => 'purple-200',
			'color' => '#e9d5ff',
		],
		[
			'name' => 'purple 400',
			'slug' => 'purple-400',
			'color' => '#c084fc',
		],
		[
			'name' => 'purple 600',
			'slug' => 'purple-600',
			'color' => '#9333ea',
		],
		[
			'name' => 'purple 800',
			'slug' => 'purple-800',
			'color' => '#6b21a8',
		],

	];

	$blue = [
		[
			'name' => 'blue 50',
			'slug' => 'blue-50',
			'color' => '#eff6ff',
		],
		[
			'name' => 'blue 100',
			'slug' => 'blue-100',
			'color' => '#dbeafe',
		],
		[
			'name' => 'blue 200',
			'slug' => 'blue-200',
			'color' => '#bfdbfe',
		],
		[
			'name' => 'blue 400',
			'slug' => 'blue-400',
			'color' => '#60a5fa',
		],
		[
			'name' => 'blue 600',
			'slug' => 'blue-600',
			'color' => '#2563eb',
		],
		[
			'name' => 'blue 800',
			'slug' => 'blue-800',
			'color' => '#1e40af',
		],

	];

	$green = [
		[
			'name' => 'green 50',
			'slug' => 'green-50',
			'color' => '#f0fdf4',
		],
		[
			'name' => 'green 100',
			'slug' => 'green-100',
			'color' => '#dcfce7',
		],
		[
			'name' => 'green 200',
			'slug' => 'green-200',
			'color' => '#bbf7d0',
		],
		[
			'name' => 'green 400',
			'slug' => 'green-400',
			'color' => '#4ade80',
		],
		[
			'name' => 'green 600',
			'slug' => 'green-600',
			'color' => '#16a34a',
		],
		[
			'name' => 'green 800',
			'slug' => 'green-800',
			'color' => '#166534',
		],

	];

	$yellow = [
		[
			'name' => 'yellow 50',
			'slug' => 'yellow-50',
			'color' => '#fefce8',
		],
		[
			'name' => 'yellow 100',
			'slug' => 'yellow-100',
			'color' => '#fef9c3',
		],
		[
			'name' => 'yellow 200',
			'slug' => 'yellow-200',
			'color' => '#fef08a',
		],
		[
			'name' => 'yellow 400',
			'slug' => 'yellow-400',
			'color' => '#facc15',
		],
		[
			'name' => 'yellow 600',
			'slug' => 'yellow-600',
			'color' => '#ca8a04',
		],
		[
			'name' => 'yellow 800',
			'slug' => 'yellow-800',
			'color' => '#854d0e',
		],

	];

	$orange = [
		[
			'name' => 'orange 50',
			'slug' => 'orange-50',
			'color' => '#fff7ed',
		],
		[
			'name' => 'orange 100',
			'slug' => 'orange-100',
			'color' => '#ffedd5',
		],
		[
			'name' => 'orange 200',
			'slug' => 'orange-200',
			'color' => '#fed7aa',
		],
		[
			'name' => 'orange 400',
			'slug' => 'orange-400',
			'color' => '#fb923c',
		],
		[
			'name' => 'orange 600',
			'slug' => 'orange-600',
			'color' => '#ea580c',
		],
		[
			'name' => 'orange 800',
			'slug' => 'orange-800',
			'color' => '#9a3412',
		],

	];

	$red = [
		[
			'name' => 'Red 50',
			'slug' => 'red-50',
			'color' => '#fef2f2',
		],
		[
			'name' => 'Red 100',
			'slug' => 'red-100',
			'color' => '#fee2e2',
		],
		[
			'name' => 'Red 200',
			'slug' => 'red-200',
			'color' => '#fecaca',
		],
		[
			'name' => 'Red 400',
			'slug' => 'red-400',
			'color' => '#f87171',
		],
		[
			'name' => 'Red 600',
			'slug' => 'red-600',
			'color' => '#dc2626',
		],
		[
			'name' => 'Red 800',
			'slug' => 'red-800',
			'color' => '#991b1b',
		],

	];

	$gray = [
		[
			'name' => 'Gray 50',
			'slug' => 'gray-50',
			'color' => '#f9fafb',
		],
		[
			'name' => 'Gray 100',
			'slug' => 'gray-100',
			'color' => '#f3f4f6',
		],
		[
			'name' => 'Gray 200',
			'slug' => 'gray-200',
			'color' => '#e5e7eb',
		],
		[
			'name' => 'Gray 400',
			'slug' => 'gray-400',
			'color' => '#9ca3af',
		],
		[
			'name' => 'Gray 600',
			'slug' => 'gray-600',
			'color' => '#4b5563',
		],
		[
			'name' => 'Gray 800',
			'slug' => 'gray-800',
			'color' => '#1f2937',
		],

	];

	return array_merge($gray, $red, $orange, $yellow, $green, $blue, $purple);
}

function filter_theme_json_theme($theme_json)
{
	$new_data = array(
		'version' => 2,
		'settings' => array(
			'color' => array(
				'palette' => [
					'custom' => get_colors(),
				]
			),
		),
	);
	// do_action('qm/debug', $theme_json->update_with($new_data));
	// do_action('qm/debug', $new_data);

	return $theme_json->update_with($new_data);
}


function add_for_theme_wh_siteeditor()
{
	$colors = get_theme_support('editor-color-palette');
	if (empty($colors)) {
		$colors = [];
	}

	$additional_colors = get_colors();

	$colors = array_merge($colors, $additional_colors);
	add_theme_support('editor-color-palette', $colors);
}
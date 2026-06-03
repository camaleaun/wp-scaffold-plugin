<?php
/**
 * Computed variables for camaleaun/wp-scaffold-plugin.
 *
 * Receives $vars (slug, wp_version, and all resolved parameters) and
 * returns the array with additional computed keys added.
 *
 * @param array<string,mixed> $vars
 * @return array<string,mixed>
 */
return function ( array $vars ): array {
	$name = $vars['plugin_name'] ?? '';
	$slug = $vars['slug']        ?? '';

	$vars['plugin_package']        = str_replace( ' ', '_', $name );
	$vars['plugin_namespace']      = str_replace( ' ', '\\', $name );
	$vars['plugin_namespace_test'] = str_replace( ' ', '\\', $name ) . '\\Tests';
	$vars['plugin_const_prefix']   = strtoupper( str_replace( '-', '_', $slug ) );
	$vars['textdomain']            = $slug;
	$vars['plugin_tested_up_to']   = $vars['wp_version'] ?? '';

	return $vars;
};

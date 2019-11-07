<?php
// Errors
$lang['PterodactylPackage.!error.meta[server_name].format'] = 'Please set a name for the server.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'The location ID must be numeric.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'The location does not match any in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Whether to use a dedicated IP must be set to 1 or 0.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'The port range most be in the format 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'The nest ID must be numeric.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'The nest does not match any in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'The egg ID must be numeric.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'The egg does not match any in Pterodactyl.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'The pack ID must be numeric.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'The memory amount must be numeric.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'The swap amount must be numeric.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'The cpu percentage must be numeric.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'The disk space amount must be numeric.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'The IO weight must be numeric.';
$lang['PterodactylPackage.!error.meta[startup].empty'] = 'A startup command must be given.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'The image path must be a most 255 characters.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'The number of databases must be numeric.';


// Package fields
$lang['PterodactylPackage.package_fields.location_id'] = 'Location';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'The Location to automatically deploy to.';

$lang['PterodactylPackage.package_fields.io'] = 'Block IO Weight';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Block IO Adjustment number (10-1000).';

$lang['PterodactylPackage.package_fields.port_range'] = 'Port Range (optional)';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Port ranges seperated by comma to assign to the server (Example: 25565-25570,25580-25590).';

$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Dedicated IP (optional)';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Assign dedicated ip to the server.';

$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'The Nest for the server to use.';

$lang['PterodactylPackage.package_fields.startup'] = 'Startup';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Custom startup command to assign to the created server (e.g. java -Xms128M -Xmx 1024M -jar server.jar).';

$lang['PterodactylPackage.package_fields.image'] = 'Image (optional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Custom Docker image to assign to the created server (e.g. quay.io/pterodactyl/core:java-glibc).';

$lang['PterodactylPackage.package_fields.pack_id'] = 'Pack ID (optional)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID of the Pack to install the server with.';

$lang['PterodactylPackage.package_fields.egg_id'] = 'Egg ID';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID of the Egg for the server to use.';

$lang['PterodactylPackage.package_fields.databases'] = 'Database Limit (optional)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Client will be able to create this number of databases for their server.';

$lang['PterodactylPackage.package_fields.server_name'] = 'Server Name (optional)';
$lang['PterodactylPackage.package_fields.tooltip.server_name'] = 'The name of the server as shown on the panel.';

$lang['PterodactylPackage.package_fields.memory'] = 'Memory (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Amount of Memory to assign to the created server.';

$lang['PterodactylPackage.package_fields.swap'] = 'Swap (MB)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Amount of Swap to assign to the created server.';

$lang['PterodactylPackage.package_fields.cpu'] = 'CPU Limit (%)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Amount of CPU to assign to the created server.';

$lang['PterodactylPackage.package_fields.disk'] = 'Disk Space (MB)';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Amount of Disk Space to assign to the created server.';

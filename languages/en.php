<?php

$english = array(
	/**
	 *  UI elements
	 */
	'maps' => 'Maps',
	'admin:maps' => 'Maps',
	'maps:findme' => 'Find Me',
	'maps:empty' => 'There are no items to display on the map',
	'maps:create' => 'Create a map',
	'maps:untitled' => 'Untitled Map',
	'maps:search' => 'Search Map',
	'maps:site:all' => 'All Maps',
	'maps:site:mine' => 'My Maps',
	'maps:site:owner' => '%s\'s Maps',
	'maps:site:users' => 'Map of site users',
	'maps:site:groups' => 'Map of site groups',
	'maps:site:friends' => 'Map of your friends',
	'maps:proximity:SI' => '%s km',
	'maps:proximity:US' => '%s miles',
	'maps:proximity:info' => "%s to %s",
	/**
	 * MAP TYPES
	 */
	'maps:search:all' => 'Search everything',
	'maps:search:users' => 'Find users',
	'maps:search:groups' => 'Find groups',
	'maps:search:objects' => 'Find content',
	'maps:search:friends' => 'Find friends',
	'maps:search:group_members' => 'Group member map',
	'maps:search:group_content' => 'Group content map',
	/**
	 * GROUPS
	 */
	'maps:module:group_members' => 'Members Map',
	'maps:module:group_content' => 'Content Map',
	'maps:groupoption:group_members:enable' => 'Enable members map',
	'maps:groupoption:group_content:enable' => 'Enable content map',
	/*
	 * FILTER
	 */
	'maps:filter' => 'Filter',
	'maps:filter:location' => 'Search Map',
	'maps:filter:users' => 'Find users',
	'maps:filter:users:attributes' => 'by name or profile details',
	'maps:filter:users:tags' => 'by tags',
	'maps:filter:users:location' => 'by location',
	'maps:filter:users:radius' => 'within',
	'maps:filter:groups' => 'Find groups',
	'maps:filter:groups:attributes' => 'by name or profile details',
	'maps:filter:groups:tags' => 'by tags',
	'maps:filter:groups:location' => 'by location',
	'maps:filter:groups:radius' => 'within',
	'maps:filter:objects' => 'Find content',
	'maps:filter:objects:attributes' => 'by keywords',
	'maps:filter:objects:tags' => 'by tags',
	'maps:filter:objects:location' => 'by location',
	'maps:filter:objects:subtypes' => 'by content type',
	'maps:filter:objects:radius' => 'within',
	'maps:filter:radius:none' => 'everywhere',
	'maps:filter:location:change' => 'choose from your locations',
	'maps:filter:location:find' => 'search in a new location',
	/**
	 * SETTINGS
	 */
	'maps:settings:SI' => 'International System of Units (kilometers)',
	'maps:settings:US' => 'Imperial Unit System (miles)',
	'maps:settings:params[google_api_key]' => 'Google API Key',
	'maps:settings:hint:google_api_key' => 'API Key of your Google. You should enable the following APIs: <b>Google Maps Javascript API v3</b>, <b>Static Maps API</b>, <b>Google Maps Geolocation API</b>',
	'maps:settings:params[default_location]' => 'Default system location',
	'maps:settings:hint:default_location' => 'This location will be geocoded and used as fallback for when entity coordinates are required, but not available',
	'maps:settings:params[metric_system]' => 'Measurement system',
	'maps:settings:hint:metric_system' => 'Types of metrics to use (kilometers vs miles)',
	'maps:settings:params[search_all]' => 'Enable global map search',
	'maps:settings:hint:search_all' => 'Create a dynamic map of all site users, groups, and content',
	'maps:settings:params[search_users]' => 'Enable global user search',
	'maps:settings:hint:search_users' => 'Disabling this will also remove users from the global map',
	'maps:settings:params[search_friends]' => 'Enable friends search',
	'maps:settings:hint:search_friends' => 'Allow users to find their friends on a map',
	'maps:settings:params[search_objects]' => 'Enable objects/content search',
	'maps:settings:hint:search_objects' => 'Add objects search to the global map and add granular filter for mappable subtypes',
	'maps:settings:params[search_groups]' => 'Enable groups search',
	'maps:settings:hint:search_groups' => 'Add groups to the global search',
	'maps:settings:params[search_group_members]' => 'Enable group member search',
	'maps:settings:hint:search_group_members' => 'Allow group owners to enable map-based member search',
	'maps:settings:params[search_group_content]' => 'Enable group content search',
	'maps:settings:hint:search_group_content' => 'Allow group owners to enable map-based content search',
	'maps:settings:params[mapptable_subtypes]' => 'Mappable content types',
	'maps:settings:hint:mappable_subtypes' => 'Specify which object subtypes can be displayed on maps',
	'maps:settings:params[icons_path]' => 'Path to map icons',
	'maps:settings:hint:icons_path' => 'Path relative to the mod folder with a trailing slash, e.g. hypeMaps/graphics/icons/',
	'maps:settings:params[markertypes]' => 'Types of markers available for places',
	'maps:settings:hint:markertypes' => 'This list is populated based on .png icons found in the icons directory. Select types of markers that should be available in markertype dropdown',
	'maps:settings:params[adsense_units]' => 'Enable AdSense Units on Maps',
	'maps:settings:hint:adsense_units' => 'Display ads on maps',
	'maps:settings:params[adsense_publisher_id]' => 'AdSense Publisher ID (pub-XXXXX)',
	'maps:settings:hint:adsense_publisher_id' => 'Enter your publisher ID if you have enabled AdSense Units',
	'maps:settings:params[adsense_plugin_author_share]' => 'Donate percentage of your potential AdSense revenue to the plugin author',
	'maps:settings:hint:adsense_plugin_author_share' => 'You can support the development of this plugin by sharing a percentage of your real-estate allocated to AdSense Units with the author. On every page load, the plugin will switch between your publisher ID and plugin author publisher ID at a rate your indicate here. E.g. if you put in 10, your publisher ID will be used in 90% of all page views',
	/**
	 * Markers
	 */
	'maps:marker:type:default' => 'Default',
	'maps:marker:type:airport' => 'Airport',
	'maps:marker:type:amusement_park' => 'Amusement Park',
	'maps:marker:type:aquarium' => 'Aquarium',
	'maps:marker:type:art_gallery' => 'Art Gallery',
	'maps:marker:type:atm' => 'ATM',
	'maps:marker:type:bakery' => 'Bakery',
	'maps:marker:type:bank' => 'Bank',
	'maps:marker:type:bar' => 'Bar',
	'maps:marker:type:beauty_salon' => 'Beauty Salon',
	'maps:marker:type:bicycle_store' => 'Bicycle Store',
	'maps:marker:type:bowling_alley' => 'Bowling Alley',
	'maps:marker:type:bus_station' => 'Bus Station',
	'maps:marker:type:cafe' => 'Cafe',
	'maps:marker:type:campground' => 'Campground',
	'maps:marker:type:car_dealer' => 'Car Dealer',
	'maps:marker:type:car_rental' => 'Car Rental',
	'maps:marker:type:car_repair' => 'Car Repair',
	'maps:marker:type:car_wash' => 'Car Wash',
	'maps:marker:type:casino' => 'Casino',
	'maps:marker:type:cemetery' => 'Cemetery',
	'maps:marker:type:church' => 'Church',
	'maps:marker:type:city_hall' => 'City Hall',
	'maps:marker:type:clothing_store' => 'Clothing Store',
	'maps:marker:type:convenience_store' => 'Convenience Store',
	'maps:marker:type:courthouse' => 'Courthouse',
	'maps:marker:type:doctor' => 'Doctor',
	'maps:marker:type:dentist' => 'Dentist',
	'maps:marker:type:department_store' => 'Department Store',
	'maps:marker:type:electrician' => 'Electrician',
	'maps:marker:type:electronics_store' => 'Electronics Store',
	'maps:marker:type:embassy' => 'Embassy',
	'maps:marker:type:finance' => 'Finance',
	'maps:marker:type:fire_station' => 'Fire Station',
	'maps:marker:type:florist' => 'Florist',
	'maps:marker:type:food' => 'Food',
	'maps:marker:type:furniture_store' => 'Furniture Store',
	'maps:marker:type:gas_station' => 'Gas Station',
	'maps:marker:type:government_office' => 'Government Office',
	'maps:marker:type:gym' => 'Gym',
	'maps:marker:type:hardware_store' => 'Hardware Store',
	'maps:marker:type:hospital' => 'Hospital',
	'maps:marker:type:jewelry_store' => 'Jewelry Store',
	'maps:marker:type:laundry' => 'Laundry',
	'maps:marker:type:lawyer' => 'Lawyer',
	'maps:marker:type:library' => 'Library',
	'maps:marker:type:liquor_store' => 'Liquor Store',
	'maps:marker:type:lodging' => 'Lodging / Accommodation',
	'maps:marker:type:mosque' => 'Mosque',
	'maps:marker:type:movie_rental' => 'Movie Rental',
	'maps:marker:type:movie_theater' => 'Movie Theater',
	'maps:marker:type:museum' => 'Museum',
	'maps:marker:type:night_club' => 'Night Club',
	'maps:marker:type:park' => 'Park',
	'maps:marker:type:parking' => 'Parking',
	'maps:marker:type:pharmacy' => 'Pharmacy',
	'maps:marker:type:police' => 'Police',
	'maps:marker:type:post_office' => 'Post Office',
	'maps:marker:type:restaurant' => 'Restaurant',
	'maps:marker:type:school' => 'School',
	'maps:marker:type:shoe_store' => 'Shoe Store',
	'maps:marker:type:shopping_mall' => 'Shopping Mall',
	'maps:marker:type:spa' => 'Spa',
	'maps:marker:type:stadium' => 'Stadium',
	'maps:marker:type:store' => 'Store',
	'maps:marker:type:subway_station' => 'Subway Station',
	'maps:marker:type:synagogue' => 'Synagogue',
	'maps:marker:type:taxi_stand' => 'Taxi Stand',
	'maps:marker:type:train_station' => 'Train Station',
	'maps:marker:type:university' => 'University',
	'maps:marker:type:veterinary_care' => 'Veterinary Care',
	'maps:marker:type:zoo' => 'Zoo',
	'maps:marker:type:user' => 'User',
	'maps:marker:type:group' => 'Group',
	/**
	 * WIDGETS
	 */
	'maps:widget:staticmap' => 'Static Map',
	'maps:widget:staticmap:desc' => 'Displays a static map of a specified location with a marker',
	'maps:widget:staticmap:title' => 'Title',
	'maps:widget:staticmap:description' => 'Description',
	'maps:widget:staticmap:location' => 'Location',
	'maps:widget:staticmap:zoom' => 'Zoom',
	'maps:widget:staticmap:pin_color' => 'Pin color',
);

add_translation("en", $english);

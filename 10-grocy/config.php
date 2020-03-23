<?php

# Needs to be a number where Sunday = 0, Monday = 1 and so forth
Setting('CALENDAR_FIRST_DAY_OF_WEEK', '1');
Setting('CALENDAR_SHOW_WEEK_OF_YEAR', true);
Setting('CURRENCY', 'HUF');

# The plugin to use for external barcode lookups,
# must be the filename without .php extension and must be located in /data/plugins,
# see /data/plugins/DemoBarcodeLookupPlugin.php for an example implementation
Setting('STOCK_BARCODE_LOOKUP_PLUGIN', 'DemoBarcodeLookupPlugin');

# If, however, your webserver does not support URL rewriting, set this to true
Setting('DISABLE_URL_REWRITING', false);

DefaultUserSetting('night_mode_enabled', false);
DefaultUserSetting('auto_night_mode_enabled', true);
DefaultUserSetting('auto_night_mode_time_range_from', "20:00");
DefaultUserSetting('auto_night_mode_time_range_to', "07:00");
DefaultUserSetting('auto_night_mode_time_range_goes_over_midnight', true);

# Feature flags
Setting('FEATURE_FLAG_STOCK', true);
Setting('FEATURE_FLAG_SHOPPINGLIST', true);
Setting('FEATURE_FLAG_RECIPES', true);
Setting('FEATURE_FLAG_CHORES', true);
Setting('FEATURE_FLAG_TASKS', true);
Setting('FEATURE_FLAG_BATTERIES', true);
Setting('FEATURE_FLAG_EQUIPMENT', true);
Setting('FEATURE_FLAG_CALENDAR', true);

# Sub feature flags
Setting('FEATURE_FLAG_STOCK_PRICE_TRACKING', true);
Setting('FEATURE_FLAG_STOCK_LOCATION_TRACKING', true);
Setting('FEATURE_FLAG_STOCK_BEST_BEFORE_DATE_TRACKING', true);
Setting('FEATURE_FLAG_STOCK_PRODUCT_OPENED_TRACKING', true);
Setting('FEATURE_FLAG_STOCK_PRODUCT_FREEZING', true);
Setting('FEATURE_FLAG_SHOPPINGLIST_MULTIPLE_LISTS', true);
Setting('FEATURE_FLAG_CHORES_ASSIGNMENTS', true);

# Feature settings
Setting('FEATURE_SETTING_STOCK_COUNT_OPENED_PRODUCTS_AGAINST_MINIMUM_STOCK_AMOUNT', false); // When set to false, opened products will not be considered for minimum stock amounts

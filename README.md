# SharedUserrights
An updated fork of the old Wikia SharedUserrights extension

#Configuration
In your LocalSettings.php file, you will need to define 
* $wgGlobalGroups as an array with the groups that are global. 
* $wgSharedDB with the name of the shared DB (Assumed to be on the Central Wiki)
* $wgIsCentralWiki true on the central wiki, false otherwise
* wfLoadExtension( "SharedUserrights" );

# Limitations
* The groups work across all the wikis, but are only visible on the central wiki. To change this, it appears changes will have to be made to core. 

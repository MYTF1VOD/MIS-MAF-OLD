MIS-MAF
=======

Projet MIS-MAF (Module d'Ingestion SyncTv - Module d'Approvisionnement FAI)

Installation steps

repository MIS-MAF
	 Submodules
	 	right click, udpate Submodule
 
Repository plugins/sfPropelORMPlugin 
	replace .gitmodules with the following lines
	
		[submodule "lib/vendor/propel"]
			path = lib/vendor/propel
			url = https://github.com/propelorm/Propel.git
		[submodule "lib/vendor/phing"]
			path = lib/vendor/phing
		    url = https://github.com/phingofficial/phing.git
		    
	submodules
		right click, udpate Submodule

run symfony commands :
	php symfony plugins:publish-assets
	php symfony propel:build-model
	php symfony cc
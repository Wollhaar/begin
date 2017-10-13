plugin.tx_bundesligasimulator {
  view {
		# cat=plugin.tx_bundesligasimulator/file; type=string; label=Path to template root (FE)
		templateRootPaths.0 = EXT:bundesliga_simulator/Resources/Private/Templates/
		# cat=plugin.tx_bundesligasimulator/file; type=string; label=Path to template partials (FE)
		partialRootPaths.0 = EXT:bundesliga_simulator/Resources/Private/Partials/
		# cat=plugin.tx_bundesligasimulator/file; type=string; label=Path to template layouts (FE)
		layoutRootPaths.0 = EXT:bundesliga_simulator/Resources/Private/Layouts/
	}
	persistence {
		# cat=plugin.tx_bundesligasimulator//a; type=int+; label=Default storage PID
		storagePid =
	}
}

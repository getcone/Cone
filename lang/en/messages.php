<?php /** @noinspection PhpUndefinedClassInspection */
Cone\Cone::$strings = [
	"admin" => "administrator",
	"syntax" => "Syntax",
	"packages" => "packages",
	"info_version" => "Cone %CONE_VERSION% running on PHP %PHP_VERSION%.",
	"info_update" => "Use 'cone update' to check for updates.",
	"list_singular" => "1 package installed",
	"list_plural" => "% packages installed",
	"list_manual" => "% manually-installed",
	"list_dependency" => "and a dependency",
	"list_dependencies" => "and % dependencies",
	"list_installable" => "Use %COMMAND% for a list of installable packages.",
	"installable" => "You can 'cone get' these packages:",
	"install_elevate" => "Cone needs to run as %ADMIN% to install packages.",
	"get_good" => "I'm afraid there's no easy way for that.",
	"double_force" => "Double-force activated!",
	"already_installed" => "% is already installed.",
	"already_installed_dependency" => "% is already installed; now set to manually installed.",
	"risky_alias" => "When you say %RISKY_ALIAS%, do you mean %PACKAGE_NAME%?",
	"risky_alias_force" => "Forced/non-interactive install assuming %RISKY_ALIAS% means %PACKAGE_NAME%.",
	"prerequisite_os" => "Not installing %PACKAGE_NAME% because it is not available for your operating system.",
	"install_package" => "Installing %...",
	"installed_singular" => "Installed 1 package.",
	"installed_plural" => "Installed % packages.",
	"install_env_singular" => "If you want to use the environment variable that was just defined (%), open a new terminal window.",
	"install_env_plural" => "If you want to use the environment variables that were just defined (%), open a new terminal window.",
	"update_elevate" => "Cone needs to run as %ADMIN% to update.",
	"outdated" => "Cone % is available.",
	"outdated_update" => "Downloading updater...",
	"up_to_date" => "Cone is up-to-date.",
	"update_repos" => "Updating repositories...",
	"main_repo" => "Cone Main Repository",
	"update_repo" => "Fetching %...",
	"repo_invalid" => "Invalid Cone repository JSON.",
	"repo_version" => "This repository was made for Cone % and above.",
	"repo_restored_singular" => "Restored 1 package from local cache.",
	"repo_restored_plural" => "Restored % packages from local cache.",
	"repo_packages_singular" => "got 1 package.",
	"repo_packages_plural" => "got % packages.",
	"repo_rename" => "%OLD% is now known as %NEW%.",
	"update_packages" => "Updating installed packages...",
	"update_package" => "Updating %...",
	"cleanup" => "Finishing up...",
	"unneeded_dependency" => "Removing unneeded dependency %...",
	"update_native" => "Would you like to perform an update with % as well?",
	"advanced_user_prompt" => "Do you know what you're doing?",
	"abort" => "Aborting.",
	"uninstall_elevate" => "Cone needs to run as %ADMIN% to uninstall packages.",
	"uninstall_cone" => "If you're looking to uninstall Cone, use %COMMAND%.",
	"not_installed" => "% is not installed.",
	"uninstall_dependency" => "%OTHER_PACKAGE% depends on %UNINSTALL_TARGET%.",
	"uninstall_package" => "Uninstalling %...",
	"uninstalled_singular" => "Uninstalled 1 package.",
	"uninstalled_plural" => "Uninstalled % packages.",
	"repo_elevate" => "Cone needs to run as %ADMIN% to manage repositories.",
	"repo_duplicate" => "% has already been added.",
	"repo_http_error" => "There was an error requesting that URL.",
	"repo_invalid_json" => "That URL doesn't seem to point to a valid JSON file.",
	"repo_add_success" => "Successfully added %.",
	"repo_update" => "Use %COMMAND% once you're finished managing Cone's repositories.",
	"repo_unknown" => "Unknown repository. Keep in mind that you have to use the URL -- use %COMMAND% for a list.",
	"repo_remove_success" => "Successfully removed %.",
	"self_uninstall_elevate" => "Cone needs to run as %ADMIN% to self-uninstall.",
	"self_uninstall_packages" => "Currently, you have",
	"self_uninstall_packages_prompt" => "Are you sure you want to uninstall them and Cone?",
	"self_uninstall_prompt" => "Are you sure you want to uninstall Cone?",
	"self_uninstall_php" => "Would you also like to remove PHP-CLI?",
	"command" => "command",
	"arguments" => "arguments",
	"help" => "These are available Cone commands used in various situations:",
	"help_category_info" => "get information about Cone and its packages:",
	"help_info" => "Displays version information",
	"help_list" => "Lists installed packages",
	"help_installable" => "Lists installable packages",
	"help_category_packages" => "manage Cone and its packages:",
	"help_update" => "Updates Cone and installed packages",
	"help_install" => "Installs the given package(s), optionally forcefully/non-interactively",
	"help_remove" => "Uninstalls the given package(s)",
	"help_self_uninstall" => "Uninstalls Cone and installed packages",
	"help_force_self_update" => "Forces an update which can be useful if you've edited Cone's files",
	"help_category_repositories" => "manage repositories:",
	"help_repositories" => "Lists all repositories",
	"help_add_repository" => "Adds a repository by its URL",
	"help_remove_repository" => "Removes a repository by its URL"
];

#! /bin/bash
cd "$(dirname "$0")"
applied_file=.applied_migrations
if ! [[ -e $applied_file ]]; then
	echo "Creating $applied_file file"
	touch $applied_file
fi
last_applied=$( tail -n 1 .applied_migrations )
for filename in ./*.sql; do
	filebase=$(basename $filename)
	if [[ $filebase > $last_applied ]]; then
		echo "Applying $filebase"
		if [[ $APP_ENV == "production" ]]; then
			mysql ${MYSQL_DATABASE} < $filename
			if [ $? -ne 0 ]; then
				echo "mysql command failed. Aborting."
				exit 1
			fi
		else
			mysql -u root -p${MYSQL_ROOT_PASSWORD} ${MYSQL_DATABASE} < $filename
		fi
		echo $filebase >> $applied_file
	fi
done;
1. download source
2. Setup apache, including php with mysql drivers.
3. pear install Mail
4. gunzip db.sql.gz
5. mysql -u casablanca casablanca -p < db.sql

Get settings.php from someone who has it and drop it in ./sites/default/settings.php

Restart apache and you should at least be close.

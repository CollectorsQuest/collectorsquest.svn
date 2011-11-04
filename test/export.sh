#!/bin/bash

./symfony propel:insert-sql --env=test --no-confirmation
./symfony propel:data-load --env=test test/fixtures/common

mysql -u root -D collectorsquest_test < data/sql/lib.model.views.sql
mysql -u root -D collectorsquest_test < data/sql/lib.model.procedures.sql
mysql -u root -D collectorsquest_test < data/sql/lib.model.triggers.sql

for table in `mysql -u root collectorsquest_test -e 'show tables' | egrep -v 'Tables_in_' `; do
  mysqldump -uroot --insert-ignore --skip-set-charset -c -C --compact --opt -Q collectorsquest_test $table > test/schemas/$table.sql
done

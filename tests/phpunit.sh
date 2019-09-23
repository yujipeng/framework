#/bin/shell
work_dir=$(cd $(dirname $0); pwd)
phpunit_sh=${work_dir}/../vendor/bin/phpunit
phpunit_path=${work_dir}/
# echo ${phpunit_sh}
$phpunit_sh --testdox  --colors  ${phpunit_path}/$1

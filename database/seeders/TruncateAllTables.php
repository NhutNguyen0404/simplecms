<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncateAllTables extends Seeder
{
    protected $ignoreTables = ['migrations'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            foreach ($table as $tableName) {
                if (empty($this->ignoreTables) || !in_array($tableName, $this->ignoreTables)) {
                    DB::table($tableName)->truncate();
                }
            }
        }
        Schema::enableForeignKeyConstraints();
    }
}

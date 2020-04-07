<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class anantSchoolStafflist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `anant_school_stafflist` (
        `Sr_No` int(8) NOT NULL AUTO_INCREMENT,
        `EmployeeNumber` varchar(10) NOT NULL,
        `Name` varchar(60) NOT NULL,
        `emailaddress` varchar(40) NOT NULL,
        `Mobile` varchar(12) NOT NULL,
        `OTP` varchar(12) NOT NULL,
        `isRagistred` int(2) NOT NULL DEFAULT 2 COMMENT '1 Ragistred 2 nonRagistred',
        `isActive` int(2) NOT NULL DEFAULT 1 COMMENT '1 active 2 nonactive',
        `created time` timestamp NOT NULL DEFAULT current_timestamp(),
        UNIQUE KEY `Sr_No` (`Sr_No`),
        UNIQUE KEY `EmployeeNumber` (`EmployeeNumber`)
        ) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;";
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

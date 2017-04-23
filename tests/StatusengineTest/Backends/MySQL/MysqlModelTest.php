<?php
/**
 * Statusengine Worker
 * Copyright (C) 2016  Daniel Ziegler
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Statusengine\Test\Backends\MySQL;


use Statusengine\Mysql\MysqlModel;


class MysqlModelTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        parent::setUp(); // TODO: Change the autogenerated stub
        date_default_timezone_set('Europe/Berlin');
    }

    public function testInstanceOf(){
        $MysqlModel = new MysqlModel();
        $this->assertInstanceOf('\Statusengine\Mysql\MysqlModel', $MysqlModel);
    }

    public function testDatetime(){
        $MysqlModel = new MysqlModel();

        $this->assertEquals('1970-01-01 01:00:00', $MysqlModel->datetime(0));
        $this->assertEquals('1970-01-01 01:00:00', $MysqlModel->datetime(-5000));
        $this->assertEquals('1970-01-01 01:00:00', $MysqlModel->datetime('0'));
        $this->assertEquals('1970-01-01 01:00:00', $MysqlModel->datetime('-5000'));

        $this->assertEquals('2017-01-07 06:18:47', $MysqlModel->datetime(1483766327));
        $this->assertEquals('2017-01-07 06:18:47', $MysqlModel->datetime('1483766327'));
    }

}
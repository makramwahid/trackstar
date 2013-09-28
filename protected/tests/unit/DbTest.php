<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbTest
 *
 * @author Akram
 */
class DbTest extends CTestCase {
    
    public function testConnection(){
        $this->assertTrue(true);
        $this->assertNotNull(Yii::app()->db->connectionString);
    }
    
    
    
}

?>

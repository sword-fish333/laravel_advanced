<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/19/20
 * Time: 6:21 PM
 */

namespace App\DesignPatterns\Facade;


class PageFacade
{
        public function createAndServe($id,$msg){

            $db=new Database();
            $data=$db->getData($id);
            $template=new Template($id, $data);
            $logger=new Logger();

            $logger->log("$msg $id");

            $template->serve();

            echo 'done'.'<br>';
        }
}
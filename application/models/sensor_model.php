<?php

    // get / update

    class Sensor_model extends CI_Model {    
    
        public function get(){

            date_default_timezone_set("Asia/Bangkok");
            $currentDateTime = date("Y-m-d H:i:s");


            $sensors = $this->db->get('sensor')->result();
            foreach($sensors as $sensor){
              
                $recentSec = (strtotime($currentDateTime)-strtotime($sensor->startTime))/1; // different between currenttime and start time // divided by one for turn unknow num to second
                $toMonth = floor($recentSec / 2592000 % 12 );
                $toDay = floor($recentSec / 86400 % 30 );
                $toHour = floor($recentSec / 3600 % 24);
                $toMin = floor($recentSec / 60 % 60);
                $toSec = floor($recentSec % 60);
                $timeFormat = sprintf('%2dM %3dD %02d:%02d:%02d',$toMonth ,$toDay ,$toHour, $toMin, $toSec);

                $sensor->recentTime = $timeFormat ;    
                         
            }
            return $sensors;
        }

        public function update($nodeId,$status){
            
            $sensor = $this->db->get_where('sensor',array('nodeId'=>$nodeId))->result(); // sensor = set of sensor's data from the database.
            $previousStatus = $sensor[0]->status;
            
            $this->db->where('nodeId',$nodeId);

            date_default_timezone_set("Asia/Bangkok");
            $currentDateTime = date("Y-m-d H:i:s");  
            // create array which contains the data that will be updated in sensor's table
            $updateData = array (   
                'recentTime' => $currentDateTime
            );

            // if status change -> replace the new start time
            if ($previousStatus != $status) {
                $updateData["status"] = $status;
                $updateData["startTime"] = $currentDateTime;
            }

            $this->db->update('sensor', $updateData);

        }

        

    }

?>

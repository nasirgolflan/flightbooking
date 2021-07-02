<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'Medoo.php';

$status_code=true;
$start_time = microtime( true );

    try {

      $csv = $database->get("csv_trackers", '*', ['status' => [0,2,3], 'schedule_date[>]' => date('Y-m-d H:i:s'),
      'LIMIT' => 1
      ]);

      if(!is_array($csv) ){
        throw new exception('No Operation');
      }
    // echo sizeof($csv);exit;
      if((is_array($csv) && sizeof($csv) < 1)){
        throw new exception('File not found');
      }
  
        $filename = __DIR__.'/frontend/web/'.$csv['name'];
        $OutFile = $csv['name'].'_'.date('Ymd_His').'.csv';
        $outputFileName =__DIR__.'/frontend/web/'.$OutFile;

        $database->update('csv_trackers', ['output' => $OutFile, 'status' => 1], ['id' => $csv['id']]);

        $output = fopen($outputFileName, 'w');
      
        $index = 0;
        if (($h = fopen("{$filename}", "r")) !== FALSE) 
        {
            // $database->pdo->beginTransaction();
        
          while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
          {
          
            if($index <1) {

              $data = json_decode(strtoupper(json_encode($data)),true);
              $head = $data;
              $COURSES_ID = array_search('COURSES_ID', $data);
              // $XXX = array_search('XXX', $data);
              // $XXXX = array_search('XXXX', $data);
              $PAPER_CODE = array_search('PAPER_CODE', $data);
                   
              $QUESTION_NUMBER = array_search('QUESTION_NUMBER', $data);
              $PART = array_search('PART', $data);
              $QUESTION = array_search('QUESTION', $data);

              $SECTION = array_search('SECTION', $data);
              $MARKS = array_search('MARKS', $data);
            
                   
              fputcsv($output, array_merge($data, ['result']));

            } else {
              try
              {
                $err = '';
                if(!in_array('COURSES_ID', $head)){
                  $err .= 'COURSES_ID Missing,';
                }
              
                if(!$database->has('courses', ['id' => $data[$COURSES_ID]])){
                  $err .=  ' Course ID Invalid';
                }

                if($err != ''){
                  throw new exception($err);
                }

                $upload = [
                  'course_id' => $data[$COURSES_ID],
                  'series_id' => $data[$PAPER_CODE],
                  'question' => $data[$QUESTION],
                  'question_number' => $data[$QUESTION_NUMBER],
                  'part' => $data[$PART],
                  'section' => $data[$SECTION],
                  'marks' => $data[$MARKS]
                  ];
              
                  if($database->has('test_series', $upload)){
                    throw new exception('Already Exist');
                  }
                
                $database->insert('test_series', $upload );
          
                fputcsv($output, array_merge($data, ['success']));
              

            } catch (exception $e){
              $status_code = false;
                fputcsv($output, array_merge($data, [$e->getMessage()]));
              }
                  
            }
            error_log('done '. $index);
              ++$index;
              // if($index == 15){
              //   exit;
              // }
          }
          // $database->pdo->commit();
          fclose($h);
        }
      

        
        } catch (Exception $e){
            @fclose($h);
            echo $e->getMessage();
            exit;
        } finally {
            $end_time = microtime( true );
            $execution_time = ( $end_time - $start_time );
            $response['execution_time'] = $execution_time;
            echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            if($status_code){
              $update_status = ['status' => 2];
            }else{
              $update_status = ['status' => 3];
            }
            
            $database->update('csv_trackers', $update_status, ['id' => $csv['id']]);

            exit;
        }

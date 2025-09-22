<?php 
namespace Pear;
 use Pear\PearValidate;
 use Pear\PearMailTemplate;
 require_once '../../../../../wp-load.php';
 require_once './pear-setting.php';
 require_once './pear-template.php';
class Pearmail extends PearMailTemplate {

    private static $instance;
    //  
    private $to=array('devsamperu@gmail.com','69explorerperu@gmail.com');
    public function __construct() {
        ini_set('log_errors', 'On');
        ini_set('error_log', dirname(__FILE__) . '/error.log');
        if ($_SERVER['REQUEST_METHOD']=== 'POST') {
           $this->processForm();
        } 
    }
  
    public static function getInstance() {
      if (!self::$instance) {
        self::$instance = new Pearmail();
      }
      return self::$instance;
    }  
      public function processForm() {
     
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        $data = (object) $_POST;
        if ($type === 'contact') {
         $res=   $this->contact($data);
         print_r(json_encode($res));
        } else if ($type === 'booking') {
         $res=   $this->booking($data);
         print_r(json_encode($res));
        }
        else if ($type === 'inquire'){
            $res=   $this->inquire($data);
            print_r(json_encode($res));  
        }
        else if($type==='inquiryNow'){
            $res=   $this->inquiryNow($data);
            print_r(json_encode($res));  
        }
        else{
            print_r(json_encode(['status' =>500,'title'=>'error']));
        }
      }

      public function inquiryNow($data) {
        $message =parent::contact($data);
        $subject=$data->tour;
        $headers = array(
         'Content-Type: text/html; charset=UTF-8',
         'From: 69Explore Peru <info@69explorer.com>',
         'Reply-To: ' . $data->email, // Corregir espacio entre : y el email
     );
        $attachments=[];
     //    
      // validate all fields  empty
       $requiredFields = ['name','email','tour','country','comments'];
      $result=    PearValidate::validateFields($data,$requiredFields);
         if ($result!==true) {
             return  ['status' => 500, 'title' => 'Error', 'message' => "The field $result is required"] ; // 
         }
 
        $send = wp_mail($this->to, $subject, $message, $headers, $attachments);
         if($send){
             return [
                 'status' => 200,
                 'title' => 'Success',
                 'message' => 'Your form has been submitted successfully.',
             ];
             
         }else{
             return [
                 'status' => 500, // HTTP status code to indicate a bad request
                 'title' => 'Error',
                 'message' => 'The form could not be submitted. Please check the fields and try again.'
             ];
             
         }
 
     }
    public function contact($data) {
       $message =parent::contact($data);
       $subject=$data->subject;
       $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: 69Explore Peru <info@69explorer.com>',
        'Reply-To: ' . $data->email, // Corregir espacio entre : y el email
    );
       $attachments=[];
    //    
     // validate all fields  empty
      $requiredFields = ['fullname','email','subject','country','messaje'];
     $result=    PearValidate::validateFields($data,$requiredFields);
        if ($result!==true) {
            return  ['status' => 500, 'title' => 'Error', 'message' => "The field $result is required"] ; // 
        }

       $send = wp_mail($this->to, $subject, $message, $headers, $attachments);
        if($send){
            return [
                'status' => 200,
                'title' => 'Success',
                'message' => 'Your form has been submitted successfully.',
            ];
            
        }else{
            return [
                'status' => 500, // HTTP status code to indicate a bad request
                'title' => 'Error',
                'message' => 'The form could not be submitted. Please check the fields and try again.'
            ];
            
        }

    }
    public function booking($data) {
      $message =parent::contact($data);
       $subject=$data->tour;
       $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: 69Explore Peru <info@69explorer.com>',
        'Reply-To: ' . $data->email, // Corregir espacio entre : y el email
    );
       $attachments=[];
    //    
     // validate all fields  empty
      $requiredFields = ['tour','email'];
     $result=    PearValidate::validateFields($data,$requiredFields);
        if ($result !== true) {
            return  ['status' => 500, 'title' => 'Error', 'message' => "The field $result is required"] ; // 
        }

        $send = wp_mail($this->to, $subject, $message, $headers, $attachments);
        if($send){
            return [
                'status' => 200,
                'title' => 'Success',
                'message' => 'Your form has been submitted successfully.',
                'payLink'=>  get_permalink(420)
            ];
        }else{
            return [
                'status' => 500, // HTTP status code to indicate a bad request
                'title' => 'Error',
                'message' => 'The form could not be submitted. Please check the fields and try again.'
            ];
        }

    }
    // public plain to travel peru
     public function inquire($data){
        $message =parent::contact($data);
        $subject=$data->name;
        $headers = array(
         'Content-Type: text/html; charset=UTF-8',
         'From: 69Explore Peru <info@69explorer.com>',
         'Reply-To: ' . $data->email, // Corregir espacio entre : y el email
     );
        $attachments=[];
     //    
      // validate all fields  empty
       $requiredFields = ['name','email','country','phone'];
      $result=    PearValidate::validateFields($data,$requiredFields);
         if ($result!==true) {
             return  ['status' => 500, 'title' => 'Error', 'message' => "The field $result is required"] ; // 
         }
 
        $send = wp_mail($this->to, $subject, $message, $headers, $attachments);
         if($send){
             return [
                 'status' => 200,
                 'title' => 'Success',
                 'message' => 'Your form has been submitted successfully.',
             ];
             
         }else{
             return [
                 'status' => 500, // HTTP status code to indicate a bad request
                 'title' => 'Error',
                 'message' => 'The form could not be submitted. Please check the fields and try again.'
             ];
             
         }
     }
  
  }
  $app = Pearmail::getInstance();

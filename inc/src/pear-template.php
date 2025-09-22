<?php
namespace Pear;
use DateTime;
class PearMailTemplate{

    private $excludeKeys = ['recaptchaToken','type', 'pear_hook', 'action'];
    
    public function __construct(){

    }

    public function contact(object $data) {
        // Excluir las claves especificadas
        $filteredData = (array) $data;
        $filteredData = array_diff_key($filteredData, array_flip($this->excludeKeys));
        $currentDateTime = date('Y-m-d H:i:s');
        // template html
        $templatehtml='
        <html>
          <meta charset="UTF-8">
          <header>
          </header>
          <body style="background-color:#F0F0F0">
            <div style="max-width: 600px; margin: auto;background-color: #FFF; border-radius: 6px; padding: 10px; margin-top: 1rem; border-top: 5px solid #e91e3e;">
              <div style="text-align:center; background-color:#fff"><img src="https://69explorer.com/wp-content/uploads/2024/03/logo_69explorer.png" style="width:200px; height:auto;margin:auto;"></div>
              <h1 style=" text-align:center;font-size:1em;">69explorer Perú</h1>
              <table class="vv-table"  style="width:100%; border-collapse: collapse;">
              <tr><td style=" font-size: 1em;
              text-align: center;
              text-transform: uppercase;
              font-weight: 700;
              padding: 3px;
              margin-bottom: 1rem;
              border: 1px solid #ddd;
              border-radius: 5px;
              letter-spacing: 0.3em;" colspan="2">Contact information</td>
              </tr>';
              foreach ($filteredData as $key => $value) {
                $templatehtml .= '<tr style="border-bottom: 1px solid #e1d8d8;">';
                $templatehtml .= '<td style="padding:8px 0px;padding-right:8px;"><strong>' . str_replace("_", " ", $key) . '</strong>:</td>';
                $templatehtml .= '<td style="padding:8px 0px;">';
            
                if (is_object($value)) {
                    // Verificar si $value es un objeto stdClass
                    foreach ($value as $subKey => $subValue) {
                        $templatehtml .= '<strong>' .$subValue. '</strong>,';
                    }
                } elseif (is_array($value)) {
                    // Verificar si $value es un array
                    foreach ($value as $subKey => $subValue) {
                        $templatehtml .= '<strong>' . $subValue . '</strong>, ';
                    }
                } else {
                    // Si no es un objeto ni un array, simplemente agrégalo al HTML
                    $templatehtml .= $value;
                }
            
                $templatehtml .= '</td></tr>';
              }

              $templatehtml .= '                        
              <tr>
               <td style="padding-top:15px;" colspan="2">
               <div style="padding:10px 10px">
               <p style="font-size: 0.9rem;">
               This email was sent from <strong>69explorer Peru</strong> at '.$currentDateTime.'
                </p>                    
            </div>
               </td>
              </tr>
          </table>  
         
        </div>       
          </body>
          </html>
        ';    
        
        return $templatehtml;
    }



  public function formatDate($inputDate){
      if (empty($inputDate)) {
          return null;
      }
      $startDate = new DateTime($inputDate);
      $formattedDate = $startDate->format('d-m-Y');
      return $formattedDate;
  }
}
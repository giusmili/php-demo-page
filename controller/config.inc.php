<?php
const title = 'Batman begins';

class BaseController {
        static function content() {
            $long_date = new DateTime();
            $date_footer = new DateFooter();
            $content = [
                "content" => "Comment un homme seul peut-il changer le monde ? 
                              Telle est la question qui hante Bruce Wayne depuis 
                              cette nuit tragique où ses parents furent abattus 
                              sous ses yeux, dans une ruelle de Gotham City. 
                              Torturé par un profond sentiment de colère et de culpabilité, 
                              le jeune héritier de cette richissime famille fuit Gotham pour un long et discret voyage à travers le monde. 
                              Le but de ses pérégrinations : sublimer sa soif de vengeance en trouvant de nouveaux moyens de lutter contre l’injustice.",
                "title" => "Description",
                "date" => $long_date->format('d-m-Y'),
                "css" => "./css/style.css"
            ];
    
            return $content; #retour de valeur
        }
    }
    
$content = BaseController::content(); #varibale du tableau affactée à la classe
 

                
         $_signature = $_SERVER['SERVER_SIGNATURE'];
        
        
                class DateFooter {
                        public function dates($date) {
                               return $date;
                       }
               }
               
               $date = date("Y"); // Exemple de date
       
                           
                           // Instanciation de la classe DateFooter
         $dateFooter = new DateFooter();
                           
                      
               

           
               
     
      
      # var_dump($content)
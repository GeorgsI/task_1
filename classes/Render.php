<?php
namespace classes;


class Render extends Formatting{
    public $data;
            
    
    
    function __construct($data) {
        $this->data = $data;
        $this->out($this->data);
    }
    
    
    
    function out($data){
        
    $out = "<article class='article__container'>";
    $color = '';
        
    
    for($i =0; $i< count($data); $i++){
        
        
        if($i % 2 == 0 ){
            $color = Color::Red->value; 
        }else{
            $color = Color::Green->value; 
        }
        

        forEach($data[$i] as $key => $value)
        {
            if($key =='Person'){
                $out .= "<ul class='blockSubscription' style='color:{$color} '><li>
                                                    <p>С уважением,<p>
                                                    <p>".$value."</p>
                                                    </li>";
            }
            else if($key =='phone'){
                $phone = parent::formatting($value); 
                $out .= "<li>
                            <p>Тел:<p>
                            <a href='tel:+{$value}'>{$phone}</a>
                        </li>"; 
            }
            else if($key =='mail'){
                $out .= "<li><a href='mailto:{$value}'>{$value}</a></li></ul>";
            }  
        }
        
    }
        echo $out."</article>";  
  
    } 
}

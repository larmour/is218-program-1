<?php
  
  // makes class called html
  class html {}
    // makes protected 
    protected $html;
   //makes a function, called excessor method there to access a protected/private 
   public function getHTML()  {

     return $this->html;
  }
  // class making a link
  class HTMLLink extends html [
    public function getLink ($url, $name) {
   
      $this->html = '<a href="' . $url . '">'. $LinkName . '</a>';
      
      return $this->html;

    }




  }
  
  //instantiate object
  $obj = new HTMLLink;
  // passing 2 perameters 
  echo $obj->getLink('www.google.com', 'Google');

  print_r($obj);



?>

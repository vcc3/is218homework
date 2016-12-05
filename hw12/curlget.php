<?php

  class curlFunction{
  
     public $url=null;
     public $postURL =null;
     public $parameters =array();
     // a link to send user back if error occurs.
     public $link_address ="index.html"
     
     
     
  public function __construct($url)
  //make ssure $url specified is a url and the url value is set.
      if(isset($url)){
        $this->url=$url;
        $this->init();
      }
             
        
        // the get  function
      function httpGet($url){
        $ch = curl_init();  
        // meat of function
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
 
        $output=curl_exec($ch);
       //error code to echo out
        if(curl_errno($ch)){
          echo 'Curl error: ' . curl_error($ch);
           echo '<a href="'.$link_address.'">Back to home</a>';
        }
 
          curl_close($ch);
        return $output;
      }
      // culr post needs the url and parameters to post to
      function httpPost($postURL,$parameters){
        $postData = '';
         
         foreach($params as $k => $v){ 
            $postData .= $k . '='.$v.'&'; 
         }
         //trims the data that is being posted to the site.
        $postData = rtrim($postData, '&');
       //initializing the site
        $ch = curl_init();  
 
         curl_setopt($ch,CURLOPT_URL,$url);
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         curl_setopt($ch,CURLOPT_HEADER, false); 
         curl_setopt($ch, CURLOPT_POST, count($postData));
         curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
 
          $output=curl_exec($ch);
          //error checking this will show the error found in the post. 
          //right now i also have set placeholder for return code.
          if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
            echo '<a href="'.$link_address.'">Back to home</a>';
          } 
      curl_close($ch);
      return $output; 
    }

}
?>
 <?php
  

function send_LINE($msg){
 $access_token = 'SAciHhcAG3OKDLgkFKo/eJXRQs3Q+lpMbZ9r+0IEfoB4CysaYl8Grx0IV19oXZ7edB7ODDG2zoX/zRHiUcb5MQX/7mwIjS8vhDbs02KIYH1LLpTs5DEjHSQV+E7pQ1uu6R/dZaVDZA0z3fp39ZmHxwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'Uafaa423fe0b04cf0f613435cf332dc1d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>


<html>
    <body>
    <?php

    class Movie {
        public $keyapi;
        public $id;
        function __construct($key,$id){
            $this->keyapi=$key;
            $this->id=$id;
        }
        public function retrieveMovie(){
            $url = 'https://imdb-api.com/en/API/FullCast/'.$this->keyapi .'/'.$this->id;
            $options = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url);
            $obj=json_decode($result,true,512,JSON_OBJECT_AS_ARRAY);
            return $obj;
        }
        public function toHtml(){
            $obj=$this->retrieveMovie();
            echo"
                <table style='width:100%' class='data-table'>
                    <tr>
                        <th>title</th>
                        <th>fullTitle</th>
                        <th>year</th>
                    </tr>";
                        echo  " <tr> <td>" ;
                        echo $obj['title']; 
                        echo "</td>";
                        echo" <td> ";
                        echo $obj['fullTitle']; 
                        echo"</td>";
                        echo" <td>" ;
                        echo $obj['year'];
                        echo"</td>";
                        echo " </tr>";
                echo "</table>";
        }

    }
    $movies=new Movie("k_3rh7vw00","tt1375666");
    $movies->toHtml();
    ?>
    </body>
</html>



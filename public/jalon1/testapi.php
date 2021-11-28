
<html>
    <body>
    <?php

    class Movie {

  
        public function retrieveMovie(){
            $url = 'https://imdb-api.com/en/API/Top250TVs/k_fuxbwlin';
            $options = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url);
            $obj=json_decode($result,true,512,JSON_OBJECT_AS_ARRAY); 
            $data=$obj['items'];
            for($i=0;$i<10;$i=$i+1){
            $id=$data[$i]['id'];
            $url2 = 'https://imdb-api.com/en/API/Title/k_fuxbwlin/'.$id;
            $options2 = array(
                'https' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                )
            );
            $context2  = stream_context_create($options2);
            $result2 = file_get_contents($url2);
            $obj2=json_decode($result2,true,512,JSON_OBJECT_AS_ARRAY);
            print_r($obj2);
            
        }}
        public function toHtml(){
            $obj=$this->retrieveMovie();
            print_r($obj);
            /*"
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
                echo "</table>";*/
        }

    }
    //Top250Movies/k_fuxbwlin
    $movies=new Movie();
    $movies->retrieveMovie();
    ?>
    </body>
</html>



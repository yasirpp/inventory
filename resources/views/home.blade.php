<html lang="{{ config('app.locale') }}">
    <body>
        <h2>Welcome home</h2>
        
        
        @php
          // echo "<pre>";print_r($users);echo "</pre>";die();
          foreach($users as $arr){
            echo $arr->id.'<br>';
            echo $arr->user_name.'<br>';
            echo $arr->password.'<br>';
            echo $arr->email.'<br>';
            echo $arr->role.'<br>';
            echo $arr->register_date.'<br>';
            echo "===================================<br>";
          }
        @endphp
        
    </body>
</html>


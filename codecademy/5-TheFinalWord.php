<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          // Khi một class được khai báo là final thì không lớp nào có thể kế thừa nó và nó chỉ có thể khởi tạo.
          final public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
            public function honk() {
                return "Beep beep!";
            }
        }
        
        $bicycle = new Bicycle();
        echo $bicycle->honk();
      ?>
    </p>
  </body>
</html>
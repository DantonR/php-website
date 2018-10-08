<?php
  if($_POST){
    // var_dump($_POST['email']);
    // $name = $_POST['name'];
    // $message = $_POST['password'];

    extract($_POST);
    // var_dump($email);

    $errors = array();

    if(!$email){
      array_push($errors, 'Name is required, please enter a value');
    } else if(strlen($email) < 2){
      array_push($errors, 'Please enter at least two characters for your name');
    } else if(strlen($email) > 100){
      array_push($errors, 'Your name cant be more than 100 characters');
    } else if (strpos($email, '.') === false){
      array_push($errors, 'You need to enter a valid email address');
    }

    if(!$password){
      array_push($errors, 'You need to enter a password');
    } else if(strlen($password) < 4){
      array_push($errors, 'Password needs to be contain at least 4 characters');
    }

    if(empty($errors)){
      var_dump('You are good to go');
    }
  }

  $page = 'home';
  require('templates/header.php');
  // require();
?>

  <main>
    <h2>Home</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi architecto, beatae vel et veniam eos eveniet placeat ducimus ab quam porro minus recusandae tempore corporis. Delectus reprehenderit enim laborum hic.</p>

    <?php if($_POST && !empty($errors)):?>
      <div class="alert alert-danger">
        <ul>
          <?php foreach($errors as $singleError): ?>
            <li><?= $singleError ?></li>
            <br>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif ?>

    <form action="index.php" method="post" enctype="multipart/form-data">
      <label class="labels" for="email">Email</label>
      <input type="email" name="email" id="" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
      <br>
      <label class="labels" for="pass">Password</label>
      <input type="password" name="password" id="">
      <input type="submit" value="Submit">
    </form>
  </main>

<?php
  include('templates/footer.php');
?>
</body>
</html>
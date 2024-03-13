if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        
        header("Location: index.html");
        exit();
    } else {
       
        header("Location: login.html");
        exit();
    }
}
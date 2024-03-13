if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['apelido']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        header("Location: index.html");
        exit();
    } else {
        
        header("Location: registro.html");
        exit();
    }
}
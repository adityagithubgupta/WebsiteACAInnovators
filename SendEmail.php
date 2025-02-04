if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "guptaditya.1993@gmail.com";
    $subject = "New Contact Form Submission";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailBody = "You have received a new message:\n\n";
    $emailBody .= "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message\n";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
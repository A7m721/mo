
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "01021673275d@gmail.com";  // غيّر هذا البريد لبريدك الفعلي
    $subject = "رسالة جديدة من نموذج الاتصال";
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\nالرسالة:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }
}
?>
